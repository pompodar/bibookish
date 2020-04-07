<?php
   include("./config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
     $myusername = mysqli_real_escape_string($db,$_POST['userLogin']);
     $mypassword = mysqli_real_escape_string($db,$_POST['passwordLogin']); 
      
 $just = 'just';
      


      $sql = "SELECT id FROM users WHERE name = '$myusername' and password = '$mypassword' and active = 1";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
		 $_SESSION['myusername']="myusername";
         $_SESSION['login_user'] = $myusername;
         
         header("location: /../../index.html");
      }else {
	echo $count;
         $error = "Your Login Name or Password is invalid";
      }
   }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156548239-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156548239-1');
</script>
    <meta charset="UTF-8">
    <title>Login</title>
    	<link rel="stylesheet" href="../css/login_style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link
		href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Bad+Script|Caveat:700|EB+Garamond:500i|Gabriela|Kurale|Marck+Script|Neucha|Pattaya|Ruslan+Display&amp;subset=cyrillic"
		rel="stylesheet">
</head>

<body>
    <main>
        <div class="login-holder">
            <div class="container">
                <div class="login">
                    <div class="form-holder">
                        <div class="dish"></div>
                        <div class="header">
                            <a class="header-item activated" href="#login" id="login-caller">Login</a>
                            <a class="header-item" href="#register" id="register-caller">Sign up</a>
                        </div>
                        <form action="login.php" method="post" class="form activated" id="login">
                            <div class="input-row">
                                <input id="userLogin" class="input" type="text" name="userLogin" required>
                                <label class="label">Username</label>
                                <span class="highlite"></span>
                                <span class="bar"></span>
                            </div>
                            <div class="input-row">
                                <input id="passwordLogin" class="input" type="password" name="passwordLogin" required>
                                <label class="label">Password</label>
                                <span class="highlite"></span>
                                <span class="bar"></span>
                            </div>
                            <div>
                                <button id="logout">Log out</button>
                            </div>
                            <div class="sub-button">
                                <input id="submitLogin" class="button" type="submit" value="Submit">
                            </div>
                        </form>
                        <div class="form" id="register">
                            <div class="input-row">
                                <input id="user" class="input" type="text" required>
                                <label class="label">Username</label>
                                <span class="highlite"></span>
                                <span class="bar"></span>
                            </div>
                                                            <div id="uname_response" ></div>

                            <div class="input-row">
                                <input id="password" class="input" type="password" required>
                                <label class="label">Password</label>
                                <span class="highlite"></span>
                                <span class="bar"></span>
                            </div>
                            <div class="input-row">
                                <input id="password1" class="input" type="password" required>
                                <label class="label">Password confirmation </label>
                                <span class="highlite"></span>
                                <span class="bar"></span>
                            </div>
                                                                                        <div id="wrongPassword" ></div>

                            <div class="sub-button">
                                <input id="submit" class="button" type="submit" value="Submit">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
       <?php 
        $name = "Hello World"; 
    ?> 
      
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/login.js"></script>
<script>
    function h () {
var name = "<?php echo ($myusername); ?>";
    }
    window.addEventListener("load", h)
</script>
</body>

</html>