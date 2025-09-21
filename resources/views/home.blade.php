<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <div style="border: 2px solid black;">
    <h1 >Register</h1>
    <form action="/register" method="POST">
      <!-- //avoid cross site forgery -->
      @csrf

      <input type="text" placeholder="name" name="name">
      <input type="email" placeholder="email" name="email">
      <input type="password" placeholder="password" name="password">
      <button>Register</button>
    </form>
  </div>
</body>
</html>