<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/fileupload.css">
    <link rel="stylesheet" href="./css/dbview.css">
    <!-- <link rel="stylesheet" href="./scss/utilities/spinner.scss"> -->


</head>
    
<body id="page-top">
<div id="loader-wrapper">
  <div id="loader"></div>
  
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  </div>


<nav class="navbar navbar-expand-lg bg-dark ">
    <!-- style="background: linear-gradient(to top right,  #f599a5, #7c89d5);" -->
    <div class="container-fluid ">
        <a class="navbar-brand " href="index1.html" style="color: white; font-size: 20px;"><i
                class="fas fa-laugh-wink"></i>Auto <sub>Backup</sub></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse offset-lg-7" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index1.html"
                        style="color: white; font-size: 17px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;font-size: 17px;">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;font-size: 17px;">log out</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;font-size: 17px;">Pricing</a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="wrapper" class="dashboard">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="adminprofile.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>  User Profile</span></a>
    </li>

    <!-- Divider -->
    

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="./databaseview.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>File view</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="fileupload.html">
            <i class="fas fa-fw fa-table"></i>
            <span>upload file</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
</ul>

       
<script src="./bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
    <script src="../bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php


$_server="localhost";
$user="root";
$pw="";
$db="autobackup";
$con=mysqli_connect($_server,$user,$pw,$db);
$select=mysqli_query($con,"select * from filemanager");
echo'<table border="2"><tr>
<th>filename</th>
<th>email</th>
<th>timing</th>
<th>file</th>';

while($row=mysqli_fetch_array($select,MYSQLI_ASSOC))
{
    echo '<tr>';
    echo '<td>'.$row['filename'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['timing'].'</td>';
    echo '<td>'.$row['file'].'</td>';
   echo ' <td>'.
    <a href='databaseview.php?id=".$row['filename']."' class='3'>Delete</a>.
    '</td>';
  
}
echo '</tr>';
echo '</table>';

if(isset($_GET['id']))
{
    echo $_GET['id'];
    // $id=$_GET['id'];
    // $delete=mysqli_query($connect,(DELETE FROM `filemanager` WHERE 'filename'='$id'));
}



?>