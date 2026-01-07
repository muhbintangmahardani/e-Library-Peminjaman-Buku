@extends('layouts.auth.index')

@section('content')
<div class="login-page">

  <div class="login-container">

    <!-- LEFT -->
    <div class="login-left">
      <div class="login-left-content">
        <i class="fas fa-book-reader login-icon"></i>
        <h2>e-Library</h2>
        <p>
          Sistem Peminjaman Buku<br>
        </p>
      </div>
    </div>

    <!-- RIGHT -->
    <div class="login-right">
      <div class="card login-card">

        <div class="text-center mb-4">
          <div class="login-logo">
            <i class="fas fa-book"></i>
          </div>
          <h4 class="mt-3 font-weight-bold">
            e-Library Peminjaman Buku
          </h4>
          <p class="text-muted mb-0">
            Silakan login untuk melanjutkan
          </p>
        </div>

        {{-- ERROR --}}
        @if ($errors->has('email'))
          <div class="alert alert-danger text-center">
            {{ $errors->first('email') }}
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}" id="loginForm">
          @csrf

          <!-- EMAIL -->
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input type="email" name="email"
                class="form-control"
                value="{{ old('email') }}"
                required autofocus>
            </div>
          </div>

          <!-- PASSWORD -->
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-lock"></i>
                </span>
              </div>
              <input type="password" id="password" name="password"
                class="form-control" required>
              <div class="input-group-append">
                <span class="input-group-text cursor-pointer" onclick="togglePassword()">
                  <i class="fas fa-eye" id="eyeIcon"></i>
                </span>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block" id="loginBtn">
            <span id="btnText">Login</span>
            <span id="btnLoading" class="d-none">
              <i class="fas fa-spinner fa-spin"></i> Memproses...
            </span>
          </button>
        </form>

        <div class="text-center mt-4 text-small text-muted">
          © {{ date('Y') }} e-Library Peminjaman Buku
        </div>

      </div>
    </div>

  </div>
</div>

<!-- CSS KHUSUS LOGIN -->
<style>
.login-page {
  min-height: 100vh;
  background: #f4f6fb;
}

.login-container {
  display: flex;
  min-height: 100vh;
}

/* LEFT */
.login-left {
  flex: 1;
  background: linear-gradient(135deg, #4e73df, #6f9cff);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
}

.login-left-content {
  text-align: center;
}

.login-icon {
  font-size: 90px;
  margin-bottom: 20px;
}

/* RIGHT */
.login-right {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
}

/* CARD */
.login-card {
  width: 100%;
  max-width: 400px;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 15px 30px rgba(0,0,0,.15);
  border: none;
}

.login-logo {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #4e73df, #6f9cff);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
  color: #fff;
  font-size: 26px;
}

.cursor-pointer {
  cursor: pointer;
}

/* MOBILE */
@media(max-width: 768px) {
  .login-left {
    display: none;
  }
}
</style>

<!-- SCRIPT -->
<script>
function togglePassword() {
  const p = document.getElementById('password');
  const e = document.getElementById('eyeIcon');
  if (p.type === 'password') {
    p.type = 'text';
    e.classList.replace('fa-eye', 'fa-eye-slash');
  } else {
    p.type = 'password';
    e.classList.replace('fa-eye-slash', 'fa-eye');
  }
}

document.getElementById('loginForm').addEventListener('submit', function () {
  document.getElementById('loginBtn').disabled = true;
  document.getElementById('btnText').classList.add('d-none');
  document.getElementById('btnLoading').classList.remove('d-none');
});
</script>
@endsection
