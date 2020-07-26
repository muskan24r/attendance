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
     <link rel="stylesheet" href="css/profile.css">
     <link rel="stylesheet" href="css/class.css">
  <title>Edit Class</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/class.js"></script>
 </head>
 <body style="background:url('img/edit.jpeg');background-size:100%">
     
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
      <h2 style="margin-top: 100px"> You can edit details of your classes here. </h2>
    <?php
      $classes = $_SESSION['classes'];
      $teacher_id = $_SESSION['teacher_id'];
      if(!$classes) echo '<h4> You haven\'t taken any classes yet. </h4>';
      else {
        foreach($classes as $class_id) {
          $n = new Node;
          $node = $n->retrieveObjecti($class_id,$teacher_id) or die("No such record");
          $code = $node->getCode();
          $section = $node->getSection();
          $year = $node->getYear();
          $semester = $node->getSemester();
          
          echo '<ul class="nav nav-tabs">
                  <li class="active"><a href="#" class="activa">'.$code . ' ( '.$section.' ) , '.$year.'</a></li>
                </ul>';
          echo '<div class="details" id="_'.$class_id.'_">';
          echo '<span>Code </span>: <input class="form-control" name="code" value="'.$code.'" placeholder="Enter code , eg CS-501">';
          echo '<span>Year </span>: <input class="form-control" name="year" value="'.$year.'" placeholder="Enter Year">';
          echo '<span>Year </span>: <input class="form-control" name="section" value="'.$section.'" placeholder="Enter Year">';
          echo '<span>Semester </span>: <input class="form-control" name="semester" value="'.$semester.'" placeholder="Enter Semester">';
          echo '<button class="btn btn-success update">Update</button>';
          echo '</div>';
        }
      }
    ?>
  </div>
 </body>
</html>
