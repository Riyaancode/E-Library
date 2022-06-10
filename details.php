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


  <title>Welcome to E-Library</title>
</head>
<style>
  #toolbar {
    display: none;
  }
</style>

<body style="background-color:#e9ebee;">

  <?php   include "Partials/_header.php";   ?>
  

  <div class="container-fluid row" style="margin-top:100px;">

    <?php

$id = $_GET['cbid'];

$sql = "SELECT * FROM `e_books` WHERE ebid='$id'";
/*$result = mysqli_query($db, $sql);*/
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row['ebid'];
    $title = $row['ebname'];
    $link = $row['eblink'];
    $cover = $row['ebcover'];
    $time = $row['uploadedon'];
    $author = $row['ebauthor'];


    $pieces = explode(" ", $time);
    echo' 

      <!--main section-->
      <div class="col-7">
        <div class="card my-5" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="'.$cover.'" class="img-fluid rounded-start w-75" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h2 class="card-title"><strong>'.$title.'</strong></h2>
                <p class="card-text">by <a>'.$author.'</a></p>
                <p class="card-text"><small class="text-muted">'.$pieces[0].'</small></p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Preview</button>
                <a href="'.$link.'" class="btn btn-success" ">Read</a>
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content" style="height:90vh !important;">

                      <div class="modal-body">
                    <!-- <embed src="'.$link.'" width="100%" height="100%" type="application/pdf"> -->
                      <iframe src="'.$link.' #toolbar=0" width="100%" height="100%">
                    </iframe>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>';
    }
  } else {
    echo "0 results";
  }
  ?>


<!--sidebar-->
<div class="col-5">
              <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white my-5" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
                    <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                      <span class="fs-5 fw-semibold">New Arrival</span>
                    </a>
                    <div class="list-group list-group-flush border-bottom scrollarea">

<?php

$sql = "SELECT *FROM `e_books`";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)){
        $id = $row['ebid'];
        $title = $row['ebname'];
        $link = $row['eblink'];
        $cover = $row['ebcover'];
        $time = $row['uploadedon'];
        $pieces = explode(" ", $time);
      
        echo'
        <a href="details.php? cbid='.$id.'" class="list-group-item list-group-item-action  py-3 lh-tight" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">'.$title.'</strong>
                <small>'.$pieces[0].'</small>
              </div>
              <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>';
}

?>
</div>
                          </div>
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