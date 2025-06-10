document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('toggle');
  const body = document.body;

  // Load saved mode from localStorage
  const savedMode = localStorage.getItem('darkMode');
  if (savedMode === 'enabled') {
    body.classList.add('dark-theme');
    toggle.checked = true;
  }

  toggle.addEventListener('change', () => {
    body.classList.toggle('dark-theme');

    // Save the current mode in localStorage
    if (body.classList.contains('dark-theme')) {
      localStorage.setItem('darkMode', 'enabled');
    } else {
      localStorage.setItem('darkMode', 'disabled');
    }
  });

  // Registration popup show/hide
  const openRegistrationBtn = document.getElementById('openRegistration');
  const registrationPopup = document.getElementById('registrationPopup');
  const closeRegistrationBtn = document.getElementById('closeRegistration');

  openRegistrationBtn.addEventListener('click', () => {
    registrationPopup.style.display = 'block';
  });

  closeRegistrationBtn.addEventListener('click', () => {
    registrationPopup.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === registrationPopup) {
      registrationPopup.style.display = 'none';
    }
  });

  // Registration form validation and submission
  const registrationForm = document.getElementById('registrationForm');
  const formMessage = document.getElementById('formMessage');

  registrationForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const username = registrationForm.username.value.trim();
    const email = registrationForm.email.value.trim();
    const password = registrationForm.password.value;
    const confirmPassword = registrationForm.confirmPassword.value;

    // Basic validation
    if (!username || !email || !password || !confirmPassword) {
      formMessage.textContent = 'Please fill in all fields.';
      formMessage.style.color = 'red';
      return;
    }

    if (password !== confirmPassword) {
      formMessage.textContent = 'Passwords do not match.';
      formMessage.style.color = 'red';
      return;
    }

    // If all validations pass
    formMessage.textContent = 'Registration successful!';
    formMessage.style.color = 'green';

    // Clear form fields
    registrationForm.reset();
  });
});