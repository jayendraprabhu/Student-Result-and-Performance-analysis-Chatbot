<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
    <style>
        .chat-container {
            width: 400px;
            height: 500px;
            border: 1px solid #ccc;
            overflow-y: scroll;
            padding: 10px;
        }

        .user-message {
            margin-bottom: 10px;
            color: blue;
        }

        .bot-message {
            margin-bottom: 10px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Chatbot</h1>
    <div class="chat-container" id="chat-container"></div>
    <input type="text" id="user-input" />
    <button onclick="sendUserMessage()">Send</button>

    <script src="script.js"></script>
</body>
</html>