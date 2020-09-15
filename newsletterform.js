const form = document.querySelector("form#newsletterForm");

form.onsubmit = event => {
    event.preventDefault();

    let emailInput = form.querySelector("#email");

    let email = emailInput.value;

    let message = "";
    message = message + `<div><h2 style="color: rgb(0, 58, 248);">Newsletter Form</h2></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Email:</th><td>${email}</td></tr></div>`;

    let title = `${email} just Subscribe for a Newsletter`

    let recievers = `newsletter@medicaidradiology.com`;

    let senders = "admin@medicaidradiology.com:medicaidradiology.com"


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

