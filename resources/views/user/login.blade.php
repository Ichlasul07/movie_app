<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="{{asset('')}}CSS/login.css" rel="stylesheet" />
  <form action="/login" method="post">
    @csrf
  <div class="imgcontainer">
    <h1>GetMovie</h1>
  </div>

  <div class="container">
    <label for="uname"><b>email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:black">
  <li id="premium" class="nav-item"> <button type="submit" id="home" class="cancelbtn" href='home'>Cancel</button>
    <a href="#">Forgot password?</a></span>
  </div>
</form>
    </head>
