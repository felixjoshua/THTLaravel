<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #1d1d2c;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }
        .profile-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .profile-card h1 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }
        .profile-info {
            text-align: left;
            margin-bottom: 20px;
        }
        .profile-info p {
            margin: 10px 0;
            font-size: 1em;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f39c12;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .btn:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/blog">Blog</a>
        <a href="/profile">Profile</a>
        <a href="/signin">Sign In</a>
    </nav>
    <div class="profile-container">
        <div class="profile-card">
            <h1>Welcome</h1>
            <div class="profile-info">
                <p><strong>SELAMAT DATANG.</strong></p>
            </div>
            <a href="/blog" class="btn">Go to Blog</a>
        </div>
    </div>
</body>
</html>
