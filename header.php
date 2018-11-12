<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img { width: 100%; height: 100%;	}
  </style>
</head>
<body>
<header>
<nav>

</header>
</nav>
        <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="includes/topic-create.inc.php">Create Topic</a></li>
                </ul>
                <div class="nav-login">
                <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '<form class="form-inline" action="includes/logout.inc.php" method="POST">
                        <button typ="submit" name="submit" >Logout</button>
                    </form>';
                        
                    } else {
                        echo '                    <form class="form-inline" action="includes/login.inc.php" method="POST">
                        <input class="form-control my-2 w-50" type="text" name="uid" placeholder="Username/e-mail">
                        <input class="form-control my-2 w-50" type="password" name="pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>';
                    }

                ?>
                  
                </div>
        </div>
</nav>
</header>