import axios from "axios";
import "./bootstrap";

const message_el = document.getElementById("message");
const user_name = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener("submit", (e) => {
    e.preventDefault();

    let has_errors = false;

    if (user_name.value == "") {
        alert("enter user name");
        has_errors = true;
    }
    if (message_input.value == "") {
        alert("enter message");
        has_errors = true;
    }
    if (has_errors) {
        return;
    }

    const options = {
        method: "post",
        url: "/send-message",
        data: {
            username: user_name.value,
            message: message_input.value,
        },
    };
    axios(options);
    message_input.value = "";
});

window.Echo.channel("my-channel").listen(".my-event", (data) => {
    message_el.innerHTML +=
        '<div class="msg"><strong>' +
        data.username +
        "</strong>" +
        " : " +
        data.message +
        "</div>";
    // alert(data.username);
    // console.log(data);
});
