<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CGPA Calculator UKM</title>
  <meta name="description" content="">
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
  <link rel="stylesheet" href="style.css">
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143688410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143688410-1');
</script>
</head>

<body>
  <?php 
// define variables and set to empty values
$cgpa = $tch = 0;
$totalCredit = 0;
$totalGradePoints = 0;
$sgpa = $tgp = $ttcredit = $ttgp = $totalcgpa = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$cgpa = test_input($_POST["cgpa"]);
$tch = test_input($_POST["tch"]);

if (empty($_POST["grade1"])) {
    $grade1 = 0;
  } else {
    $grade1 = test_input($_POST["grade1"]);
  }

if (empty($_POST["ch1"])) {
    $ch1 = 0;
  } else {
    $ch1 = test_input($_POST["ch1"]);
  }

if (empty($_POST["grade2"])) {
    $grade2 = 0;
  } else {
    $grade2 = test_input($_POST["grade2"]);
  }

if (empty($_POST["ch2"])) {
    $ch2 = 0;
  } else {
    $ch2 = test_input($_POST["ch2"]);
  }

if (empty($_POST["grade3"])) {
    $grade3 = 0;
  } else {
    $grade3 = test_input($_POST["grade3"]);
  }

if (empty($_POST["ch3"])) {
    $ch3 = 0;
  } else {
    $ch3 = test_input($_POST["ch3"]);
  }

if (empty($_POST["grade4"])) {
    $grade4 = 0;
  } else {
    $grade4 = test_input($_POST["grade4"]);
  }

if (empty($_POST["ch4"])) {
    $ch4 = 0;
  } else {
    $ch4 = test_input($_POST["ch4"]);
  }

if (empty($_POST["grade5"])) {
    $grade5 = 0;
  } else {
    $grade5 = test_input($_POST["grade5"]);
  }

if (empty($_POST["ch5"])) {
    $ch5 = 0;
  } else {
    $ch5 = test_input($_POST["ch5"]);
  }

if (empty($_POST["grade6"])) {
    $grade6 = 0;
  } else {
    $grade6 = test_input($_POST["grade6"]);
  }

if (empty($_POST["ch6"])) {
    $ch6 = 0;
  } else {
    $ch6 = test_input($_POST["ch6"]);
  }

if (empty($_POST["grade7"])) {
    $grade7 = 0;
  } else {
    $grade7 = test_input($_POST["grade7"]);
  }

if (empty($_POST["ch7"])) {
    $ch7 = 0;
  } else {
    $ch7 = test_input($_POST["ch7"]);
  }

if (empty($_POST["grade8"])) {
    $grade8 = 0;
  } else {
    $grade8 = test_input($_POST["grade8"]);
  }

