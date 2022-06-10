<?php   include "Partials/functions.php";   ?>
<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/form.css">

</head>

<body class="img js-fullheight" style="background-image: url(Assets/img/uni3.jpg);">
    <div class="bg-light  pt-3  text-center overflow-hidden">
        <div class="px-5 text-start">
            <h2 class="display-5 lh-1 fw-bold text-uppercase animate__animated animate__fadeIn m-0">Prof. Saeed Library
            </h2>
            <p class="lead lh-1">Former Dean of Science & Technology FUUAST.</p>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <?php echo display_error(); ?>
                        <form method="post" action="login.php" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="enrollno" placeholder="Enrollment No" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control"
                                    placeholder="Password" required>
                                <span toggle="#password-field" class=" toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3"
                                    name="login_btn">Log In</button>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash;
                            Not yet a member? <a href="register.php">Sign up</a>
                            &mdash;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>