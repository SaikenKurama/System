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
<a href=""> <span class = "student"> </span > <span > Student Information</span > </a> 
</li > 
<li > 
<a href=""> <span class = "Records"> </span > <span > Records </span > </a> 
</li > 
<li > 
<a href=""> <span class = "settings    " > </span > <span > Settings </span > </a> 
</li > 
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
<div class="filter">
    <body>
        <table class="content-table">
            <thead>
              <tr>
                <th>No.</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Year</th>
                <th>Section</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Add</th>
              </tr>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr class="active-row">
                <td>2</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>3</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>4</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>5</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>6</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>7</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>8</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>9</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
              <tr>
                <td>10</td>
                <td>2100-10000</td>
                <td>Mekayla Reyes</td>
                <td>2</td>
                <td>C</td>
                <td>20</td>
                <td>F</td>
                <td>09123456789</td>
                <td>abc@gmail.com</td>
                <td>Carmona</td>
                <td><box-icon type='solid' name='edit' size='xs' ></box-icon><box-icon type='solid' name='trash' size='xs'></box-icon></td>
              </tr>
            </tbody>
          </table>
    </body>
    </html>
