const form = document.querySelector("form#appointmentForm");

form.onsubmit = event => {
    event.preventDefault();

    let clientInput = form.querySelector("#ClientName");
    let regNoInput = form.querySelector("#RegNo");
    let PhoneInput = form.querySelector("#Phone");
    let emailInput = form.querySelector("#email");
    let clientgenderInput = form.querySelector("#clientgender");
    let clientstatusInput = form.querySelector("#clientstatus");
    let serviceInput = form.querySelector("#service");
    let timeInput = form.querySelector("#time");

    let clientName = clientInput.value;
    let regNo = regNoInput.value;
    let Phone = PhoneInput.value;
    let email = emailInput.value;
    let clientgender = clientgenderInput.value;
    let clientstatus = clientstatusInput.value;
    let service = serviceInput.value;
    let time = timeInput.value;

    let message = "";

    message = message + `<div><h2 style="color: blue; text-align: center;">Book Appointment Form</h2></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Client Name:</th><td>${clientName}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Reg No:</th><td>${regNo}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Phone:</th><td>${Phone}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Email:</th><td>${email}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Gender:</th><td>${clientgender}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Status:</th><td>${clientstatus}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Services:</th><td>${service}</td></tr></div>`;
    message = message + `<div><tr> <th style="color: rgb(0, 58, 248);">Time:</th><td>${time}</td></tr></div>`;

    let title = `${clientName} just made an appointment`

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