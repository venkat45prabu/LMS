
<?php
session_start();
require 'conn.php';
@$uname=$_SESSION['name']; 
@$pwd=$_SESSION['pwd'];

if(isset($_POST['submit']))
{
    $cid=$_POST['ccode'];
    $cname=$_POST['cname'];
    $cfile=$_POST['cfile'];
    $cvideo=$_POST['cvideo'];
    $cat=$_POST['ccourse'];
    $sub=$_POST['csub'];
    $amt=$_POST['camt'];

    $add="INSERT INTO course (ccode,cname,cfile,cvideo,category,subscription,amount) VALUES ('$cid','$cname','$cfile','$cvideo','$cat','$sub','$amt')";
    $add_query=mysqli_query($conn,$add);

    if(!$add_query)
       Echo "No";
    else
       echo "S";
}
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="text" type="text/js">
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<script type=”text/javascript” src=”https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js”></script>
    <link rel=”stylesheet” href=”https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css” />
	<meta content="initial-scale=1, maximum-scale=1,
		user-scalable=0" name="viewport" />
	<meta name="viewport" content="width=device-width" />

	<!-- Datatable plugin CSS file -->
	<link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

	<!-- jQuery library file -->
	<script type="text/javascript"
	src="https://code.jquery.com/jquery-3.5.1.js">
	</script>

	<!-- Datatable plugin JS library file -->
	<script type="text/javascript" src=
"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
	</script>




<script>

document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
</script>
<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

.text-clr{
    color : black;
}
:root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color:  #2193b0;
    --first-color-light: #6dd5ed;
    --white-color: #F4F5FF;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100
}

*,
::before,
::after {
    box-sizing: border-box
}

body {
    position: relative;
    margin: var(--header-height) 0 0 0;
    padding: 0 1rem;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    transition: .5s
}

a {
    text-decoration: none
}

.header {
    width: 100%;
    height: var(--header-height);
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background-color: var(--white-color);
    z-index: var(--z-fixed);
    transition: .5s
}

.header_toggle {
     background-image: linear-gradient(to right, #2193b0 0%, #6dd5ed   51%, #F4F5FF 100%);
    font-size: 1.5rem;
    cursor: pointer
}

.header_img {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    overflow: hidden
}

.header_img img {
    width: 40px
}

.l-navbar {
    position: fixed;
    top: 0;
    left: -30%;
    width: var(--nav-width);
    height: 100vh;
    background-image: linear-gradient(to right, #2193b0 0%, #6dd5ed   51%, #F4F5FF 100%);
    padding: .5rem 1rem 0 0;
    transition: .5s;
    z-index: var(--z-fixed)
}

.nav {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden
}

.nav_logo,
.nav_link {
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: 1rem;
    padding: .5rem 0 .5rem 1.5rem
}

.nav_logo {
    margin-bottom: 2rem
}

.nav_logo-icon {
    font-size: 1.25rem;
    color: var(--white-color)
}

.nav_logo-name {
    color: var(--white-color);
    font-weight: 700
}

.nav_link {
    position: relative;
    background-image: linear-gradient(to right, #2193b0 0%, #6dd5ed   51%, #F4F5FF 100%);
    margin-bottom: 1.5rem;
    transition: .3s
}

.nav_link:hover {
    color: var(--white-color)
}

.nav_icon {
    font-size: 1.25rem
}

.show {
    left: 0
}

.body-pd {
    padding-left: calc(var(--nav-width) + 1rem)
}

.active {
    color: var(--white-color)
}

.active::before {
    content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
}

.height-100 {
    height: 100vh
}

@media screen and (min-width: 768px) {
    body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
    }

    .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
    }

    .header_img {
        width: 40px;
        height: 40px
    }

    .header_img img {
        width: 45px
    }

    .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
    }

    .show {
        width: calc(var(--nav-width) + 156px)
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
    }
    .fix{
        padding-top : 0;
        padding-left: 1;
        
    }
    .pad{
        padding-top: 0%;
    }
    button{
        border: 0;
        border-radius: 0%;  
        height: 50;
        width: 110; 
    }
    .top{
        padding-top: 3%;
    }
}
.col-sm-6{
    margin-right:10%;
}
.cen,.bt{
    margin-left:20%;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body id="body-pd">
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <!-- <div class="header_img"> <img src="logo.png" alt=""> </div> -->
        <div class="top">
            <?php echo "$uname"; ?> &nbsp;
            <a href="logout.php"><img src="img/power.svg"></a>
        </header>
    <div class="l-navbar" id="nav-bar">
    <nav class="nav">
            <div> <a href="#" class="nav_logo">
             <i class='bx bx-layer nav_logo-icon  text-dark'>
             </i> <span class="nav_logo-name  text-dark">Admin</span> </a>
                <div class="nav_list">
                 <a href="admin_dashboard.php" class="nav_link active txt-clr"> 
                    <img src="img/dashboard.svg">
                 <span class="nav_name">Dashboard</span> </a>
                  <a href="add_course.php" class="nav_link text-clr">
                  <img src="img/add.svg">
                  <span class="nav_name">ADD COURSE</span> 
                  </a> 
                  <a href="videoup.php" class="nav_link text-clr">
                  <img src="img/add.svg">
                  <span class="nav_name">ADD VIDEO</span> 
                  </a> 
                   <a href="dash.php" class="nav_link text-clr"> <img src="img/addtst.svg">
                    <span class="nav_name">ADD TEST</span> </a> 
                    <a href="view_result.php" class="nav_link text-clr"> <img src="img/result.svg">
                    <span class="nav_name">VIEW RESULTS</span> </a> 
                    <a href="view_user.php" class="nav_link text-clr"> <img src="img/user.svg">
                    <span class="nav_name">VIEW USERS</span> </a>
                    <a href="#" class="nav_link text-clr"> <img src="img/certificate.svg">
                    <span class="nav_name">CERTIFICATES </span> </a>
                    <a href="feedbacks.php" class="nav_link text-clr"> <img src="img/rss.svg">
                    <span class="nav_name">FEEDBACK </span> </a>
                     
                        </div>
            </div> 
        
        </nav>
    </div>
    <br>
    <center><h3>VIEW USERS</h3></center>                                    
    <h2>VIEW USER</h2>

<!--HTML table with student data-->
<table id="tableID" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Mail</th>
            <th>Course</th>
        </tr>
    </thead>
    <tbody>
    <?php
    
   
      $sql = "SELECT * FROM user";
       $query = mysqli_query($conn,$sql);
       if(!$query)
          echo "NO";
        $con=1;
    while($row = mysqli_fetch_assoc($query)){
      
       
      //$status = ($row['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right">late</span>';
       
      ?>
        <tr>
         
        <td><?php echo htmlentities($con);?></td>
        <td><?php echo htmlentities($row['name']);?></td>
        <td><?php echo htmlentities($row['phone']);?></td>
        <td> <?php echo htmlentities($row['mail']);?></td>
        <td><?php echo htmlentities($row['course']);?></td> 
        
        </tr>
        <?php
      ;
      $con++;
    }

  ?>
    </tbody>
</table>

<script>

    /* Initialization of datatable */
    $(document).ready(function() {
        $('#tableID').DataTable({ });
    });
</script>
    </body>
    </html>