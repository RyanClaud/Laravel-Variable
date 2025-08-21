<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>

    <!-- Escaped output (safe) -->
    <!-- <p>{{ '<script>alert("XSS")</script>' }}</p>

     Raw output (use with caution!) -->
  <!-- <p>{!! '<strong>Text</strong>' !!}</p> -->
</body>
</html>