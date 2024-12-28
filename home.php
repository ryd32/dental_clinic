<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>Home</title>


</head>
<body>






 <!-- ======= Top Bar ======= -->
    <div id="topbar1" class="d-flex align-items-center fixed-top">
      <div
        class="container d-flex align-items-center justify-content-center justify-content-md-between"
      >
        <div class="align-items-center d-none d-md-flex">
          <i class="bi bi-clock"></i> Saturday - thursday, 8AM to 5PM
        </div>
        <div class="d-flex align-items-center">
          <i class="bi bi-phone"></i> Call us now 025275481
        </div>
      </div>
    </div>

    <!-- ======= Header ======= -->


    <header id="header1" class="fixed-top">
      <div class="container d-flex align-items-center">
        <a href="index.html" class="logo me-auto"
          ><img src="img/favicon.jpg" alt=""
        /></a>



        <!-- Uncomment below if you prefer to use an image logo -->

        <!-- <h1 class="logo me-auto"><a href="index.html"></a></h1> -->

        <nav id="navbar1" class="navbar1 order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="index.html">Home</a></li>
            <li><a class="nav-link scrollto" href="Services.html">Services</a></li>
            <li><a class="nav-link1 scrollto" href="#about">About US</a></li>
            
           
            
            <li><a class="nav-link1 scrollto" href="contact.html">Contact US</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <a href="#appointment" class="appointment-btn1 scrollto1"
          ><span class="d-none d-md-inline">Make an Appointment</span> </a
        >
  <a href="#appointment" class="appointment-btn1 scrollto2 "
          ><span class="d-none d-md-inline">Logout</span></a
        >
      </div>

    </header>
















    <div class="nav1">
        <div class="logo1">
            <p><a href="home.php">WELCOME TO OUR CLINIC</a> </p>
        </div>

        <div class="right-links1">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btnn">Log Out</button> </a>

        </div>
    </div>
    <main>

       <div class="main-box1 top">
          <div class="top1">
            <div class="box1">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome to our Clinic</p>
            </div>
            <div class="box1">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom1">
            <div class="box1">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div>
          </div>
       </div>

    </main>
</body>
</html>