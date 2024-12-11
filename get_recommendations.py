import pickle
import numpy as np

# Load the recommendation model and data
tfidf = pickle.load(open('tfidf_vectorizer.pkl', 'rb'))
cosine_sim = np.load('cosine_similarity_matrix.npy')

# Dummy lawyer data (in a real system, this would be dynamic from your database)
lawyers = [
    {'name': 'Lawyer 1', 'specialization': 'Criminal'},
    {'name': 'Lawyer 2', 'specialization': 'Civil'},
    {'name': 'Lawyer 3', 'specialization': 'Family'}
]

def get_recommendation(case_details):
    # Transform the case details to a TF-IDF vector
    case_vector = tfidf.transform([case_details])

    # Calculate cosine similarity of the input case with all stored cases
    cosine_similarities = cosine_sim.dot(case_vector.T).toarray().flatten()

    # Get the index of the most similar case
    most_similar_index = np.argmax(cosine_similarities)

    # Get the recommended lawyer based on the most similar case
    recommended_lawyer = lawyers[most_similar_index]

    return recommended_lawyer

# Example use of the recommendation function
case_details_input = "Client is accused of theft, looking for legal help in criminal case."
recommended_lawyer = get_recommendation(case_details_input)

print("Recommended Lawyer:", recommended_lawyer)
