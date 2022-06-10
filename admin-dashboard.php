<?php
include('Partials\functions.php');

function isAdmin() {
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}


if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Custom styles for this template -->
    <link href="Assets\css\dashboard.css" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>



</head>

<style>
.nav-link:hover {
    color: #ffff;
    background: #0d6efd !important;
}
</style>

<body>



    <?php   include "Partials/_header.php";   ?>

    <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark z-index-2"
        Style="background-image: linear-gradient(to bottom, #71893B, #354516 80%); z-index:200;">
        <div class="container-fluid d-flex justify-content-center py-2">
            <a class="d-flex justify-content-center" href="Index.php"><img src="Assets\img\finallogox.png"
                    style="width: 80% !important;" alt="logo"></a>
        </div>
        </div>
    </nav>-->

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo display_error(); ?>
                <div class="modal-body">

                    <!--         <form method="post" action="create_user.php">

                        

                        <div class="input-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>">
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="input-group">
                            <label>User type</label>
                            <select name="user_type" id="user_type">
                                <option value=""></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>




                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="password_1">
                        </div>
                        <div class="input-group">
                            <label>Confirm password</label>
                            <input type="password" name="password_2">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn" name="register_btn"> + Create user</button>
                        </div>
                    </form>
-->












                    <form>
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Name</label>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example1" class="form-control" />
                            <label class="form-label" for="form1Example1">Email address</label>
                        </div>

                        <div class="col-md-4 mb-4">
                            <label for="user_type" class="form-label">User Type</label>
                            <select id="user_type" class="form-select">
                                <option selected>Choose...</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example2" name="password_1" class="form-control" />
                            <label class="form-label" for="form1Example2">Password</label>
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example3" name="password_2" class="form-control" />
                            <label class="form-label" for="form1Example3">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block" name="register_btn">+ Create
                            user</button>
                    </form>
</body>
</div>
</div>
</div>
</div>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" style="z-index:0;" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-5">

                <ul class="nav nav-pills flex-column mb-auto mt-5">
                    <li class="nav-item my-1">
                        <a href="#dashboard" class="nav-link" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a class="nav-link link-dark" aria-current="page" href="form.php">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Add Books
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="#" class="nav-link link-dark" type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Add User
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="#users" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Users
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <section id="dashboard" class="pt-5 pb-5">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 mt-5 border-bottom"
                    id="dash">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
                <div class="title">
                    <?php 
                        if(isset($_GET['statusMsg'])){
                            $statusMsg = $_GET['statusMsg'];
                            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                            '.$statusMsg.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        } 

                    ?>
                    <div class="d-flex justify-content-between mb-4">
                        <h2>E-books</h2>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Add Books
                        </button>
                    </div>
                    <div>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-3">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Author" class="form-label">Author</label>
                                        <input type="text" name="author" class="form-control" id="Author">
                                    </div>
                                    <div class="custom-file">
                                        <label class="form-label" for="file">Select E-Book</label>
                                        <input type="file" name="ebook" class="form-control" id="ebook"
                                            aria-describedby="file">
                                    </div>
                                    <div class="custom-file">
                                        <label class="form-label" for="file">Select E-Book Cover</label>
                                        <input type="file" name="cover" class="form-control" id="cover"
                                            aria-describedby="file">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                                        Upload File
                                    </button>
                                </form>





                            </div>
                        </div>

                    </div>


                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Cover</th>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Uploaded On</th>
                                <th scope="col">Delete User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

$sql = "SELECT *FROM `e_books`";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)){
        $id = $row['ebid'];
        $title = $row['ebname'];
        $cover = $row['ebcover'];
        $author = $row['ebauthor'];
        $uploaddate = $row['uploadedon'];
        $date = explode(" ", $uploaddate);

        echo'<tr>
              <td> <img src="'.$cover.'" class="img-fluid rounded-start" style="width: 100px;" alt="'.$title.'"></td>
              <td>'.$id.'</td>
              <td>'.$title.'</td>
              <td>'.$author.'r</td>
              <td>'.$date[0].'</td>
              <td><a href="delete-ebook.php?userid='.$id.'" class="btn btn-danger ml-2">Delete</a></td>
            </tr>';
}


?>

                        </tbody>
                    </table>
                </div>
            </section>


            <!--Add Form-->

            <?php

function addEbook(){

    include "Partials/form.php";
}

function addEbooks(){



echo'
<section id="add-ebooks">
<h1 class="h2">A-Ebooks</h1>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h6 class="card-title mb-3">This appointment is for</h6>
            <div class="d-flex flex-row"> <label class="radio mr-1"> <input type="radio" name="add" value="anz" checked> <span> <i class="fa fa-user"></i> Anz CMK </span> </label> <label class="radio"> <input type="radio" name="add" value="add"> <span> <i class="fa fa-plus-circle"></i> Add </span> </label> </div>
            <h6 class="information mt-4">Please provide following information about Anz CMK</h6>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Name"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Mobile"> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Email ID"> </div>
                    </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">By Booking this appointment you agree to the</small> <a href="#" class="terms">Terms & Conditions</a> </div> <button class="btn btn-primary btn-block confirm-button">Confirm</button>
        </div>
    </div>
</div>
</section>';

}



?>
































            <section id="users" class=" pb-5">
                <div class="title">
                    <?php 
                        if(isset($_GET['statusMsg'])){
                            $statusMsg = $_GET['statusMsg'];
                            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                            '.$statusMsg.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        } 

                    ?>
                    <div class="d-flex justify-content-between mb-4">
                        <h2>Users</h2>
                    </div>
                    <div>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-3">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Author" class="form-label">Author</label>
                                        <input type="text" name="author" class="form-control" id="Author">
                                    </div>
                                    <div class="custom-file">
                                        <label class="form-label" for="file">Select E-Book</label>
                                        <input type="file" name="ebook" class="form-control" id="ebook"
                                            aria-describedby="file">
                                    </div>
                                    <div class="custom-file">
                                        <label class="form-label" for="file">Select E-Book Cover</label>
                                        <input type="file" name="cover" class="form-control" id="cover"
                                            aria-describedby="file">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                                        Upload File
                                    </button>
                                </form>





                            </div>
                        </div>

                    </div>


                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                
                                <th scope="col">Id</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Delete User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

$sql = "SELECT *FROM `users`";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['username'];
        $email = $row['email'];
        $role = $row['user_type'];

        echo'<tr>
    
              <td>'.$id.'</td>
              <td>'.$name.'</td>
              <td>'.$email.'r</td>
              <td>'.$role.'</td>
              <td><a href="delete-process.php?userid='.$id.'" class="btn btn-danger ml-2">Delete</a></td>
            </tr>';
}


?>

                        </tbody>
                    </table>
                </div>
            </section>







        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="dashboard.js"></script>
</body>

</html>