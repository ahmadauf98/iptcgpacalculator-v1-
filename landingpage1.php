<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CGPA Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="uplogo.png" type="image/x-icon">
    <link rel="shortcut icon" href="uplogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143688410-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-143688410-1');
    </script>

<style>
    #btn-drop1{
        margin-right:7%;
    }

    #btn-drop2{
        margin-right:7%;
        transform: translate3d(-138px, 35px, 0px);
    }
    </style>
</head>
</head>

<body>
    <!-- Navigation Bar Section-->
    <!-- Bootstrap 4 Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#1B1C1E;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Logo.png" width="auto" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="text-align:center;">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" class="item">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="landingpage.php" class="item">Calculator</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="landingpage1.php" class="item"><b>Grade</b></a>
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0" style="text-align:center;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.facebook.com/ahmadauf.nasruddin" class="item"
                                id="dropdown1">
                                <i class="facebook icon"></i> Facebook</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://twitter.com/Auf2098" class="item" id="dropdown1">
                                <i class="twitter icon"></i> Twitter</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://www.instagram.com/ahmadauf2098/" class="item"
                                id="dropdown1">
                                <i class="instagram icon"></i> Instagram</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section-->
    <div class="ui inverted vertical masthead center aligned segment" id="landing1">
        <div class="ui text container">
            <h1>GRADE TARGET</h1>
            <h4 class="ui inverted header" style="font-size: 35px;"> Select University :
            </h4>

            <div class="btn-group " role="group" aria-label="Button group with nested dropdown">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-success btn-sm dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Public University</b>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="btn-drop1">
                    <a class="dropdown-item" href="umGrade.php" style="color:black;"><img src="umicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Malaya (UM)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="upmGrade.php" style="color:black;"><img src="upmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Putra Malaysia (UPM)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="uitmGrade.php" style="color:black;"><img src="uitmicon.ico"
                            alt="" height="20px" style="margin: 1px 3px 0 0">
                        Universiti Teknologi Mara (UITM)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="utmGrade.php" style="color:black;"><img src="utmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Teknologi Malaysia (UTM)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="ukmGrade.php" style="color:black;"><img src="ukmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Kebangsaan Malaysia (UKM)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="uiaGrade.php" style="color:black;"><img src="uiaicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Islam Antarabangsa (UIA)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="usmGrade.php" style="color:black;"><img src="usmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Sains Malaysia (USM)</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="umpGrade.php" style="color:black;"><img src="umpicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Malaysia Pahang (UMP)</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="umkGrade.php" style="color:black;"><img src="umkicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Malaysia Kelantan (UMK)</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="umtGrade.php" style="color:black;"><img src="umticon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Malaysia Terengganu (UMT)</a>
                    </div>
                </div>

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop2" type="button" class="btn btn-success btn-sm dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Private University</b>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop2" id="btn-drop2">
                    <a class="dropdown-item" href="uniklGrade.php" style="color:black;"><img src="uniklicon.ico"
                            alt="" height="20px" style="margin: 1px 3px 0 0">
                        Universiti Kuala Lumpur (Unikl)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="unitenGrade.php" style="color:black;"><img src="unitenicon.ico"
                            alt="" height="20px" style="margin: 1px 3px 0 0">
                        Universiti Tenaga Nasional (Uniten)</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="uniselGrade.php" style="color:black;"><img src="uniselicon.ico"
                            alt="" height="20px" style="margin: 1px 3px 0 0">
                        Universiti Selangor (Unisel)</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="kduGrade.php" style="color:black;"><img src="kduicon.ico"
                            alt="" height="20px" style="margin: 1px 3px 0 0">
                        KDU University</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="segiGrade.php" style="color:black;"><img src="segiicon.ico"
                            alt="" height="20px" style="margin: 1px 3px 0 0">
                        SEGI University</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Section-->
    <div class="ui inverted vertical footer segment" id="footer">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="twelve wide column" id="aadev">
                    <h4 class="ui inverted header">&#9400; All rights reserved 2019 by AA Dev</h4>
                    <p>This website is intended for use as a guide only. Contact your university or institution for
                        exact
                        determination.</p>
                </div>
            </div>
            <div class="ui inverted section divider"></div>
            <img src="Logo.png" class="ui centered mini image">
            <div class="ui horizontal inverted small divided link list">
                <a class="item" href="https://ahmadauf98.github.io/">AA Dev Website</a>
                <a class="item" href="#">Terms and Conditions</a>
                <a class="item" href="#">Privacy Policy</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>