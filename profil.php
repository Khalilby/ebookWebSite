<?php
include("login/php/userData.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="assets/icon.png">
    <title>ZipBooks|Profil</title>
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .profile-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        max-width: 450px;
        width: 100%;
        height: 460px;
        text-align: center
    }

    .profile-header {
        text-align: center;
        margin-bottom: 30px;
        font-size: 35px;
        font-weight: 600;
        color: #232836;
    }

    .profile-details {
        text-align: justify;
        color: #232836;
        font-weight: 600;

    }

    .settings_button {
        text-decoration: none;
        color: white;
        font-weight: 600;
        border-radius: 50px;
        background-color: #FF6F03;
        cursor: pointer;
        padding: 20px;

    }

    .gender {
        margin-bottom: 35px
    }

    .settings_button:hover {
        background-color: #016dcb;
        transition: 1.2s;
        text-decoration: none;
        color: white
    }

    .user_data,
    .user_data_gender,
    .user_data_birth {
        font-size: 14px;
        font-weight: bold
    }

    .user_data {
        margin-left: 62px;

    }

    .user_data_gender {
        margin-left: 45px;

    }

    .profile-details div {
        padding: 10px;
        padding-bottom: 20px;
        font-weight: bolder
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-white fixed-top " id="navbar" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
            <a href="home.php">
                <img src="assets/logo.png" alt="logo de site web " class="mainNavLogo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <img src="assets/logo.png" alt="logo de site web" class="logo"></a>

                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="login/login.php">Login</a>
                        </li> -->
                        <li class="nav-item">

                            <div class="btn-group test">
                                <button type="button" class="dropdown-toggle nav-link active" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-person-lines-fill"></i> <?php
                            echo $userName;
                            ?>
                                    <!-- Display the user's name with an icon -->
                                </button>
                                <div class="test">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item nav-link" href="profil.php"><i
                                                class="bi bi-person-fill"></i>
                                            Profile</a>
                                        <a class="dropdown-item nav-link" href="settings.php"><i
                                                class="bi bi-gear-fill"></i>
                                            Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-link" href="login/login.php"><i
                                                class="bi bi-box-arrow-right"></i>
                                            Logout</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container profile-container">
        <div class="profile-header">
            User Profile
        </div>



        <div class="profile-details">
            <div> <span class="titre">Name :</span>
                <span class="user_data"><?php echo $profil_full_name?></span>
            </div>
            <div><span>Email :</span><span class="user_data"> <?php echo $profil_email?></span></div>

            <div><span>Date of birth :</span><span class="user_data_birth">
                    <?php echo $profil_date_birth?></span>
            </div>
            <div class="gender"><span>Gender : </span><span class="user_data_gender"><?php echo $profil_gender?></span>
            </div>
        </div>

        <!-- Button to go to the Settings page -->

        <a href="settings.php" class="settings_button">
            <i class="bi bi-gear-fill"></i> Go to Settings
        </a>


    </div>


</body>

</html>