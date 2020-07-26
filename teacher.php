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
     
     <link rel="stylesheet" href="css/style.css"/>
     <link rel="stylesheet" href="css/c5.css"/>
  <title>Teacher Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/teacher.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
 </head>
 <body style="background: url(img/teacherback.jpg);background-size: 100%">
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
      $classes = $_SESSION['classes'];
      $teacher_id = $_SESSION['teacher_id'];
      echo '<h2>Welcome , '.$name.'.</h2>';
      echo '<div class="wrapper">';
      // FOR EACH CLASS , GET IT'S INFO AND PREPARE A LINK
      $n = new Node;
       
      if(!$classes) {
        echo '<h3 class="no-classes">Ready to  take your first class ?</h3>';
      } else { 
        echo '<h3 class="no-classes">Click on a class to take attendance.</h3>';
        foreach($classes as $class_id) {
          $node = $n->retrieveObjecti($class_id,$teacher_id) or die("No such record");
          $code = $node->getCode();
          $section = $node->getSection();
          $year = $node->getYear();
          $numClasses = $node->getDays();
          $link = 'take.php?cN='.$class_id;
          echo '<div class="class"> 
            <button class="btn btn-danger delete-class-warning" data-toggle="modal" data-target=".delete-warning">&times;</button>
            <a class="no-decoration" href="'.$link.'">
            <div><strong>Code</strong> : <span class="code">'.$code.'</span></div> 
            <div><strong>Year</strong> : <span class="section">'.$section.'</span></div> 
            <div><strong>Year</strong> : <span class="year">'.$year.'</span></div> 
            <div><strong>Classes</strong> : '.$numClasses.'</div> 
          </div></a>';
        }
      }
      echo '<div class="class" data-toggle="modal" data-target=".bs-example-modal-lg" id="addClass">
          <span class="glyphicon glyphicon-plus"></span>
        </div>
      </div>';   
    ?>
    
  </div>
    
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addClass" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content" style="background: url(img/teacherback.jpg);background-size: 250%;background-position: 1050px 975px;">
          <h2 class="text-center"> Add Class </h2>
            <div id="add_class_form">
              <select class="sel" name="year">
              <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
              </select>
              <input class="ent" name="code" placeholder="Subject Code , Eg : CS-501">
              <select class="sel" name="section">
              <option value="-1">Choose year</option>
              <?php foreach(range(1,4) as $r) echo '<option>'.$r.'</option>'; ?>
              </select>
              <select class="sel" name="semester">
              <option value="-1">Choose Semester</option>
              <?php foreach(range(1,8) as $r) echo '<option>'.$r.'</option>'; ?>
              </select>
              <input class="ent" name="start" placeholder="Starting Roll Number (Eg. 180010770275/CS/17)">
              <input class="ent" name="end" placeholder="Ending Roll Number (Eg. 180010770275/CS/17)">
              <span class="help-block" style="color:red;margin:-60px 0 0 20px;position: absolute;">N.../DD/BB where N : Serial or roll no., D : Department , B : Batch(Course Starting year)</span><br>
              <button class="sav" id="add">Add Class</button>
              <button class="cnl" id="cancel">&times;</button>
            </div>
        </div>
    </div>
  </div>
    
    
  <div class="modal fade delete-warning" tabindex="-1" role="dialog" aria-labelledby="delete-warning" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <h2 class="text-center"> Do you really want to delete <br> <span class="warning-class"></span> ?</h2>
        <hr>
        <div class="text-center">
          <p>
            Are you sure you want to delete <span class="warning-class"></span> ? <br>
            You can't undo this action.
          </p>
          <button class="btn btn-danger delete-class-code">Delete</button> <button class="btn btn-primary" onclick="$('.delete-warning').modal('hide');">Cancel</button>
        </div>
      </div>
    </div>
  </div>
 </body>
</html>
