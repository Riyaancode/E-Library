<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Assets/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Hello, world!</title>
</head>
<body>
<?php   include "Partials/functions.php";   ?>
    <?php   include "Partials/_header.php";   ?>
    
    <div class="container-fluid d-flex justify-content-center align-items-center " style="margin-top:110px !important;" id="head">
        <h1 class="text-light fw-bold display-3">About Us</h1>
    </div>
    <div class="bg-light  pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5 fw-bold text-uppercase animate__animated animate__fadeIn">Professor Muhammad Saeed</h2>
        <p class="lead">Former Dean of Science & Technology FUUAST.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto py-4 animate__animated animate__fadeInUp" id="prof" style="width: 40%; height: 600px; border-radius: 21px 21px 0 0;">
    <img src="Assets/img/prof.saeed.jpg"  class="img-fluid rounded" width="500px" alt=""></div>
    </div>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="Assets\img\bg-1.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="Campus Picture"
                    width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">WELCOME TO FUUAST</h1>
                <p class="lead">The Federal Urdu University of Arts, Sciences & Technology enjoys the unique distinction
                    of being the first ever university in Pakistan, which ultimately aims at using Urdu as the main
                    language of instruction and teaching… The University was established on 13th November 2002 under
                    Ordinance No. CXIX of 2002 promulgated by the President of Pakistan. </p>
            </div>
        </div>
    </div>


    <!--<div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="img-fluid rouended" width="768" height="1024" src="Assets/img/VC_Pic.jpeg" alt="">

      </div>
    </div>-->

    <div class="container">
        <div class="row">
            <div class="col" id="vc">
                <img class="img-fluid rounded" width="500" src="Assets/img/VC_Pic.jpeg" alt="">
            </div>

            <div class="col d-flex justify-content-center flex-column">
                <h2 class="featurette-heading">Vice Chancellor FUUAST</h2>
                <main role="main" id="content" class="content_full_width">
                    <p>Federal Urdu University of Arts, Sciences &amp; Technology is enthused by the great vision and
                        knowledge of some of the top Universities around the globe. We at this university believe that
                        every individual has the potential to play significant role in development process after shaping
                        their personalities into resourceful professionals, We are here to help students use their
                        strengths to become more energetic contributors towards individual’s as well as for the nation’s
                        success.</p>
                    <p>Outstanding students, staff, a high caliber imaginative faculty and supporters both in industry
                        and philanthropy have all combined to position the university among the best achieving
                        institutions of higher education.</p>
                    <p>We have merged the theoretical knowledge with practically performed projects to prepare students
                        for real-life work related challenges. Recognition of&nbsp;FUUAST with all the monitoring
                        councils relating to the available disciplines is an excellent support for the quality of
                        education imparted at FUUAST.</p>
                    <p>FUUAST Campuses located at a prime place of the city to provide easy accessibility to every
                        student with advance facilities at campus that can help and catalyze learning process.<br>
                        I invite you to explore what&nbsp;FUUAST has to offer you and find out how is it like to work at
                        FUUAST’s enviorenment.</p>
                </main>
                <!--  <p class="lead">Federal Urdu University of Arts, Sciences & Technology is enthused by the great vision
                    and knowledge of some of the top Universities around the globe. We at this university believe that
                    every individual has the potential to play significant role in development process after shaping
                    their personalities into resourceful professionals, We are here to help students use their strengths
                    to become more energetic contributors towards individual’s as well as for the nation’s success.

                    Outstanding students, staff, a high caliber imaginative faculty and supporters both in industry and
                    philanthropy have all combined to position the university among the best achieving institutions of
                    higher education.

                    We have merged the theoretical knowledge with practically performed projects to prepare students for
                    real-life work related challenges. Recognition of FUUAST with all the monitoring councils relating
                    to the available disciplines is an excellent support for the quality of education imparted at
                    FUUAST.

                    FUUAST Campuses located at a prime place of the city to provide easy accessibility to every student
                    with advance facilities at campus that can help and catalyze learning process.
                    I invite you to explore what FUUAST has to offer you and find out how is it like to work at FUUAST’s
                    enviorenment.</p>-->
            </div>
        </div>
    </div>








    <?php   include "Partials/_footer.php";   ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>