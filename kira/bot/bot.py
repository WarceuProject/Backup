import telegram
from flask import Flask, request

app = Flask(__name__)
bot_token = '6383699978:AAFaXvcamUWOwMD9tCeFzYqt8eVR4rA6K3s'
bot = telegram.Bot(token=bot_token)
chat_id = '1001630231231'

@app.route('/', methods=['POST'])
def github_webhook():
    data = request.get_json()
    if data['ref'] == 'refs/heads/master':  # Pastikan hanya menerima commit dari branch master
        message = f"Commit baru oleh {data['pusher']['name']} pada repositori {data['repository']['name']}\n{data['head_commit']['message']}"
        bot.send_message(chat_id=chat_id, text=message)
    return 'OK'

if __name__ == '__main__':
    app.run(port=1000)


