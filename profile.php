<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/c4.css"/>
  <title>Profile</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/profile.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    
     <script>
      // Get the modal2
var comp = document.getElementById('prof');
    </script>
    
 </head>
 <body style="background: url(img/profile.jpg);background-size: 100%">
   </br></br></br></br>
   
   
   <ul class="ulu" style=";position: absolute" id="navm">
       <li class="ululi"><a class="ulua" href="teacher.php" data-text="Dashboard">Dashboard</a></li>
       <li class="ululi"><a class="ulua" href="profile.php" data-text="Profile">Profile</a></li>
       <li class="ululi"><a class="ulua" href="statistics.php" data-text="Statistics">Statistics</a></li>
       <li class="ululi"><a class="ulua" href="class.php" data-text="Edit">Edit</a></li>
       <li class="ululi"><a class="ulua" href="about.php" data-text="About">About</a></li>
       <li class="ululi"><a class="ulua" href="contact.php" data-text="Contact">Contact</a></li>
       <li class="ululi"><a class="ulua" href="logout.php" data-text="Logout">Logout</a></li>
	</ul>
   
   
   
   
  
  <div class="container">
    <?php
      $name = $_SESSION['name'];
      $phone = $_SESSION['phone'];
      $email = $_SESSION['email'];
      $classes = $_SESSION['classes'];
      $teacher_id = $_SESSION['teacher_id'];
      //echo '<h2>Welcome , '.$name.'.Turn on the PC to view/edit your profile.</h2><br>';
    ?>
      <h2 style="color:yellowgreen">Welcome , <?php echo $name?> ! Turn on the PC to view/edit your profile</h2>
      <div class="mod" id="prof" style="background: url(img/window.jpg);background-size: 100%">
          <h2 class="login">Profile</h2></br>
          <div class="fld"><label>name</label></br>
          <span class="glyphicon glyphicon-user"></span>
          <input class="inputt" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
          </div></br>
          <div class="fld">
              <label>phone</label></br>
          <span class="glyphicon glyphicon-phone"></span>
          <input class="inputt" name="phone" placeholder="Enter your phone" value="<?php echo $phone; ?>">
          </div></br>
          <div class="fld">
              <label>email</label></br>
          <span class=""><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
          <input class="inputt" name="email" placeholder="Enter your email"  value="<?php echo $email; ?>">
          </div>
          <button class="save update-profile">Save</button>
          
          </div>
  </div>
    <button class="comp" id="on" onclick="document.getElementById('prof').style.display='block';document.getElementById('faoff').style.display='block';document.getElementById('faon').style.display='none'"><i class="fa fa-power-off" id="faon" aria-hidden="true"></i></button>
    <button class="comp" id="off" onclick="document.getElementById('prof').style.display='none';document.getElementById('faon').style.display='block';document.getElementById('faoff').style.display='none'"><i class="fa fa-power-off" id="faoff" aria-hidden="true"></i></button>
 </body>
</html>
