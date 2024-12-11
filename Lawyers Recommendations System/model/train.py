import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
import pickle

# Load your dataset
data = pd.read_csv('../lawyers_data.csv')

# Combine relevant fields into a single text column
data['combined'] = data['specialization'] + ' ' + data['experience'].astype(str) + ' ' + data['fees'].astype(str)

# Create a TF-IDF vectorizer
vectorizer = TfidfVectorizer()

# Fit and transform the data
tfidf_matrix = vectorizer.fit_transform(data['combined'])

# Compute cosine similarity matrix
cosine_sim = cosine_similarity(tfidf_matrix, tfidf_matrix)

# Save the cosine similarity matrix
with open('model/cosine_similarity_matrix.pkl', 'wb') as file:
    pickle.dump(cosine_sim, file)

# Save the TF-IDF vectorizer
with open('model/tfidf_vectorizer.pkl', 'wb') as file:
    pickle.dump(vectorizer, file)
