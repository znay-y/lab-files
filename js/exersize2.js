let firstName = document.getElementById('FnameIn');
let lastName = document.getElementById('LnameIn');
let Useremail = document.getElementById('usermailIn');
let Password = document.getElementById('passwordIn');
let ConfirmPassword = document.getElementById('confirm_passwordIn');

let form = document.getElementById('registrationForm');
form.addEventListener('submit', passwordMatch);


function passwordMatch(e) {

    if (Password.value !== ConfirmPassword.value) {
        e.preventDefault();
        window.alert("Passwords do not match!");
    }
}