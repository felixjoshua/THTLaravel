<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .post-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .post-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .post-card p {
            font-size: 1em;
            margin-bottom: 10px;
        }
        .post-card a {
            color: #f39c12;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/blog">Blog</a>
        <a href="/profile">Profile</a>
        <a href="/signin">Sign In</a>
    </nav>
    <div class="container">
        <div class="posts-grid">
            @foreach($blogs as $blog)
                <div class="post-card">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog->excerpt }}</p>
                    <a href="/blog/{{ $blog->id }}">Read More ></a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
