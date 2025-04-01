<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heloings</title>
</head>
<body>
    @auth
        <p>Sveiks, {{ Auth::user()->first_name}}</p>

        <form method="">
            
            <button type="submit">Logout</button>
        </form>
    @endauth

    @guest
        <p>Sveiks, viesi!</p>
    @endguest
</body>
</html>