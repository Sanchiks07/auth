<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrēties</title>
</head>
<body>
    <h1>Reģistrēties</h1>

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
            First Name<br>
            <input name="first_name" value="{{ old('first_name') }}" required/>
        </label><br><br>

        <label>
            Last Name<br>
            <input name="last_name" value="{{ old('last_name') }}" required/>
        </label><br><br>

        <label>
            Email<br>
            <input name="email" type="email" value="{{ old('email') }}" required/>
        </label><br><br>

        <label>
            Password<br>
            <input name="password" type="password" required/>
        </label><br><br>

        <label>
            Confirm Password<br>
            <input name="password_confirmation" type="password" required/>
        </label><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>