document.addEventListener('DOMContentLoaded', function () {
    let searchIcon = document.querySelector('.search-icon');
    let searchBox = document.querySelector('.search-box');

    searchIcon.addEventListener('click', function () {
        searchBox.classList.toggle('active');
    });

    // Function to send user input to the chatbot
    function sendButton() {
        var userInput = document.getElementById("textInput").value;
        document.getElementById("textInput").value = "";
        output(userInput);
        sendToBackend(userInput); // Send user input to Python backend
    }

    // Function to display user input and bot response
    function output(userInput) {
        const chatBox = document.getElementById("chatbox");
        const userDiv = document.createElement("div");
        userDiv.className = "user";
        userDiv.innerHTML = `<span>${userInput}</span>`;
        chatBox.appendChild(userDiv);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    // Function to send user input to Python backend and receive response
    function sendToBackend(userInput) {
        $.ajax({
            type: 'POST',
            url: 'http://chatbot.py', // Replace with actual path to your Python backend
            data: { userInput: userInput },
            success: function (response) {
                output(response); // Display bot response
            },
            error: function () {
                output("Error occurred while sending data to backend."); // Display error message
            }
        });
    }

    // Functionality for chat button toggle
    document.getElementById("chat-button").addEventListener("click", function () {
        this.classList.toggle("active");
        document.querySelector(".content").classList.toggle("active");
    });
});
