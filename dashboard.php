<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html> 
 <html lang = " en "> 
 <head > 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comparatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Student Information</title>
</head > 
<body > 
<div class = " sidebar " > 
<div class = " sidebar-brand " > 
<h1 > <span class = "studinf"> </span >STUDENT INFORMATION</h1 > 
</div > 
<div class = "sidebar-menu" > 
<ul > 
<li > 
<a href="" onclick="location.href='main-content'"> <span class = "dashboard" > </span > <span >Dashboard </span > </a> 
</li > 
<li > 
<a href="" onclick="location.href='record.php'"> <span class = "student"> </span > <span > Student Information</span > </a> 
</li > 
<li > 
<a href=""> <span class = "Records"> </span > <span > Records </span > </a> 
</li > 
<li > 
<a href=""> <span class = "settings    " > </span > <span > Settings </span > </a> 
</li > 
<a href="/HTML/stud_Info-main/OSIS/logout.php" class="btn btn-warning">Logout</a>
</ul > 
</div>
</div>
<div id="main">
    <header><!---->
    <div class="topbar">
        <div class="toggle">
            <box-icon name='menu' id="icon-close"></box-icon>
        </div>

        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <box-icon name='search-alt-2' ></box-icon>
            </label>
        </div>

        <div class="user">
            <img src="./bg.jpg" alt="">
        </div>
    </div>
    </header>
<!---cards-->

    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">20</div>
                <div class="cardName">Students</div>
            </div>

            <div class="iconBx">
                <box-icon name='user' size='lg' ></box-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">3</div>
                <div class="cardName">Courses</div>
            </div>

            <div class="iconBx">
                <box-icon name='book-reader' size='lg'></box-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">10</div>
                <div class="cardName">Female</div>
            </div>

            <div class="iconBx">
                <box-icon name='female' size='lg'></box-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">10</div>
                <div class="cardName">Male</div>
            </div>

            <div class="iconBx">
                <box-icon name='male' size='lg'></box-icon>
            </div>
        </div>
    </div>
   <!--box2--> 
    
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">5</div>
                <div class="cardName">Age (18-23)</div>
            </div>

            <div class="iconBx">
                <box-icon name='group' size='lg'></box-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">15</div>
                <div class="cardName">Age (24 Above)</div>
            </div>

            <div class="iconBx">
                <box-icon name='group' size='lg'></box-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">10</div>
                <div class="cardName">Freshmen</div>
            </div>

            <div class="iconBx">
                <box-icon type='solid' name='graduation' size='lg'></box-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">10</div>
                <div class="cardName">Graduating</div>
            </div>

            <div class="iconBx">
                <box-icon type='solid' name='graduation' size='lg'></box-icon>
            </div>
        </div>
    </div>
        
    
<script src="main.js"></script>
</body>

</html>