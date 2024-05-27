from flask import Flask, render_template, request, jsonify
import nltk
from nltk.tokenize import word_tokenize
from nltk.corpus import wordnet
from nltk.metrics import edit_distance
import spacy

app = Flask(__name__, template_folder='\templates')
# Download NLTK resources (run once)
nltk.download('punkt')
nltk.download('wordnet')
# Initialize spaCy model
nlp = spacy.load('en_core_web_sm')

course_info = {
    'Microsoft Cybersecurity Analyst Professional Certificate': {
        'instructor': 'Microsoft',
        'rate': 4.8,
        'duration': '6 months at 10 hours a week',
        'link': 'https://www.coursera.org/learn/introduction-to-ai',
        'category': 'cs'
    },
    'Cybersecurity for Everyone': {
        'instructor': 'Charles Harry',
        'rate': 4.7,
        'duration': '21.0 Hours',
        'link': 'https://www.coursera.org/learn/cybersecurity-for-everyone',
        'category': 'cs'
    },
    'Machine Learning Specialization': {
        'instructor': 'Andrew Ng',
        'rate': 4.9,
        'duration': '6 months at 7 hours a week',
        'link': 'https://www.coursera.org/learn/machine-learning',
        'category': 'ml'
    },
    'Google Cybersecurity Professional Certificate': {
        'instructor': 'Google Career Certificates',
        'rate': 4.8,
        'duration': '6 months at 7 hours a week',
        'link': 'https://www.coursera.org/professional-certificates/google-cybersecurity?utm_medium=sem&utm_source=bg&utm_campaign=b2c_emea_google-cybersecurity_google_ftcof_professional-certificates_arte_april_24_dr_geo-multi-set3_sem_rsa_bing_lg-all&campaignid=662807892',
        'category': 'cs'
    },
    'Intro to Machine Learning': {
        'instructor': 'Katie Malone',
        'rate': 4.1,
        'duration': '10-week',
        'link': 'https://www.udacity.com/course/intro-to-machine-learning--ud120',
        'category': 'ml'
    },
    'Learning From Data (Introductory ML)': {
        'instructor': 'Yaser S. Abu-Mostafa',
        'rate': 4.1,
        'duration': '6 months at 10 hours a week',
        'link': 'https://www.edx.org/learn/machine-learning/caltech-learning-from-data-introductory-machine-learning?index=product&queryID=c587eeb50fbdff2faa9214ac7c057d3e&position=3&linked_from=autocomplete&c=autocomplete',
        'category': 'ml'
    },
    'Foundations of Front-End Web Development': {
        'instructor': 'Davide Molin',
        'rate': 4.5,
        'duration': '20hr 14min of on-demand video',
        'link': 'https://www.udemy.com/course/foundations-of-front-end-development/',
        'category': 'frontend'
    },
    'Meta Front-End Developer Professional Certificate': {
        'instructor': 'Meta Staff',
        'rate': 4.7,
        'duration': '7 months at 6 hours a week',
        'link': 'https://www.coursera.org/professional-certificates/meta-front-end-developer',
        'category': 'frontend'
    },
    'Become a Professional React Developer Specialization': {
        'instructor': 'Cassidy Williams',
        'rate': 4.9,
        'duration': '2 months at 10 hours a week',
        'link': 'https://www.coursera.org/specializations/react',
        'category': 'frontend'
    },
    'Getting started with Flutter Development': {
        'instructor': 'Google Cloud Training',
        'rate': 4.3,
        'duration': '1 hour',
        'link': 'https://www.coursera.org/projects/googlecloud-getting-started-with-flutter-development-guo1q',
        'category': 'flutter'
    },
    'Flutter Course for Beginners–Cross Platform App Development Tutorial': {
        'instructor': 'Mahmoud Alaa',
        'rate': 4.5,
        'duration': '37 hours',
        'link': 'https://www.classcentral.com/classroom/freecodecamp-flutter-course-for-beginners-37-hour-cross-platform-app-development-tutorial-104327',
        'category': 'flutter'
    },
    'Flutter Tutorial for Beginners': {
        'instructor': 'unknown',
        'rate': 5,
        'duration': '6 hours',
        'link': 'https://www.classcentral.com/classroom/youtube-flutter-tutorial-for-beginners-45851',
        'category': 'flutter'
    },
    'IBM certificate': {
        'instructor': 'Svetlana Levitan',
        'rate': 4.6,
        'duration': '5 months at 10 hours a week',
        'link': 'https://www.coursera.org/professional-certificates/ibm-data-science',
        'category': 'ds'
    },
    'Data Science Projects - Data Analysis & Machine Learning': {
        'instructor': 'Onur Baltacı',
        'rate': 4.6,
        'duration': '1hr 24min of on-demand video',
        'link': 'https://www.udemy.com/course/data-science-projects-3/',
        'category': 'ds'
    },
    'Data Science Advanced Analytics Interview Prep. Kit - 182+': {
        'instructor': 'Rupak Bob Roy',
        'rate': 4.7,
        'duration': '1hr 2min of on-demand video',
        'link': 'https://www.udemy.com/course/data-science-advanced-analytics-interview-preparation-kit/',
        'category': 'ds'
    },
    'Meta Back-End Developer Professional Certificate': {
        'instructor': 'Meta Staff',
        'rate': 4.7,
        'duration': '8 months at 6 hours a week',
        'link': 'https://www.coursera.org/professional-certificates/meta-back-end-developer',
        'category': 'backend'
    },
    'Back-End Developer Capstone': {
        'instructor': 'Meta Staff',
        'rate': 4.6,
        'duration': '20 hours (approximately)',
        'link': 'https://www.coursera.org/learn/back-end-developer-capstone',
        'category': 'backend'
    },
    'Node.js & MongoDB: Developing Back-end Database Applications': {
        'instructor': 'Ramanujam Srinivasan',
        'rate': 4.8,
        'duration': '19 hours (approximately)',
        'link': 'https://www.coursera.org/learn/intermediate-back-end-development-with-node-js-mongodb',
        'category': 'backend'
    },
    'Meta Android Developer Professional Certificate': {
        'instructor': 'Meta Staff',
        'rate': 4.7,
        'duration': '8 months at 7 hours a week',
        'link': 'https://www.coursera.org/professional-certificates/meta-android-developer',
        'category': 'android'
    },
    'Android Architecture/Multimedia Framework': {
        'instructor': 'Board Infinity',
        'rate': 4.7,
        'duration': '3 weeks at 5 hours a week',
        'link': 'https://www.coursera.org/learn/android-architecturemultimedia-framework',
        'category': 'android'
    },
    'Fundamentals of VueJS': {
        'instructor': 'Board Infinity',
        'rate': 3.9,
        'duration': '4 hours',
        'link': 'https://www.coursera.org/learn/fundamentals-of-vuejs',
        'category': 'android'
    },
    'Introduction to Artificial Intelligence': {
        'instructor': 'Dr. Abhinanda Sarkar',
        'rate': 4.48,
        'duration': '1 Hour',
        'link': 'https://www.mygreatlearning.com/academy/learn-for-free/courses/introduction-to-artificial-intelligence',
        'category': 'ai'
    },
    'Applications of Artificial Intelligence': {
        'instructor': 'Nikola Milosevic',
        'rate': 4.48,
        'duration': '1 Hour',
        'link': 'https://www.mygreatlearning.com/academy/learn-for-free/courses/applications-of-ai',
        'category': 'ai'
    },
    'coursera(IBM) Introduction to Artificial Intelligence': {
        'instructor': 'Rav Ahuja',
        'rate': 4.7,
        'duration': '8 Hours',
        'link': 'https://www.coursera.org/learn/introduction-to-ai',
        'category': 'ai'
    },
    'udemy Learn basics about Artificial Intelligenc': {
        'instructor': 'Nikola Milosevic',
        'rate': 5,
        'duration': '6 hours',
        'link': 'https://www.udemy.com/course/learn-basics-of-artificial-intelligence/',
        'category': 'ai'
    }
}