if (empty($_POST["ch8"])) {
    $ch8 = 0;
  } else {
    $ch8 = test_input($_POST["ch8"]);
  }

  $totalCredit = $ch1 + $ch2 + $ch3 + $ch4 + $ch5 + $ch6 + $ch7  + $ch8 ;
  $totalGradePoints = ($grade1*$ch1) + ($grade2*$ch2) + ($grade3*$ch3) + ($grade4*$ch4) + ($grade5*$ch5) + ($grade6*$ch6) + ($grade7*$ch7) + ($grade8*$ch8);
  $sgpa = $totalGradePoints/$totalCredit;
  $tgp = $tch * $cgpa;
  $ttcredit = $totalCredit + $tch;
  $ttgp = $tgp + $totalGradePoints;
  $totalcgpa = $ttgp/$ttcredit;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
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
            <a class="nav-link" href="landingpage1.php" class="item">Grade</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Public University
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="umCalculator.php" style="color:black;"><img src="umicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Malaya (UM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="upmCalculator.php" style="color:black;"><img src="upmicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Putra Malaysia (UPM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="uitmCalculator.php" style="color:black;"><img src="uitmicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Teknologi Mara (UITM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="utmCalculator.php" style="color:black;"><img src="utmicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Teknologi Malaysia (UTM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="ukmCalculator.php" style="color:black;"><img src="ukmicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Kebangsaan Malaysia (UKM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="uiaCalculator.php" style="color:black;"><img src="uiaicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Islam Antarabangsa (UIA)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="usmCalculator.php" style="color:black;"><img src="usmicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Sains Malaysia (USM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="umpCalculator.php" style="color:black;"><img src="umpicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Malaysia Pahang (UMP)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="umkCalculator.php" style="color:black;"><img src="umkicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Malaysia Kelantan (UMK)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="umtCalculator.php" style="color:black;"><img src="umticon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Malaysia Terengganu (UMT)</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Private University
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="utpCalculator.php" style="color:black;"><img src="utpicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Petronas (UTP)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="uniklCalculator.php" style="color:black;"><img src="uniklicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Kuala Lumpur (Unikl)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="taylorCalculator.php" style="color:black;"><img src="taylorsicon.ico"
                  alt="" height="20px" style="margin: 1px 3px 0 0">
                Taylor's University </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="unitenCalculator.php" style="color:black;"><img src="unitenicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Tenaga Nasional (Uniten)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="uniselCalculator.php" style="color:black;"><img src="uniselicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Selangor (Unisel)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="kduCalculator.php" style="color:black;"><img src="kduicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                KDU University</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="segiCalculator.php" style="color:black;"><img src="segiicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                SEGI University</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0" style="text-align:center;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Contact
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://www.facebook.com/ahmadauf.nasruddin" class="item" id="dropdown1">
                <i class="facebook icon"></i> Facebook</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://twitter.com/Auf2098" class="item" id="dropdown1">
                <i class="twitter icon"></i> Twitter</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://www.instagram.com/ahmadauf2098/" class="item" id="dropdown1">
                <i class="instagram icon"></i> Instagram</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="ui inverted grid ui container">
    <div class="sixteen wide column">
      <br>
      <img id="logo" src="ukmLogo.png" alt="" width="125px;">
      <h1>CGPA Calculator (Universiti Kebangsaan Malaysia)</h1>
    </div>
    <div class="two wide column">
    </div>
    <div class="twelve wide column">
      <form class="ui inverted form segment" id="Form" method="post"
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="CGPA">
          <h3>Current Cumulative GPA</h3>
          <p>P/s: If you are new student no need to fill this section.</p>
          <div class="two fields">
            <div class="field">
              <label>Cumulative GPA:</label>
              <input class="input" type="number" step="0.01" min="0.00" max="4.00" name="cgpa"
                value="<?php echo $cgpa;?>">
            </div>
            <div class="field">
              <label>Total Credit Hours:</label>
              <input class="input1" type="number" min="0" name="tch" value="<?php echo $tch;?>">
            </div>
          </div>
        </div><br>

        <div class="GPA">
          <h3>Subjects Taken This Semester</h3>
          <p>P/s: Fill Grade and Credit Hours Only.</p>

          <div class="two fields subject1" id="Subject">
            <div class="field" id="grade1">
              <label>Grade:</label>
              <select class="ui dropdown1" name="grade1" onchange="pFunction1()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points1">
              <label>Points:</label>
              <input class="field disabled" id="pInput1" type="text" name="credits1" placeholder="">
            </div>

            <div class="field" id="creditHours1">
              <label>Credit Hours:</label>
              <input id="ch1" type="number" min="0" name="ch1" onchange="gpFunction1()" value="<?php echo $ch1;?>">
            </div>

            <div class="field" id="gradePoints1">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput1" type="text" name="credits1" placeholder="">
            </div>
          </div>

          <div class="two fields subject2" id="Subject">
            <div class="field" id="grade2">
              <label>Grade:</label>
              <select class="ui dropdown2" name="grade2" onchange="pFunction2()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points2">
              <label>Points:</label>
              <input class="field disabled" id="pInput2" type="text" name="credits2" placeholder="">
            </div>

            <div class="field" id="creditHours2">
              <label>Credit Hours:</label>
              <input id="ch2" type="number" min="0" name="ch2" onchange="gpFunction2()" value="<?php echo $ch2;?>">
            </div>

            <div class="field" id="gradePoints2">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput2" type="text" name="credits2" placeholder="">
            </div>
          </div>

          <div class="two fields subject3" id="Subject">
            <div class="field" id="grade3">
              <label>Grade:</label>
              <select class="ui dropdown3" name="grade3" onchange="pFunction3()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points3">
              <label>Points:</label>
              <input class="field disabled" id="pInput3" type="text" name="credits3" placeholder="">
            </div>

            <div class="field" id="creditHours3">
              <label>Credit Hours:</label>
              <input id="ch3" type="number" min="0" name="ch3" onchange="gpFunction3()" value="<?php echo $ch3;?>">
            </div>

            <div class="field" id="gradePoints3">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput3" type="text" name="credits3" placeholder="">
            </div>
          </div>

          <div class="two fields subject4" id="Subject">
            <div class="field" id="grade4">
              <label>Grade:</label>
              <select class="ui dropdown4" name="grade4" onchange="pFunction4()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points4">
              <label>Points:</label>
              <input class="field disabled" id="pInput4" type="text" name="credits4" placeholder="">
            </div>

            <div class="field" id="creditHours4">
              <label>Credit Hours:</label>
              <input id="ch4" type="number" min="0" name="ch4" onchange="gpFunction4()" value="<?php echo $ch4;?>">
            </div>

            <div class="field" id="gradePoints2">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput4" type="text" name="credits4" placeholder="">
            </div>
          </div>

          <div class="two fields subject5" id="Subject">
            <div class="field" id="grade5">
              <label>Grade:</label>
              <select class="ui dropdown5" name="grade5" onchange="pFunction5()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points5">
              <label>Points:</label>
              <input class="field disabled" id="pInput5" type="text" name="credits5" placeholder="">
            </div>

            <div class="field" id="creditHours5">
              <label>Credit Hours:</label>
              <input id="ch5" type="number" min="0" name="ch5" onchange="gpFunction5()" value="<?php echo $ch5;?>">
            </div>

            <div class="field" id="gradePoints5">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput5" type="text" name="credits5" placeholder="">
            </div>
          </div>

          <div class="two fields subject6" id="Subject">
            <div class="field" id="grade6">
              <label>Grade:</label>
              <select class="ui dropdown6" name="grade6" onchange="pFunction6()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points6">
              <label>Points:</label>
              <input class="field disabled" id="pInput6" type="text" name="credits6" placeholder="">
            </div>

            <div class="field" id="creditHours6">
              <label>Credit Hours:</label>
              <input id="ch6" type="number" min="0" name="ch6" onchange="gpFunction6()" value="<?php echo $ch6;?>">
            </div>

            <div class="field" id="gradePoints6">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput6" type="text" name="credits6" placeholder="">
            </div>
          </div>

          <div class="two fields subject7" id="Subject">
            <div class="field" id="grade7">
              <label>Grade:</label>
              <select class="ui dropdown7" name="grade7" onchange="pFunction7()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points7">
              <label>Points:</label>
              <input class="field disabled" id="pInput7" type="text" name="credits7" placeholder="">
            </div>

            <div class="field" id="creditHours7">
              <label>Credit Hours:</label>
              <input id="ch7" type="number" min="0" name="ch7" onchange="gpFunction7()" value="<?php echo $ch7;?>">
            </div>

            <div class="field" id="gradePoints7">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput7" type="text" name="credits7" placeholder="">
            </div>
          </div>

          <div class="two fields subject8" id="Subject">
            <div class="field" id="grade8">
              <label>Grade:</label>
              <select class="ui dropdown8" name="grade8" onchange="pFunction8()">
                <option value="">Select</option>
                <option value="4.00" <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                <option value="3.67" <?php if (isset($grade) && $grade=="3.67") echo "checked";?>>A-</option>
                <option value="3.33" <?php if (isset($grade) && $grade=="3.33") echo "checked";?>>B+</option>
                <option value="3.00" <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                <option value="2.67" <?php if (isset($grade) && $grade=="2.67") echo "checked";?>>B-</option>
                <option value="2.33" <?php if (isset($grade) && $grade=="2.33") echo "checked";?>>C+</option>
                <option value="2.00" <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                <option value="1.67" <?php if (isset($grade) && $grade=="1.67") echo "checked";?>>C-</option>
                <option value="1.33" <?php if (isset($grade) && $grade=="1.33") echo "checked";?>>D+</option>
                <option value="1.00" <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                <option value="0.00" <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
              </select>
            </div>

            <div class="field" id="points8">
              <label>Points:</label>
              <input class="field disabled" id="pInput8" type="text" name="credits8" placeholder="">
            </div>

            <div class="field" id="creditHours8">
              <label>Credit Hours:</label>
              <input id="ch8" type="number" min="0" name="ch8" onchange="gpFunction8()" value="<?php echo $ch8;?>">
            </div>

            <div class="field" id="gradePoints8">
              <label>Grade Points:</label>
              <input class="field disabled" id="gpInput8" type="text" name="credits8" placeholder="">
            </div>
          </div>

        </div>
        <input class="ui green submit button" id="button" type="submit" name="submit" value="Calculate" />
        <input class="ui grey submit button" id="button" type="submit" name="reset" value="Reset" onclick="clearForm()" />
      </form>

      <?php
    if (empty($totalCredit)|| empty($totalGradePoints)) {
    echo "";
    }
    else if (empty($cgpa)|| empty($tch) || $cgpa === 0 || $tch === 0) {
    echo "<b>Results:</b>"."<br><br>";
    
    echo "This Semester:"."<br>";
    echo "Total Credits: ".$totalCredit."<br>";
    echo "Total Grade Points: ".$totalGradePoints."<br>";
    echo "This Semester GPA: ".(round($sgpa,2));
  } else {
    echo "<b>Results:</b>"."<br><br>";

    echo "Previous Semester(s):"."<br>";
    echo "Credits: ".$tch."<br>";
    echo "Grade Points: ".$tgp."<br>";
    echo "Initial CGPA: ".$cgpa."<br><br>";
    

    echo "This Semester:"."<br>";
    echo "Credits: ".$totalCredit."<br>";
    echo "Grade Points: ".$totalGradePoints."<br>";
    echo "This Semester GPA: ".(round($sgpa,2))."<br><br>";

    echo "Total:"."<br>";
    echo "Total Credits: ".$ttcredit."<br>";
    echo "Total Grade Points: ".$ttgp."<br>";
    echo "CGPA: ".(round($totalcgpa,2))."<br>";

  }
?>
      <div id="course-info">
        <h3>This grade conversion table is used at Universiti Kebangsaan Malaysia (UKM)</h3>
        <table class="ui inverted fixed single line celled table ">
          <thead>
            <tr>
              <th>Letter</th>
              <th>Marks</th>
              <th>Grade Point</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Letter">A</td>
              <td data-label="Marks">85-100</td>
              <td data-label="Grade Points">4.00</td>
            </tr>
            <tr>
              <td data-label="Letter">A-</td>
              <td data-label="Marks">75-84</td>
              <td data-label="Grade Points">3.67</td>
            </tr>
            <tr>
              <td data-label="Letter">B+</td>
              <td data-label="Marks">65-74</td>
              <td data-label="Grade Points">3.33</td>
            </tr>
            <tr>
              <td data-label="Letter">B</td>
              <td data-label="Marks">60-64</td>
              <td data-label="Grade Points">3.00</td>
            </tr>
            <tr>
              <td data-label="Letter">B-</td>
              <td data-label="Marks">55-59</td>
              <td data-label="Grade Points">2.67</td>
            </tr>
            <tr>
            <td data-label="Letter">C+</td>
            <td data-label="Marks">50-54</td>
            <td data-label="Grade Points">2.33</td>
            </tr>
            <tr>
            <td data-label="Letter">C</td>
            <td data-label="Marks">45-49</td>
            <td data-label="Grade Points">2.00</td>
            </tr>
            <tr>
            <td data-label="Letter">C-</td>
            <td data-label="Marks">40-44</td>
            <td data-label="Grade Points">1.67</td>
            </tr>
            <tr>
            <td data-label="Letter">D+</td>
            <td data-label="Marks">35-39</td>
            <td data-label="Grade Points">1.33</td>
            </tr>
            <tr>
            <td data-label="Letter">D</td>
            <td data-label="Marks">30-34</td>
            <td data-label="Grade Points">1.00</td>
            </tr>
            <tr>
            <td data-label="Letter">E</td>
            <td data-label="Marks">0-29</td>
            <td data-label="Grade Points">0.00</td>
            </tr>
          </tbody>
        </table><div>
        <div class="ui centered mobile leaderboard test ad" data-text="Mobile Leaderboard"></div>
        <div class="ui centered grid ui container" id="shareButton">
            <a
              href="https://www.facebook.com/sharer/sharer.php?u=https://iptcgpacalculator.herokuapp.com"><button
                id="button1" class="ui facebook button">
                <i class="facebook icon"></i>
                Share
              </button></a>
            <a
              href="https://twitter.com/intent/tweet?text=Hello guys, check this out: https://iptcgpacalculator.herokuapp.com"><button
                id="button1" class="ui twitter button">
                <i class="twitter icon"></i>
                Tweet
              </button></a>
            <a href="http://www.reddit.com/submit?url=https://iptcgpacalculator.herokuapp.com"><button
                id="button1" class="ui youtube button">
                <i class="reddit icon"></i>
                Share
              </button></a>
            <a
              href="https://wa.me/whatsappphonenumber/?text=Hello guys, check this out: https://iptcgpacalculator.herokuapp.com"><button
                id="button1" class="ui whatsapp button" style="background: green; color:white;">
                <i class="whatsapp icon"></i>
                Share
              </button></a>
            <a href="https://www.linkedin.com/cws/share?url=https://iptcgpacalculator.herokuapp.com"><button
                id="button1" class="ui linkedin button">
                <i class="linkedin icon"></i>
                Share
              </button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="two wide column"></div>
  </div>



  <div class="ui inverted vertical footer segment" id="footer">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Public University</h4>
          <div class="ui inverted link list">
            <a href="umCalculator.php" class="item">Universiti Malaya</a>
            <a href="upmCalculator.php" class="item">Universiti Putra Malaysia</a>
            <a href="uitmCalculator.php" class="item">Universiti Teknologi Mara</a>
            <a href="utmCalculator.php" class="item">Universiti Teknologi Malaysia</a>
            <a href="ukmCalculator.php" class="item">Universiti Kebangsaan Malaysia</a>
            <a href="uiaCalculator.php" class="item">Universiti Islam Antarabangsa</a>
            <a href="usmCalculator.php" class="item">Universiti Sains Malaysia</a>
            <a href="umpCalculator.php" class="item">Universiti Malaysia Pahang</a>
            <a href="umkCalculator.php" class="item">Universiti Malaysia Kelantan</a>
            <a href="umtCalculator.php" class="item">Universiti Malaysia Terengganu</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Private University</h4>
          <div class="ui inverted link list">
            <a href="utpCalculator.php" class="item">Universiti Teknologi Petronas</a>
            <a href="uniklCalculator.php" class="item">Universiti Kuala Lumpur</a>
            <a href="taylorCalculator.php" class="item">Taylors University</a>
            <a href="unitenCalculator.php" class="item">Universiti Tenaga Nasional</a>
            <a href="uniselCalculator.php" class="item">Universiti Selangor</a>
            <a href="kduCalculator.php" class="item">KDU University</a>
            <a href="segiCalculator.php" class="item">SEGI University</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Social Media</h4>
          <div class="ui inverted link list">
            <a href="https://www.facebook.com/ahmadauf.nasruddin" class="item">
              <i class="facebook icon"></i> Facebook</a>
            <a href="https://twitter.com/Auf2098" class="item">
              <i class="twitter icon"></i> Twitter</a>
            <a href="https://www.instagram.com/ahmadauf2098/" class="item">
              <i class="instagram icon"></i> Instagram</a>
            <a href="https://www.linkedin.com/in/ahmad-auf-b9aa09185/" class="item">
              <i class="linkedin icon"></i> LinkedIn</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">&#9400; All rights reserved 2019 by AA Dev</h4>
          <p>This website is intended for use as a guide only. Contact your university or institution for exact
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

  <a href="#" id="scroll" style="display: none;"><span></span></a>
  <script src="js.js"></script>

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