const form = document.querySelector("form#requestResult");

form.onsubmit = event => {
    event.preventDefault();

    let NameInput = form.querySelector("#name");
    let emailInput = form.querySelector("#email");
    let regNoInput = form.querySelector("#regNo");
    let serviceInput = form.querySelector("#service");

    let name = NameInput.value;
    let regNo = regNoInput.value;
    let email = emailInput.value;
    let service = serviceInput.value;

    let message = "";

    message = message + `<div><h2 style="color: blue; text-align: center;">Newsletter Form</h2></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Client Name:</th><td>${name}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Reg No:</th><td>${regNo}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Email:</th><td>${email}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Services:</th><td>${service}</td></tr></div>`;

    let title = `${name} just requested for a result`

    let recievers = `info@medicaidradiology.com`;

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