admin_contact_info = [
    {'email': 'mohamed50302032mn@gmail.com', 'phone': '+201050302032'},
    {'email': 'mokhalid2022004@gmail.com', 'phone': '+201011680659'},
    {'email': 'moeltaieb17@gmail.com', 'phone': '+201065439402'}
]
def preprocess_input(query):
    # Remove spaces and convert to uppercase
    return query.replace(" ", "").upper()

def spell_correction(word):
    """
    Perform spell correction using NLTK's edit distance and WordNet.
    """
    suggestions = wordnet.synsets(word)
    if suggestions:
        return suggestions[0].lemmas()[0].name().replace('_', ' ')
    return word

def get_synonyms(word):
    """
    Get synonyms for a given word using WordNet.
    """
    synonyms = set()
    for syn in wordnet.synsets(word):
        for lemma in syn.lemmas():
            synonyms.add(lemma.name().replace('_', ' '))
    return synonyms

def get_response(query, course_info):
    query_processed = preprocess_input(query)
    response = ""

    # Search for courses based on name, substring, or similarity
    found_courses = []
    for course_name, course_info in course_info.items():
        if query_processed in preprocess_input(course_name):
            found_courses.append(course_info)

    if found_courses:
        # If multiple courses are found, return information for all of them
        response = ""
        for course in found_courses:
            response += f"Course: {course_name}\nInstructor: {course['instructor']}\nRate: {course['rate']}\nDuration: {course['duration']}\nLink: {course['link']}\nCategory: {course['category']}\n\n"
    elif query_processed == 'GUIDE':
        response = "Welcome to our website! You can explore our courses and find detailed information about each one. If you need assistance, feel free to ask."
    elif query_processed == 'CONTACTADMIN':
        contact_info = '\n'.join([f"Email: {admin['email']}, Phone: {admin['phone']}" for admin in admin_contact_info])
        response = f"You can contact the admins:\n{contact_info}"
    else:
        # Fallback responses
        synonyms = set()
        for word in query_processed.split():
            synonyms |= get_synonyms(word)
        for synonym in synonyms:
            if synonym in course_info:
                course = course_info[synonym]
                response = f"Did you mean '{synonym}'?\nCourse: {synonym}\nInstructor: {course['instructor']}\nRate: {course['rate']}\nDuration: {course['duration']}\nLink: {course['link']}\nCategory: {course['category']}"
                break

        if not response:
            # Advanced query handling
            doc = nlp(query_processed)
            entities = [ent.text for ent in doc.ents]
            if entities:
                response = f"Based on your query, you might be interested in courses related to {' and '.join(entities)}."

        if not response:
            response = "I'm sorry, I don't understand. Can you please ask another question?"

    return response
app = Flask(__name__, static_url_path='/static')
@app.route('/')
def index():
    return render_template('chat.html')

@app.route('/get_response', methods=['POST'])
def get_bot_response():
    user_input = request.form['user_input']
    bot_response = get_response(user_input, course_info)  # Pass course_info as argument
    return jsonify({'bot_response': bot_response})

if __name__ == "__main__":
    app.run(debug=True)
