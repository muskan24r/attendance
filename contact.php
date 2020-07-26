<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/profile.css">
        <title>You can contact us here</title>
        <link rel="stylesheet" href="css/contact.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script>
            function show(){
                document.getElementById('showa').style.display="block";
                document.getElementById('nomb').style.display="none";
                document.getElementById('hida').style.display="none";
            }
            function hide(){
                document.getElementById('showa').style.display="none";
                document.getElementById('nomb').style.display="block";
                document.getElementById('hida').style.display="block";
            }
            function show2(){
                document.getElementById('showa2').style.display="block";
                document.getElementById('nomb2').style.display="none";
                document.getElementById('hida2').style.display="none";
            }
            function hide2(){
                document.getElementById('showa2').style.display="none";
                document.getElementById('nomb2').style.display="block";
                document.getElementById('hida2').style.display="block";
            }
            function show3(){
                document.getElementById('showa3').style.display="block";
                document.getElementById('nomb3').style.display="none";
                document.getElementById('hida3').style.display="none";
            }
            function hide3(){
                document.getElementById('showa3').style.display="none";
                document.getElementById('nomb3').style.display="block";
                document.getElementById('hida3').style.display="block";
            }
            function show4(){
                document.getElementById('showa4').style.display="block";
                document.getElementById('nomb4').style.display="none";
                document.getElementById('hida4').style.display="none";
            }
            function hide4(){
                document.getElementById('showa4').style.display="none";
                document.getElementById('nomb4').style.display="block";
                document.getElementById('hida4').style.display="block";
            }
        
        </script>
    </head>
<body>
 <ul class="ulu" style=";position: relative;" id="navm">
     <li class="ululi"><a style="font-size:2.5em;" class="ulua" href="teacher.php" data-text="Dashboard">Dashboard</a></li>
       <li class="ululi"><a style="font-size:2.5em;" class="ulua" href="profile.php" data-text="Profile">Profile</a></li>
       <li class="ululi"><a style="font-size:2.5em;" class="ulua" href="statistics.php" data-text="Statistics">Statistics</a></li>
       <li class="ululi"><a style="font-size:2.5em;" class="ulua" href="class.php" data-text="Edit">Edit</a></li>
       <li class="ululi"><a style="font-size:2.5em;" class="ulua" href="about.php" data-text="About">About</a></li>
       <li class="ululi"><a style="font-size:2.5em;" class="ulua" href="contact.php" data-text="Contact">Contact</a></li>
       <li class="ululi"><a style="font-size:2.5em;" class="ulua" href="logout.php" data-text="Logout">Logout</a></li>
	</ul>
    
    
    <div class="containerr">
        
        <div class="column active">
           
            <div class="content">
                <h1>1</h1>
                <div class="box">
                    <h2>Muskan Singh</h2><i style="position: absolute;right: 7%;top: 10%">(Head)</i>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> muskan24r@gmail.com</p>
                    <p id="nomb" style="display: none;"><i class="fa fa-phone-square" aria-hidden="true"></i> 8887578822</p>
                    <div class="middle">
                        <a class="btn" href="https://www.facebook.com/niharika2060">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        
                        <a class="btn" href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#" id="in">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <button class="btn" href="#" id="showa" onclick="hide()">
                            <i class="fa fa-whatsapp" id="showwa" aria-hidden="true"></i>
                        </button>
                        <button class="btn" href="#" id="hida" onclick="show()" style="display: none">
                            <i class="fa fa-whatsapp" id="hidda" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg bg1"></div>
        </div>
         <div class="column active">
            <div class="content">
                <h1>2</h1>
                <div class="box">
                    <h2>Niharika Goel</h2>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> muskan24r@gmail.com</p>
                    <p id="nomb2" style="display: none;"><i class="fa fa-phone-square" aria-hidden="true"></i> 8887578822</p>
                    <div class="middle">
                        <a class="btn" href="https://www.facebook.com/niharika2060">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        
                        <a class="btn" href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#" id="in2">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <button class="btn" href="#" id="showa2" onclick="hide2()">
                            <i class="fa fa-whatsapp" id="showwa2" aria-hidden="true"></i>
                        </button>
                        <button class="btn" href="#" id="hida2" onclick="show2()" style="display: none">
                            <i class="fa fa-whatsapp" id="hidda2" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg bg2"></div>
        </div>
         <div class="column active">
            <div class="content">
                <h1>3</h1>
                <div class="box">
                    <h2>Sunny Kashyap</h2>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> sk1768832@gmail.com</p>
                    <p id="nomb3" style="display: none;"><i class="fa fa-phone-square" aria-hidden="true"></i> 8887578822</p>
                    <div class="middle">
                        <a class="btn" href="https://www.facebook.com/kahyap.sunny">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        
                        <a class="btn" href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#" id="in3">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <button class="btn" href="#" id="showa3" onclick="hide3()">
                            <i class="fa fa-whatsapp" id="showwa3" aria-hidden="true"></i>
                        </button>
                        <button class="btn" href="#" id="hida3" onclick="show3()" style="display: none">
                            <i class="fa fa-whatsapp" id="hidda3" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg bg3"></div>
        </div>
         <div class="column active">
            <div class="content">
                <h1>4</h1>
                <div class="box">
                    <h2>Utkarsh Jaiswal</h2>
                    <p><i class="fa fa-envelope" aria-hidden="true"> utkr98.jais@gmail.com</i></p>
                    <p id="nomb4" style="display: none;"><i class="fa fa-phone-square" aria-hidden="true"></i> 8887578822</p>
                    <div class="middle">
                        <a class="btn" href="https://www.facebook.com/utkarsh.jaiswal.587">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        
                        <a class="btn" href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="btn" href="#" id="in4">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <button class="btn" href="#" id="showa4" onclick="hide4()">
                            <i class="fa fa-whatsapp" id="showwa4" aria-hidden="true"></i>
                        </button>
                        <button class="btn" href="#" id="hida4" onclick="show4()" style="display: none">
                            <i class="fa fa-whatsapp" id="hidda4" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg bg4"></div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
      $(document).on('mouseover','.containerr .column', function(){
          $(this).addClass('active').siblings().removeClass('active')
      })
  </script>
</body>
</html>


