from flask import Flask, request, jsonify
import subprocess

app = Flask(__name__)

@app.route('/webhook', methods=['POST'])
def github_webhook():
    data = request.get_json()
    if 'ref' in data and data['ref'] == 'refs/heads/master':  # Pastikan hanya menerima push ke branch master
        try:
            # Gantilah perintah di bawah ini dengan aksi yang Anda inginkan saat ada push/commit di branch master
            # Contoh: Kirim pesan ke bot Telegram
            send_telegram_notification(data)
        except Exception as e:
            print("Error:", e)
    return jsonify({'message': 'Webhook received successfully'}), 200

def send_telegram_notification(data):
    # Gantilah 'TELEGRAM_BOT_TOKEN' dengan token bot Telegram Anda
    # Gantilah 'CHAT_ID' dengan CHAT_ID tempat Anda ingin mengirim notifikasi
    bot_token = '6383699978:AAFaXvcamUWOwMD9tCeFzYqt8eVR4rA6K3s'
    chat_id = '-1001630231231'
    
    commit_message = data['head_commit']['message']
    pusher_name = data['pusher']['name']
    repository_name = data['repository']['name']
    
    message = f"Commit baru oleh {pusher_name} pada repositori {repository_name}\n{commit_message}"
    
    # Kirim pesan menggunakan bot Telegram
    url = f'https://api.telegram.org/bot{bot_token}/sendMessage'
    headers = {'Content-Type': 'application/x-www-form-urlencoded'}
    data = {'chat_id': chat_id, 'text': message}
    response = requests.post(url, headers=headers, data=data)
    if response.status_code == 200:
        print("Pesan berhasil dikirim ke Telegram.")
    else:
        print("Gagal mengirim pesan ke Telegram.")

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=1000)
