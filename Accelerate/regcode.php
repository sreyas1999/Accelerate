<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Registration</title>
</head>

<body>
  <main class="container">
    <header class="heading">
      <div class="heading_text">
        <h2 class="main_text">Accelerate</h2>
        <p class="subtext">It's now time to move fast</p>
      </div>
      <div class="search_area">
        <div class="input-group mb-3">
          <button class="search">Search</button>
          <input type="text" class="form-control" placeholder="&nbsp    &nbsp Type here..." aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
        <div id="widget" class="elfsight-app-9cbca6b2-0337-4ae8-b49b-5b63af56f2fa"></div>
      </div>
    </header>
    <section class="main_body">
      <div class="navbar">
        <ul class="nav_items">
          <a href="index.html">
            <li class="nav_menu">Home</li>
          </a>
          <a href="#">
            <li class="nav_menu">Download</li>
          </a>
          <a href="#">
            <li class="nav_menu">Blog</li>
          </a>
          <a href="#">
            <li class="nav_menu">Layout</li>
          </a>
          <a href="#">
            <li class="nav_menu">Sample Page</li>
          </a>
          <a href="#">
            <li class="nav_menu">View Pro</li>
          </a>
          <a href="#">
            <li class="nav_menu">Register</li>
          </a>
          <a href="#">
            <li class="nav_menu">Contact</li>
          </a>
        </ul>
      </div>
    </section>


    <form class="form_container" action="formvalidation.php" method="POST">
      <h2>REGISTER</h2>
      <input class="username" name="username" type="text" placeholder="Username">
      <?php if (isset($name_error)) {
      				echo "<p class = \"error\">$name_error</p>";
      			}?>
      <input class="username" name="email" type="text" placeholder="Email ID" required>

      <input class="username" name="password" type="password" placeholder="Password">
      <?php
            if (isset($password_error))
            {
              echo "<p class = \"error\">$password_error</p>";
            }?>
      <input class="username" name="confirm_password" type="password" placeholder="Confirm Password">
      <?php
      	if (isset($confirm_password_error))
      		{
      			echo "<p class = \"error\">$confirm_password_error</p>";
      }?>
      <select name='country' class="username_selection" required>
        <option value="select">Select Country</option>
        <option value="USA">United States of America</option>
        <option value="Canada">Canada</option>
      </select>

      <div class="user_input">
        <br>
        <div class="radio_ip">
          <input type="radio" id="terms" name="terms_and_conditions">
            <label for="terms">Agreed Terms & Conditions</label>
        </div>
        <br>
        <br>
        <button class="submit" type="submit" name="submit_btn">Sign Up</button>
        <br>
        <br>
        <br>
        <p class="login_text"> Already joined with us? <a id="log">Login</a></p>

      </div>
    </form>

  </main>








  <footer>
    <div class="footer_content">
      <div class="footer_heading">Theme</div>

      <p class="footer_text">Archalbot-2 | Pokhara | Nepal</p>

      <p class="footer_text">Phone:(977)985238979</p>

      <p class="footer_text">Fax:(977)123-4567</p>

      <p class="footer_text">Email:themegrill@gmail.com</p>

      <p class="footer_text">Website:www.themegrill.com</p>

    </div>
  </footer>


  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
