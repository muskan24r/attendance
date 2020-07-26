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
  
  <title>Statistics</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/statistics.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
 </head>
 <body style="background:url(img/bg.jfif);background-size: 100%">
     
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
    <div class="wrapper">
      <?php
        $classes = $_SESSION['classes'];
        $teacher_id = $_SESSION['teacher_id'];
        $n = new Node;
        if($classes != 0) {
          $data = array();
          foreach($classes as $c) {
            $node = $n->retrieveObjecti($c,$teacher_id) or die("No such record");

            $key = $node->getCode().' ( '.$node->getSection().' ) ,'.$node->getYear();
          
            $total_days = $node->getDays();
           
            $data[$key] = array("total"=>$total_days,"average"=>0,"detained"=>0);
            if($total_days)  {
              $detained = array();
              $sum = 0;
              $count = 0;
              foreach($node->getRecords() as $roll => $rec) {
                $sum += $rec['present'];
                $count++;
                if($rec['present']/$total_days < 0.6)  $detained[$roll] = (100*($rec['present']/$total_days));
              }
              $data[$key]['average'] = ($sum/($count));
              $data[$key]['detained'] = $detained;
            }
          }
          echo '<script> var data = '.json_encode($data).'; </script>';
          echo '<ul class="nav nav-tabs">
            <li class="active"><a href="#graph" style="text-transform:uppercase;font-weight:bold">Average Attendance</a></li>
            <li><a href="#detained" style="text-transform:uppercase;font-weight:bold">Short Attendance</a></li>
          </ul>
          <div class="content">
            <div id="graph">
            </div>
            <div id="detained" style="width:120%">';
          foreach($data as $class => $d) {
            echo '<div class="classes"><button class="btclas">'.$class.'</button> <span class="badge" style="position:relative;right:-200px;font-size:20px;border-radius:50%;">'.($d['detained']==0?0:count($d['detained'])).'</span> <div class="list">';
            if($d['detained'] !=0)
              foreach($d['detained'] as $roll => $percent) {
                echo '<p>'.$roll.' ( '.$percent.' % )</p>';
              }
            echo '</div></div>';
          }
          echo '
            </div>
          </div>
          ';
        }
        else {
          echo "<h3> You have no classes added yet </h3>";
        }
      ?>
    </div>
  </div>
 </body>
</html>
