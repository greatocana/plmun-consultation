<!DOCTYPE html>
<html lang="en">

<head>
    <title>PLMUN STUDENT CONSULTATION SYSTEM</title>
    <link rel="shortcut icon" href="logo_plmun.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/register.css" />
	<script src="js/axios.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage" style="display: flex; flex-direction: row; align-items: center;">
                    <img src="plmun-logo.png" style="width:200px;height:40px; margin-right: 5px;"></a>
            </div>

        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1>STUDENT CONSULTATION MANAGEMENT SYSTEM</h1>
    </div>

    <form class="container-fluid text-left" action="javascript:void(0)">
        <h2>SIGN UP</h2>

        <label>Student No.</label>
        <input type="text" id="stud_no" placeholder="Student No.">

        <label>First Name</label>
        <input type="text" id="Fname" placeholder="First Name">

        <label>Middle Name</label>
        <input type="text" id="Mname" placeholder="middle Name">

        <label>Last Name</label>
        <input type="text" id="Lname" placeholder="Last Name">

        <label>Course</label>
        <select id="course">
            <option value""> Select Course</option>
            <option value""> Bachelor of Arts in Communication</option>
            <option value""> Bachelor of Arts in Political Science</option>
            <option value""> Bachelor of Science in Psychology</option>
            <option value""> Bachelor of Science in Business Administration</option>
            <option value""> Bachelor of Arts in Accountancy</option>
            <option value""> Bachelor of Arts in Criminology</option>
            <option value""> Bachelor of Arts in Computer Science</option>
            <option value""> Bachelor of Arts in Information Technology</option>
            <option value""> Associate in Computer Technology</option>
            <option value""> Bachelor of Elementary Education (BEEd)</option>
            <option value""> Bachelor of Secondary Education (BSEd)</option>
        </select><br>

        <label>Year</label>
        <input type="text" id="year" placeholder="Year">

        <label>Password</label>
        <input type="password" id="password" placeholder="Password">

        <label>Re Password</label>
        <input type="password" id="re_password" placeholder="Re_Password">

        <button type="submit" onClick="register()">Sign Up</button>
        <a href="dashboard.php" class="ca">Already have an account?</a>
    </form>

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>
            PLMUN
            <br>
            <br>
            <br>
            University Road NBP Reservation
            <br>
            Barangay Poblacion 1770 Muntinlupa City
            <br>
            Philippines
        <div class="fa fa-facebook">:</div>
        <a href="https://www.facebook.com/plmunofficial/?ref=page_internal">@plmunofficial</a><br>
        Search for @plmunofficial on Facebook or Messenger to find this Page easily.
        </p>
    </footer>
	<<script src="js/auth.js"></script>
</body>
</html>


/*
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
$(document).ready(function() {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    $(window).scroll(function() {
        $(".slideanim").each(function() {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
})
</script> */