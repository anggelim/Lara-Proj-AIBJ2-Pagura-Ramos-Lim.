const form = document.getElementById('contactForm');
const successBox = document.getElementById('formSuccess');

if (form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');

        const nameError = document.getElementById('nameError');
        const emailError = document.getElementById('emailError');
        const subjectError = document.getElementById('subjectError');
        const messageError = document.getElementById('messageError');

        nameError.textContent = '';
        emailError.textContent = '';
        subjectError.textContent = '';
        messageError.textContent = '';
        if (successBox) successBox.hidden = true;

        let valid = true;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!name.value.trim()) {
            nameError.textContent = 'Please enter your name.';
            valid = false;
        }

        if (!email.value.trim()) {
            emailError.textContent = 'Please enter your email address.';
            valid = false;
        } else if (!emailPattern.test(email.value.trim())) {
            emailError.textContent = 'Please enter a valid email address.';
            valid = false;
        }

        if (!subject.value.trim()) {
            subjectError.textContent = 'Please enter a subject.';
            valid = false;
        }

        if (!message.value.trim()) {
            messageError.textContent = 'Please enter your message.';
            valid = false;
        }

        if (valid && successBox) {
            successBox.hidden = false;
            form.reset();
        }
    });
}