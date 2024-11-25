
from flask import Flask, jsonify
import requests

app = Flask(__name__)

@app.route('/api/gempa-terkini', methods=['GET'])
def gempa_terkini():
    url = 'https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml'
    response = requests.get(url)
    if response.status_code == 200:
        return response.content, 200
    else:
        return jsonify({"error": "Data tidak ditemukan"}), 404

if __name__ == '__main__':
    app.run(debug=True)
