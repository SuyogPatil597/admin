<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "r";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> -->
<!doctype html>
<html lang="en">

<head>
<script>
// javascript Animate onscroll Start
$(document).ready(function () {
    if (screen.width > 1024) {
        AOS.init({
            easing: 'ease-in-out-sine',
            once: true,
        });
    }
});
/* ============================================================
   Sidenav
 * ============================================================*/
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(document).on('click', function (e) {
    if ($(e.target).closest("#mySidenav, .slide-menu").length === 0) {
        document.getElementById("mySidenav").style.width = "0";
    }
});
/* ============================================================
   Onscroll
 * ============================================================*/
window.onscroll = function () {
    myFunction()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}

$(function () {
    $(".scroll").click(function () {
        $("html,body").animate({
            scrollTop: $(".top").offset().top
        }, "1000");
        return false
    })
})
/* ============================================================
   Scroll to Top
 * ============================================================*/
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});
$('#return-to-top').click(function () {
    // When arrow is clicked

    $('body, html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});


</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800|Old+Standard+TT:400,400i,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>
        .banner-home {
            height: auto;
            padding-top: 200px;
        }

    </style>
</head>

<body>
    <header class="top">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="adminh.html">Home</a>
            <a href="log.php">LOG-IN</a>

        </div>

        <nav id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 align-self-center left-side">
                        <p>Do Yoga, Live Young </p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-5 align-self-center logo">
                        <a href="index.html"><img src="images/i9-removebg-preview.png" width="150px" alt="logo"></a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-7 align-self-center right-side">
                        <div class="social-icons square">
                            <div id="page-content-wrapper">
                                <span class="slide-menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="social-icons another">
                           
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <img class="border-img" src="images/border.png" width="100%" alt="">
    </header>

    <section class="banner-another ">
    </section>

    <!-- <div class="container">
         <h1>Registered Users :</h1>
        <table class="table table-bordered mt-3">
  <thead>
    <tr>
    <th scope="col">First name</th>
      <th scope="col">Middle name</th>
      <th scope="col">Last name</th>
      <th scope="col">mobile</th>
      <th scope="col">Aadhar</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>

    </tr>
  </thead>
  <tbody>

    <?php
       
        $sql = "SELECT * FROM `register`";
        $result = mysqli_query($conn,$sql);

        if ($result->num_rows > 0){
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $fname = $row['fanme'];
                $mname= $row['mname'];
                $lname=$row['lname'];
                $phone=$row['phone'];
                $adhar=$row['adhar'];
                $addr=$row['addr'];
                $age=$row['age'];


                echo ' <tr>
                <td>'.$fname.'</td>
                <td>'.$mname.'</td>
                <td>'.$lname.'</td>
                <td>'.$phone.'</td>
                <td>'.$adhar.'</td>
                <td>'.$addr.'</td>
                <td>'.$age.'</td>
              </tr>';
            }

            
        }
    }
        else {
            echo "0 results";}
          

    ?>


  </tbody>
</table>
    </div>     -->
      
    
    <footer class="contact">
        <div class="gradient"></div>
        <div class="copyright">
            <div class="container">
                <div class="row border-img">
                    <div class="col-lg-12 col-md-12 col-12 columns-1">

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <a href="index.html"><img src="images/i9-removebg-preview.png" width="150px" alt="logo"></a>

                    </div>
                    <div class="col-lg-9 col-md-12 right-part">
                        <ul class="ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li><a class="hidden-xs">~</a></li>
                            
                           
                            
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                           


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="js/custom.js"></script> -->
    
</body>

</html>
