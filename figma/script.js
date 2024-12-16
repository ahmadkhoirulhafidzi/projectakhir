document.querySelector('.sign-in').addEventListener('click', function() {
    const email = document.querySelector('input[type="email"]').value;
    const password = document.querySelector('input[type="password"]').value;
  
    if (email === '' || password === '') {
      alert('Please fill in all fields');
    } else {
      // Simulate a login process
      alert('Logging in with ' + email);
      // Here you can add your login logic
    }
  });
  
  document.querySelector('.forgot-password').addEventListener('click', function() {
    alert('Password recovery link has been sent to your email.');
  });