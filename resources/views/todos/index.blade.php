<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title><x-navigation></x-navigation></title>
</head>
<body>

<h1>Veicamie uzdevumi</h1>

<ul>
  @foreach ($todos as $todo)
    <li>{{ $todo->content }}</li>
  @endforeach
</ul>
<li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
</body>
</html>