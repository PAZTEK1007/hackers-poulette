function isValidEmail(email) {
    const emailRegex = \b[\w\.-]+@[\w\.-]+\.\w{2,4}\b;
    return emailRegex.test(email);
}

email = document.getElementById('mail');

if (isValidEmail(email)) {
    console.log('Email is valid!');
} else {
    email.style.border = '1px solid red';
    console.log('Email is NOT valid!');
}
