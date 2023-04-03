
<html>
<head>Register.</head>
<body>
<h3>Register to Wizi's Calendar</h3>
<form method="POST" action="{{ route('login') }}">

    @csrf
    <div>
        <label for="email">Username</label>
        <input id="email" type="text" name="username" value="{{ old('username') }}" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
</body>

</html>
