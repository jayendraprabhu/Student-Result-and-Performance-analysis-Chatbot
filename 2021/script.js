// Create a function to send user messages and receive responses
function sendUserMessage() {
    const userInput = document.getElementById('user-input').value;
    if (userInput !== '') {
        displayUserMessage(userInput);
        fetchResponse(userInput)
            .then(response => displayBotMessage(response))
            .catch(error => console.error(error));
    }
}

// Display user message in the chat container
function displayUserMessage(message) {
    const chatContainer = document.getElementById('chat-container');
    const userMessageElement = document.createElement('div');
    userMessageElement.className = 'user-message';
    userMessageElement.textContent = message;
    chatContainer.appendChild(userMessageElement);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

// Display bot message in the chat container
function displayBotMessage(message) {
    const chatContainer = document.getElementById('chat-container');
    const botMessageElement = document.createElement('div');
    botMessageElement.className = 'bot-message';
    botMessageElement.textContent = message;
    chatContainer.appendChild(botMessageElement);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

// Send user message to the server and receive a response
async function fetchResponse(userMessage) {
    const response = await fetch('get_response.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ message: userMessage })
    });
    const data = await response.json();
    return data.result;
}