<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST">
        @csrf

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <label>
            Email<br>
            <input name="email" type="email" value="{{ old('email') }}" required />
        </label><br><br>

        <label>
            Password<br>
            <input name="password" type="password" required />
        </label><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>