<h2 class="text-center">Login Admin</h2>
<div class="login-admin">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Nhập email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Mật khẩu">
        <label for="remember">
            <input type="checkbox" style="display:inline-block;" name="remember">Remember
        </label>
        <button type="submit">Login Admin</button>
    </form>
</div>
<style>
    .login-admin {
        min-width: 100vw;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-admin form input,
    .login-admin form button {
        display: block;
        margin-bottom: 8px;
    }

    .login-admin form label {
        display: inline-block;
    }

    h2.text-center {
        text-align: center;
    }
</style>