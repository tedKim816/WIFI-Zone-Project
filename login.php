<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/mystyle.css">
  <title>CAB230</title>
</head>


<body>
  <div class="container">
    <div class="topnav">
      <a href="../index.php" id="logo">
            <img src="../img/logogo.png" alt="" height="75px" style="margin: 0%">
          </a>
      <button id="nav_btn" class="btns" onclick="location.href='../signup.php'">Sign up</button>
      <button id="nav_btn" class="btns" onclick="location.href='../login.php'">Sign in</button>
    </div>
  </div>

  <div class="container">
    <div class="content">
      <h2>Login</h2>
    </div>
    <hr class="liner">

    <div class="container">
    <form class="login_container">

      <label>
        <b>Username</b>
      </label>
      <input type="text" placeholder="Enter Username" required>

      <label>
        <b>Password</b>
      </label>
      <input type="password" placeholder="Enter Password" required>
      <div class="btns">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="logbtn">Login</button>
      </div>
      <span class="psw">Forgot
        <a href="#">password?</a>
      </span>
      <br>
    </form>
  </div>
  </div>

  <div class="container">
    <div class="icon-bar">
      <p>Follow us: </p>
      <a href="#">
        <img src="./img/instagram.png" alt="">
      </a>
      <a href="#">
        <img src="/img/facebook.png" alt="">
      </a>
      <a href="#">
        <img src="/img/twitter.png" alt="">
      </a>
    </div>
    <div class="footer">
      <p>Copyright &copy;</p>
    </div>
  </div>


</body>

</html>
