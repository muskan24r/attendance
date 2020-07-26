<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/signinmodal.css">
    <script>
      // Get the modal2
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event2) {
    if (event2.target == modal2) {
        modal2.style.display = "none";
    }
}
    </script>
 </head>
 <body style="background:url(img/student1.jfif);background-size: 100%">
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background: rgba(0,0,0,.4);height: 80px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span><span></span>
          </button>
          <a class="navbar-brand" href="index.php" style="margin:10px 0 0 0">Attendance Management System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#" style=" background:none;margin: 10px 10px 0 0">Home</a></li>
            <li><a href="#about" style="margin:10px 10px 0 0">About</a></li>
            <li><a href="#contact" style="margin:10px 400px 0 0">Contact</a></li>
            <li><button style="margin: 10px -160px 0 0;position: absolute;right: 20%;width:450px"class="buttteach2" onclick="document.getElementById('id02').style.display='block'">Find your attendance here</button></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br></br></br></br></br></br>
    <div id="output" style="position:relative;left: 13%;bottom: 10%;color: yellow"></div>
    <div id="id02" class="modal2">
    
    <div class="modal-content-border2">
        
        <form id="getAttendance" class="modal-content2">
    <div class="imgcontainer2">
       
        <img src="img/log1.png" alt="Avatar" class="avatar2">
    </div>

    <div class="container2">
        <div class="alert alert-warning hidden" style="border:none;position: absolute;font-size: 15px;background: none;width: 50%;margin:0 0 0 230px;top: 100px;color: yellow">
      <span></span>
      <button style="color:yellow;background: none" type="button" class="close3" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
        <span class="help-block" style="color:yellow;margin-left: 20px;position: absolute;top: 0;">Please use Caps letters in each field !</span>
        <br>
        <select name="year" class="select1">
        <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
      </select>

      <br>
      <select name="section" class="select1" style="margin-top: -100px">
      <option value="-1">Choose year</option>
      <option>1</option><option>2</option><option>3</option><option>4</option>	
    </select>
      <input type="text" class="select1" name="code" placeholder="Subject Code- Eg - CS-501" style="margin-top: 30px;border:1px solid darkgoldenrod">
      <span class="help-block" style="color:yellow;margin-left: 20px">DD-NNN where D : Department , N : Number</span>
      <input type="text" class="select1" name="roll" placeholder="Roll  No. Eg - 180010770275/CS/17" style="border:1px solid darkgoldenrod">
      <span class="help-block" style="color:yellow;margin-left: 20px">N.../DD/BB where N : Serial or roll no., D : Department , B : Batch(Course Starting year)</span>
      <button class="buttteachlog3" type="submit">Results</button><br>
      
      
    </div>
            <button type="reset" style="border:none;background: none;color: darkgoldenrod;float: right;margin-top: -30px">Reset form</button>
    <div class="container2">
        <span style="bottom: -10%" onclick="document.getElementById('id02').style.display='none'" class="close5">&times;</span>
      
    </div>
  </form>
    </div>
</div>
   
 </body>
</html>
