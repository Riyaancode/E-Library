<?php
include('Partials\functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="Assets\css\styles.css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <title>Welcome to E-Library</title>
    <script src="jquery-2.1.1.min.js">
$(document).ready(function(){
  
  var ajaxFunction = function( val ){
    $('#out').text('Val: ' + val);
  }
  
  $('#search').on('keyup paste',function(){
    if(this.value.length >= 3)
      ajaxFunction(this.value);
  });

});
    </script>
</head>

<body>

    <?php   include "Partials/_header.php";   ?>
    <input type="text" id="search">
<div id="out"></div>

    <!--<div class="content">
		 notification message 
		<?php// if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php /*
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					*/
                    ?>
				</h3>
			</div>
		<?php// endif ?>

	</div> -->
    <?php
    if (isLoggedIn()) {
      echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>Success!</strong> Welcome Back!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>

    <header class=" bg-image-full" style="background-image: url('Assets/img/uni3.jpg')">
        <div class="text-center py-5" style="backdrop-filter: brightness(0.3);">
            <img class="img-fluid rounded-circle mb-4 pt-5" src="Assets/img/prof.saeed-2.jpg" alt="...">
            <h1 class="text-white fs-3 fw-bolder">Professor Muhammad Saeed <small>(Late)</small></h1>
            <p class="text-white-50 mb-0 pb-5">Former Dean of Science & Technology FUUAST.</p>
        </div>
    </header>

    <!--  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Assets\img\Federal-Urdu-University-FUUAST.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Assets\img\Federal-Urdu-University-FUUAST.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Assets\img\Federal-Urdu-University-FUUAST.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <input type="text" class="live-search-box" placeholder="search here" />


    <ul class="live-search-list">
<li>Lorem</li>
<li>ipsum</li>
<li>dolor</li>
<li>sit</li>
<li>amet</li>
</ul>

    <div class="container my-4 px-4 px-lg-5 mt-5">
        <h2 class="text-center fw-bold display-3 my-5">E-BOOKS</h2>

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center live-search-list">
            <!--  <div class="col mb-5">
                <div class="card h-100">
                     Product image
                    <img class="card-img-top" src="'.$cover.'" alt="' .$title. '">
                     Product details
                    <div class="card-body p-4">
                        <div class="text-center">
                             Product name
                            <h5 class="fw-bolder">' .$title. '</h5>
                             Product price
                            $40.00 - $80.00
                        </div>
                    </div>
                     Product actions
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="details.php? cbid='.$id.'">View options</a></div>
                    </div>
                </div>
            </div>-->

            <?php

                $sql = "SELECT *FROM `e_books`";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_assoc($result)){
                        $id = $row['ebid'];
                        $title = $row['ebname'];
                        $link = $row['eblink'];
                        $cover = $row['ebcover'];
                        $author = $row['ebauthor'];

                        echo'            <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="'.$cover.'" alt="' .$title. '">
                            <!-- Product details-->
                            <div class="card-body p-4 bg-white d-flex flex-column justify-content-between" style="margin-top:-40px;!important">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" id="title">' .$title. '</h5>
                                    <!-- Product price-->
                                    '.$author.'
                                </div>
                                <div class="text-center mt-3"><a class="btn btn-outline-dark mt-auto px-4"
                                        href="details.php? cbid='.$id.'">View</a>
                                        </div>
                            </div>
                        </div>
                    </div>';
                }
                

            ?>


        </div>
    </div>







    <?php   include "Partials/_footer.php";   ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>