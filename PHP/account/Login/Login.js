const email = document.getElementsByClassName('email');
const password = document.getElementsByClassName('password');

var validEmail = document.getElementsByClassName('validEmail');
var validPassword = document.getElementsByClassName('validPassword');

const wrapper = document.getElementsByClassName('wrapper');
const icon_close = document.getElementsByClassName('icon-close');

function validate() {
    if(email.value == '') {
        validEmail.display[0].style.display = 'block';
    }
    else
    {
        validEmail.display[0].style.display = 'none';
    }

    if(password.value == '') {
        validPassword.display[0].style.display = 'block';
    }
    else
    {
        validPassword.display[0].style.display = 'none';
    }

    //Print the message
    if(email.value != '' || password.value != '') {
        alert('Login Successful');
        document.getElementById('email').value = '';
        document.getElementById('password').value = '';
    }

}

icon_close.addEventListener('click', function() {
    wrapper.classList.remove('active');
});
