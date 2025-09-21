<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>


  {{-- this will conditional render the data when the user is logged in or not --}}

  @auth
  <p>Congrats you are logged in.</p>
  <form action="/logout" method="POST">
    @csrf
    <button>Logout</button>
  </form>
  @else
  <div style="border: 2px solid black; ">
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
    <div style="border: 2px solid black;">
      <h1 >Login</h1>
      <form action="/login" method="POST">
        @csrf
        <input type="text" placeholder="name" name="name">
        <input type="password" placeholder="password" name="password">
        <button>login</button>
      </form>
    </div>
  @endauth


</body>
</html>