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
  <div class="imgcontainer">
    <h1>GetMovie</h1>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:black">
  <li id="premium" class="nav-item"> <button type="button" id="home" class="cancelbtn" href='home'>Cancel</button>
    <a href="#">Forgot password?</a></span>
  </div>
</form>
    </head>
