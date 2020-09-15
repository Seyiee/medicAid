const form = document.querySelector("form#contactform");

form.onsubmit = event => {
    event.preventDefault();

    let NameInput = form.querySelector("#name");
    let emailInput = form.querySelector("#email");
    let messagesInput = form.querySelector("#messages");

    let Name = NameInput.value;
    let email = emailInput.value;
    let messages = messagesInput.value;

    let message = "";

    message = message + `<div><h2 style="color: blue; text-align: center;">Contact Form</h2></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Name:</th><td>${Name}</td></tr></div>`;
    message = message + `<div><tr><th style="color: rgb(0, 58, 248);">Email:</td><td>${email}</td></th></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Messages:</td><td>${messages}</td></tr></div>`;

    let title = `${Name} just sent you a message`

    let recievers = `info@medicaidradiology.com`;

    let senders = "web@devatom.com:medicaidradiology.com"


    fetch(`http://vemail.herokuapp.com/?senders=${senders}&recievers=${recievers}&title=${title}&message=${message}`)
    .then(response => {
        if (response) {
            alert("The form has been submitted");
        }
        else {
            alert("Form couldn't be submitted");
        }
    })


}