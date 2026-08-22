<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Nhập email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Mật khẩu">
    <label for="remember">
        <input type="checkbox" name="remember">Remember
    </label>
    <button type="submit">Login Admin</button>
</form>