
    document.querySelector('.registration-form').addEventListener('submit', function(event) {
        let valid = true;

        document.querySelectorAll('.error').forEach(e => e.remove());

        const name = document.getElementById('name').value.trim();
        if (!name) {
            showError('name', 'Name is required.');
            valid = false;
        }

        const dob = document.getElementById('dob').value;
        if (!dob) {
            showError('dob', 'Date of Birth is required.');
            valid = false;
        }

        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!email || !emailPattern.test(email)) {
            showError('email', 'Please enter a valid email.');
            valid = false;
        }

        const phone = document.getElementById('phone').value.trim();
        if (!phone || phone.length < 10) {
            showError('phone', 'Phone number must be at least 10 digits.');
            valid = false;
        }

        const gender = document.getElementById('gender').value;
        if (!gender) {
            showError('gender', 'Please select a gender.');
            valid = false;
        }

        const resume = document.getElementById('resume').files.length;
        if (resume === 0) {
            showError('resume', 'Please upload your resume.');
            valid = false;
        }

        const terms = document.getElementById('terms').checked;
        if (!terms) {
            showError('terms', 'You must agree to the terms and conditions.');
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); 
        }
    });

    function showError(fieldId, message) {
        const field = document.getElementById(fieldId);
        const errorMessage = document.createElement('small');
        errorMessage.classList.add('error');
        errorMessage.textContent = message;
        field.parentElement.appendChild(errorMessage);
    }

