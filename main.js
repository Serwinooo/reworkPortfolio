document.addEventListener('DOMContentLoaded', function () {
    const chatToggle = document.getElementById('chat-toggle');
    const chatBody = document.getElementById('chat-body');
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');

    // Toggle chat widget
    document.getElementById('chat-header').addEventListener('click', () => {
        chatBody.style.display = chatBody.style.display === 'none' ? 'block' : 'none';
        chatToggle.textContent = chatBody.style.display === 'none' ? '▼' : '▲';
    });

    // 1. Device ID Management
    function getDeviceId() {
        let deviceId = localStorage.getItem('deviceId');
        if (!deviceId) {
            deviceId = 'device-' + Math.random().toString(36).substr(2, 9) + Date.now();
            localStorage.setItem('deviceId', deviceId);
        }
        return deviceId;
    }

    // 2. Send Message Function
    function sendMessage(message) {
        const deviceId = getDeviceId();

        fetch('send_message.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                device_id: deviceId,
                sender_role: 'user', // Or 'admin' if sending from admin
                message: message
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Message sent:', message);
                // Clear input field after sending message
                chatInput.value = '';
                fetchMessages(); // Optionally refresh the chat messages
            } else {
                console.error('Message sending failed:', data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // 3. Fetch Messages Function
    function fetchMessages() {
        const deviceId = getDeviceId();

        fetch('fetch_messages.php?device_id=' + deviceId)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    chatMessages.innerHTML = ''; // Clear the chat box

                    data.messages.forEach(msg => {
                        const messageDiv = document.createElement('div');
                        messageDiv.textContent = `[${msg.sender_role}] ${msg.message}`;
                        chatMessages.appendChild(messageDiv);
                    });
                } else {
                    console.error('Failed to fetch messages:', data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    // 4. Event Listeners for Sending Messages
    chatForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent default form submission (page reload)
        const message = chatInput.value.trim();
        if (message) {
            sendMessage(message);
        }
    });

    // Fetch previous messages on page load
    fetchMessages();
});
