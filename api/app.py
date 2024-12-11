from flask import Flask, request, jsonify
import pandas as pd
import pickle
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

# Load lawyer data from CSV
lawyers_df = pd.read_csv("lawyers_data.csv")

# Preprocess data
tfidf_vectorizer = TfidfVectorizer()
specializations = lawyers_df["specialization"].astype(str)
tfidf_matrix = tfidf_vectorizer.fit_transform(specializations)

# Save the TF-IDF vectorizer and cosine similarity matrix for reuse
with open("tfidf_vectorizer.pkl", "wb") as tfidf_file:
    pickle.dump(tfidf_vectorizer, tfidf_file)

cosine_similarity_matrix = cosine_similarity(tfidf_matrix, tfidf_matrix)
with open("cosine_similarity_matrix.pkl", "wb") as cosine_file:
    pickle.dump(cosine_similarity_matrix, cosine_file)

@app.route("/recommend", methods=["POST"])
def recommend():
    # Load request data
    data = request.get_json()
    specialization = data.get("specialization", "").lower()
    experience = int(data.get("experience", 0))
    fees = int(data.get("fees", 0))

    # Filter lawyers based on experience and fees
    filtered_lawyers = lawyers_df[
        (lawyers_df["experience"] >= experience) &
        (lawyers_df["fees"] <= fees)
    ]

    # Compute specialization similarity
    specialization_vec = tfidf_vectorizer.transform([specialization])
    similarities = cosine_similarity(specialization_vec, tfidf_matrix).flatten()
    filtered_lawyers["similarity"] = similarities[filtered_lawyers.index]

    # Sort by similarity score
    recommendations = filtered_lawyers.sort_values(by="similarity", ascending=False)

    # Convert to JSON response
    result = recommendations.head(5).to_dict(orient="records")
    return jsonify({"recommendations": result})

if __name__ == "__main__":
    app.run(debug=True)
