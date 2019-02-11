<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>Linuxserv.ge თქვენი სანდო ჰოსტინგი</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="main.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="css/stylesheet.css">


    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>

<body>
    <header class="header">
            <div class="container">
                <nav class="navbar">
      						<a class="col-1 logo-text" href="#"> <img class="" src="images/logo2.png" alt="linuxserv-logo"></a>
      						<li class=""><a href="index.php">მთავარი</a></li>
      						<li class=""><a href="#">ჩვენს შესახებ</a></li>
      						<li class=""><a href="#">ფასები</a></li>
      						<li class=""><a href="rules.html">წესები</a></li>
      						<li class=""><a href="contact.html">კონტაქტი</a></li>
      						<li class=""><a href="#">პანელი</a></li>
                </nav>
            </div>

    </header>

<section class="banner-video">
    <div class="banner-gif">
        <video class="" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			<source src="images/banner.mp4" type="video/mp4">
		</video>
        <a href="#"> <h2>რეგისტრაცია</h2> </a>
        <a href="#"> <span>შეკვეთა</span> </a>
    </div>
</section>



<div class="login-fields text-center">
  <?php
    if (isset($_SESSION['userId'])) {
      echo  '</form>
      <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">logout</button>
    </form>';
    }
    else {
      echo  '<form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="username/Email...">
        <input type="password" name="pwd" placeholder="password...">
        <button type="submit" name="login-submit">login</button>
        <a href="signup.php">sign up</a>';
  }
   ?>


</div>














<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/588899b946ba805858264a09/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
