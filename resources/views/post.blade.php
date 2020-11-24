<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->name }}</title>
</head>
<body>
    <h1>{{ $post->name }}</h1>
    <p>{{ $post->description }}</p>
    <div>{{ $post->body }}</div>
</body>
</html>