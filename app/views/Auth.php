<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Role-Based Auth UI</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f4f6f9;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .auth-card {
      width: 100%;
      max-width: 420px;
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .toggle-btns button {
      width: 50%;
    }

    .hidden {
      display: none;
    }

    .role-select {
      margin-top: 10px;
    }
  </style>
</head>
<body>

<div class="auth-card">

  <div class="btn-group toggle-btns w-100 mb-3">
    <button class="btn btn-primary" id="showLogin">Login</button>
    <button class="btn btn-outline-primary" id="showSignup">Sign Up</button>
  </div>

  <!-- LOGIN FORM -->
  <form id="loginForm">
    <h4 class="text-center mb-3">Login</h4>

    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="Enter email">
    </div>

    <div class="mb-3">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Enter password">
    </div>

    <div class="mb-3 role-select">
      <label>Login as</label>
      <select class="form-select">
        <option value="admin">Admin</option>
        <option value="teacher">Teacher</option>
        <option value="parent">Parent</option>
      </select>
    </div>

    <button class="btn btn-primary w-100">Login</button>
  </form>

  <!-- SIGNUP FORM -->
  <form id="signupForm" class="hidden">
    <h4 class="text-center mb-3">Sign Up</h4>

    <div class="mb-3">
      <label>Full Name</label>
      <input type="text" class="form-control" placeholder="Enter full name">
    </div>

    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="Enter email">
    </div>

    <div class="mb-3">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Create password">
    </div>

    <div class="mb-3 role-select">
      <label>Register as</label>
      <select class="form-select">
        <option value="teacher">Teacher</option>
        <option value="parent">Parent</option>
      </select>
    </div>

    <button class="btn btn-success w-100">Create Account</button>
  </form>

</div>

<script>
  const loginBtn = document.getElementById('showLogin');
  const signupBtn = document.getElementById('showSignup');
  const loginForm = document.getElementById('loginForm');
  const signupForm = document.getElementById('signupForm');

  loginBtn.addEventListener('click', () => {
    loginForm.classList.remove('hidden');
    signupForm.classList.add('hidden');

    loginBtn.classList.add('btn-primary');
    loginBtn.classList.remove('btn-outline-primary');
    signupBtn.classList.remove('btn-primary');
    signupBtn.classList.add('btn-outline-primary');
  });

  signupBtn.addEventListener('click', () => {
    signupForm.classList.remove('hidden');
    loginForm.classList.add('hidden');

    signupBtn.classList.add('btn-primary');
    signupBtn.classList.remove('btn-outline-primary');
    loginBtn.classList.remove('btn-primary');
    loginBtn.classList.add('btn-outline-primary');
  });
</script>

</body>
</html>
