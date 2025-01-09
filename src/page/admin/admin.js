document.addEventListener('DOMContentLoaded', function () {
    const userList = document.getElementById('user-list');
    const messageContainer = document.getElementById('messages');
    const replyForm = document.getElementById('reply-form');
    const replyDeviceId = document.getElementById('reply-device-id');
    const replyMessage = document.getElementById('reply-message');

    // Fetch active conversations
    function fetchConversations() {
        fetch('fetch_conversations.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    userList.innerHTML = '';
                    data.conversations.forEach(convo => {
                        const button = document.createElement('button');
                        button.textContent = `Device ID: ${convo.device_id}`;
                        button.className = 'btn btn-secondary m-1';
                        button.onclick = () => {
                            console.log(`Fetching messages for device ID: ${convo.device_id}`); // Debugging line
                            fetchMessages(convo.device_id);
                        };
                        userList.appendChild(button);
                    });
                } else {
                    userList.innerHTML = '<p>No active conversations found.</p>';
                }
            });
    }

// Fetch messages for a specific device ID
function fetchMessages(deviceId) {
    replyDeviceId.value = deviceId;
    console.log(`Fetching messages for device ID: ${deviceId}`);

    fetch(`admin_messages.php?device_id=${deviceId}`)
        .then(response => {
            console.log('Response Status:', response.status); // Log HTTP status
            return response.text();  // Read the response as plain text first
        })
        .then(text => {
            console.log('Raw Response Text:', text);  // Log the entire raw response
            try {
                const data = JSON.parse(text);  // Try parsing the response as JSON
                console.log('Parsed Data:', data);  // Log parsed data
                if (data.success) {
                    messageContainer.innerHTML = '';
                    data.messages.forEach(msg => {
                        const messageDiv = document.createElement('div');
                        messageDiv.textContent = `[${msg.sender_role}] ${msg.message}`;
                        messageContainer.appendChild(messageDiv);
                    });
                } else {
                    messageContainer.innerHTML = '<p>No messages found for this user.</p>';
                }
            } catch (error) {
                console.error("Error parsing JSON:", error);
                messageContainer.innerHTML = `<p>Error fetching messages. Invalid response format. Response text: ${text}</p>`;
            }
        })
        .catch(error => {
            console.error("Error fetching messages:", error);
            messageContainer.innerHTML = `<p>Error fetching messages. ${error}</p>`;
        });
}

    // Handle reply form submission
    replyForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const deviceId = replyDeviceId.value;
        const message = replyMessage.value;

        fetch('reply_message.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ device_id: deviceId, message })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    replyMessage.value = '';
                    fetchMessages(deviceId); // Refresh messages
                } else {
                    alert('Failed to send reply.');
                }
            });
    });

    // Initial fetch of conversations
    fetchConversations();
});
