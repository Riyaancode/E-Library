<?php
include('Partials\functions.php');
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
#add-ebooks{
position: relative;
top: 100px;
}
</style>

<body>



    <?php   include "Partials/_header.php";   ?>



    <section id="add-ebooks" class="mt-5 container">
        <h1 class="h2 text-center my-5">Add E-books</h1>
        <?php 
                        if(isset($_GET['statusMsg'])){
                            $statusMsg = $_GET['statusMsg'];
                            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                            '.$statusMsg.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        } 

                    ?>
        <div class="container mt-5 mb-5 d-flex justify-content-center">
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
                    <input type="file" name="ebook" class="form-control" id="ebook" aria-describedby="file">
                </div>
                <div class="custom-file">
                    <label class="form-label" for="file">Select E-Book Cover</label>
                    <input type="file" name="cover" class="form-control" id="cover" aria-describedby="file">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Upload File
                </button>
            </form>
    </section>


</body>

</html>