from flask import Flask, request, jsonify, render_template
import pickle
import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

# Load the lawyer data
data = pd.read_csv('lawyers_data.csv')

# Preprocess the specialization field
data['specialization'] = data['specialization'].str.lower().str.strip()
data['processed_combined'] = data['specialization'] + " " + data['experience'].astype(str) + " " + data['fees'].astype(str)

# Initialize the vectorizer and fit on the processed data
vectorizer = TfidfVectorizer(max_features=5000, stop_words='english', sublinear_tf=True)
tfidf_matrix = vectorizer.fit_transform(data['processed_combined'])

# Save the vectorizer and tfidf_matrix for future use
with open('model/tfidf_vectorizer.pkl', 'wb') as file:
    pickle.dump(vectorizer, file)

with open('model/cosine_similarity_matrix.pkl', 'wb') as file:
    pickle.dump(tfidf_matrix, file)

# Initialize the Flask app
app = Flask(__name__)
def recommend_lawyer(client_input):
    # Vectorize the client input
    client_vector = vectorizer.transform([client_input])

    # Calculate cosine similarity
    client_cosine_sim = cosine_similarity(client_vector, tfidf_matrix)

    # Get indices of top similar lawyers
    similar_lawyer_indices = client_cosine_sim.argsort()[0][::-1]

    # Retrieve top 5 lawyers
    recommendations = []
    for idx in similar_lawyer_indices[:5]:
        lawyer = data.iloc[idx]
        recommendations.append({
            'lawyer_id': int(lawyer['lawyer_id']),  # Convert to native int
            'name': lawyer['name'],
            'specialization': lawyer['specialization'],
            'experience': int(lawyer['experience']),  # Convert to native int
            'fees': float(lawyer['fees']),  # Convert to native float
            'contact_number': lawyer['contact_number'],
            'email': lawyer['email']
        })
    return recommendations

# Define routes
@app.route('/')
def index():
    return render_template('index.html')

@app.route('/recommend', methods=['POST'])
def get_recommendations():
    # Get client input from JSON
    data = request.json
    specialization = data.get('specialization', '').lower().strip()
    experience = data.get('experience', '')
    fees = data.get('fees', '')

    # Combine input
    client_input = f"{specialization} {experience} {fees}"

    # Get recommendations
    recommendations = recommend_lawyer(client_input)

    return jsonify({'recommendations': recommendations})

if __name__ == '__main__':
    app.run(debug=True)
