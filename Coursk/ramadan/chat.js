document.addEventListener("DOMContentLoaded", function () {
    var coll = document.getElementsByClassName("collapsible");

    for (let i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");

            var chatcontent = this.nextElementSibling;

            if (chatcontent.style.maxHeight) {
                chatcontent.style.maxHeight = null;
            } else {
                chatcontent.style.maxHeight = chatcontent.scrollHeight + "px";
            }
        });
    }

    function getTime() {
        let today = new Date();
        let hours = today.getHours();
        let minutes = today.getMinutes();

        if (hours < 10) {
            hours = "0" + hours;
        }

        if (minutes < 10) {
            minutes = "0" + minutes;
        }

        let time = hours + ":" + minutes;
        return time;
    }

    function getHardResponse(userText) {
        let botResponse = getBotResponse(userText);
        let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
        document.getElementById("chatbox").insertAdjacentHTML("beforeend", botHtml);
        document.getElementById("chat-bar-bottom").scrollIntoView({ behavior: "smooth" });
    }

    function getResponse() {
        let userText = document.getElementById("textInput").value;

        let userHtml = '<p class="userText"><span>' + userText + '</span></p>';
        document.getElementById("chatbox").insertAdjacentHTML("beforeend", userHtml);
        document.getElementById("textInput").value = "";
        document.getElementById("chat-bar-bottom").scrollIntoView({ behavior: "smooth" });

        setTimeout(() => {
            getHardResponse(userText);
        }, 1000);
    }

    function buttonSendText(sampleText) {
        let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';
        document.getElementById("chatbox").insertAdjacentHTML("beforeend", userHtml);
        document.getElementById("textInput").value = "";
        document.getElementById("chat-bar-bottom").scrollIntoView({ behavior: "smooth" });
    }

    function sendButton() {
        getResponse();
    }

    document.getElementById("textInput").addEventListener("keypress", function (e) {
        if (e.which == 13) {
            getResponse();
        }
    });
});
