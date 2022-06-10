<nav class="navbar navbar-light navbar-expand-lg px-4 py-3 bg-white fixed-top"
    style=" font-family: 'Roboto', sans-serif; z-index:10; box-shadow: 0 4px 18px 0px rgb(0 0 0 / 12%), 0 7px 10px -5px rgb(0 0 0 / 15%);">
    <div class="container-fluid">
        <a class="navbar-brand" href="Index.php">
            <div class="text-start">
                <h2 class="display-5 lh-1 fw-bold text-uppercase animate__animated animate__fadeIn m-0">Prof. Saeed
                    Library
                </h2>
                <p class="lead lh-1 m-0">Former Dean of Science & Technology FUUAST.</p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <form>
                <input type="text" class="live-search-box" placeholder="search here" />
                    
                </form>
                <p class="my-0 mx-2">Welcome

                    <?php  if (isset($_SESSION['user'])) : ?>
                    <strong><?php echo $_SESSION['user']['username']; ?></strong>

                    <small>
                        <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                    </small>

                    <?php endif ?>

                </p>
                <a href="index.php?logout=1" class="btn btn-danger ml-2">Logout</a>
            </div>
</nav>







<?php


/*

session_start();

echo '<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
<a class="navbar-brand" href="/E-Library">iDiscuss</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="/forum">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Top Categories
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php" >Contact</a>
    </li>
  </ul>
  <div class="row mx-2">';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
    <input class="form-control mr-sm-2" name="search" type="search" actiion="search.php" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
      <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
      </form>';
}
else{ 
  echo '<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
    <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
  }


  echo '</div>
      </div>
      </nav>'; 

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
*/


?>