<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
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
            padding: 20px 0;
        }
        .blog-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .blog-header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .blog-header p {
            font-size: 1em;
            color: #666;
        }
        .blog-content img {
            width: 100%;
            margin: 20px 0;
            border-radius: 10px;
        }
        .blog-content p {
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .related-posts {
            margin-top: 40px;
        }
        .related-posts h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .related-posts .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .related-post-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .related-post-card h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .related-post-card a {
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
        <div class="blog-header">
            <h1>{{ $blog->title }}</h1>
            <p>By Felix Joshua Paulus | 20 December 2024</p>
            </div>
        <div class="blog-content">
            <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
            <p>{{ $blog->content }}</p>
        </div>
        <div class="related-posts">
            <h2>What to read next</h2>
            <div class="posts-grid">
                @foreach($related_posts as $related)
                    <div class="related-post-card">
                        <h3>{{ $related->title }}</h3>
                        <a href="/blog/{{ $related->id }}">Read More ></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
