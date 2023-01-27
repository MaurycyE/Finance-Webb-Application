<?php
session_start();

unset($_SESSION['error']);

if((isset($_SESSION['isLoggedIn']))&&($_SESSION['isLoggedIn']==true)) {
    header('Location: main menu.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration site</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
</head>

<body>


    <div class="container-fluid bg-image  d-flex justify-content-center align-items-center"
        style="background-image: url(img/background_stars2.jpg); height: 100vh;">

        <main>

            <div class="row justify-content-center text-center">

                <div class="col-8 col-sm-10 bg-white rounded-5 shadow-lg border">

                    <h1 class=" h4 my-3 fw-bolder font-monospace mx-2 mt-4">
                        Zyskaj kontrolę nad swoimi wydatkami!
                    </h1>

                    <p class="h5 my-3 fw-bolder font-monospace">Zacznij od..</p>

                    <form action="#" class="m-4">

                        <div class="input-group mb-2">
                            <span class="input-group-text" id="username"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-file-person"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                    <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="username" required>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="email">@</span>
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="email" required>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="password"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                </svg></span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                                aria-describedby="password" required>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="password_confirm"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-clipboard-check"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                    <path
                                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                </svg></span>
                            <input type="password" class="form-control" placeholder="Confirm password"
                                aria-label="password confirm" aria-describedby="password confirm" required>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success mt-3 btn-lg">Rejestracja</button>
                        </div>


                    </form>

                    <a class="btn btn-primary mb-4" href="log in.php" role="button">Masz już konto?</a>

                </div>

            </div>

        </main>



    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>