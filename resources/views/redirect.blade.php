<!-- resources/views/redirect.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
    <meta http-equiv="refresh" content="0; URL={{ $url }}">
</head>
<body>
    <h1>Redirecting...</h1>
    <p>If you are not redirected, <a href="{{ $url }}">click here</a>.</p>
</body>
</html>
