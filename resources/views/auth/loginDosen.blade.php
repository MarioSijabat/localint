<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dosen</title>
</head>
<body>
    <h1>Login Dosen</h1>
    <form method="POST" action="{{ route('process.login') }}">
      @csrf
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>
      <br>
      <button type="submit">Login</button>
  </form>
  
</body>
</html>
