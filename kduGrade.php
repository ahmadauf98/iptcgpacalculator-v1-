<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Subject Grade KDU</title>
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
$pfe1 = $tme1 = $wpc1 = $tm1 = $tmc1 = $tg1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$pfe1 = test_input($_POST["pfe1"]);
$tme1 = test_input($_POST["tme1"]);
$wpc1 = test_input($_POST["wpc1"]);
$tm1 = test_input($_POST["tm1"]);
$tmc1 = test_input($_POST["tmc1"]);
$tg1 = test_input($_POST["tg1"]);

$totalPercentage = $pfe1 + $wpc1;
$carrymark = ($tm1/$tmc1) * $wpc1;
$examination = $tg1-$carrymark;
$targetmark = ($examination/$pfe1)*$tme1;

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
            <a class="nav-link" href="landingpage.php" class="item">Calculator</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Public University
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="umGrade.php" style="color:black;"><img src="umicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Malaya (UM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="upmGrade.php" style="color:black;"><img src="upmicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Putra Malaysia (UPM)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="uitmGrade.php" style="color:black;"><img src="uitmicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
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
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Private University
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="uniklGrade.php" style="color:black;"><img src="uniklicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Kuala Lumpur (Unikl)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="unitenGrade.php" style="color:black;"><img src="unitenicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Tenaga Nasional (Uniten)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="uniselGrade.php" style="color:black;"><img src="uniselicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                Universiti Selangor (Unisel)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="kduGrade.php" style="color:black;"><img src="kduicon.ico" alt=""
                  height="20px" style="margin: 1px 3px 0 0">
                KDU University</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="segiGrade.php" style="color:black;"><img src="segiicon.ico" alt=""
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
      <img id="logo" src="kduLogo.png" alt="" width="125px;">
      <h1>Grade Target (KDU University)</h1>
    </div>
    <div class="two wide column">
    </div>
    <div class="twelve wide column">
      <form class="ui inverted form segment" id="Form" method="post"
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>P/s: Please fill all fields.Thank You!</p>
        <div class="Examination">
          <h3>Final Exam</h3>

          <div class="two fields">

            <div class="field">
              <label>Weightage Percentage:</label>
              <input class="input" type="number" min="1" max="100" name="pfe1" placeholder="Weightage Percentage"
                value="<?php echo $pfe1;?>">
            </div>

            <div class="field">
              <label>Total Marks:</label>
              <input class="input1" type="number" min="1" max="100" name="tme1" placeholder="Total Marks"
                value="<?php echo $tme1;?>">
            </div>
          </div>
        </div><br>

        <div class="Carrymark">
          <h3>Carrymark</h3>
          <p>P/s: If you are only get carrymark by grade, please assume your mark based on minimum mark in table below and Total Marks: 100.</p>
          <div class="two fields">

            <div class="field">
              <label>Weightage Percentage:</label>
              <input class="input2" type="number" min="0" max="100" name="wpc1" placeholder="Weightage Percentage"
                value="<?php echo $wpc1;?>">
            </div>

            <div class="field">
              <label>Marks:</label>
              <input class="input3" type="number" min="1" max="100" name="tm1" placeholder="Marks"
                value="<?php echo $tm1;?>">
            </div>

            <div class="field">
              <label>Total Marks:</label>
              <input class="input4" type="number" min="1" max="100" name="tmc1" placeholder="Total Marks"
                value="<?php echo $tmc1;?>">
            </div>



          </div>
        </div><br>

        <div class="Final Subject">
          <h3>Grade Target</h3>

          <div class="field">

            <div class="field">
              <label>Grade:</label>
              <select class="ui dropdown1" name="tg1">
                <option value="">Select</option>
                <option value="80" <?php if (isset($tg1) && $tg1=="80") echo "checked";?>>A</option>
                <option value="70" <?php if (isset($tg1) && $tg1=="70") echo "checked";?>>B+</option>
                <option value="65" <?php if (isset($tg1) && $tg1=="65") echo "checked";?>>B</option>
                <option value="55" <?php if (isset($tg1) && $tg1=="55") echo "checked";?>>C+</option>
                <option value="50" <?php if (isset($tg1) && $tg1=="50") echo "checked";?>>C</option>
              </select>
            </div>


          </div>
        </div><br>


        <input class="ui green submit button" id="button" type="submit" name="submit" value="Calculate" />
        <input class="ui grey submit button" id="button" type="submit" name="reset" value="Reset"
          onclick="clearForm()" />
      </form>

      <?php
//Grade Transformation
if ($tg1 == 80) {
  $grade = 'A';
}
elseif ($tg1 == 70) {
  $grade = 'B+';
}
elseif ($tg1 == 65) {
  $grade = 'B';
}
elseif ($tg1 == 55) {
  $grade = 'C+';
}
else{
  $grade = 'C-';
}


//Print Output
    if ($pfe1 == null && $tme1 == null && $wpc1 == null && $tm1 == null && $tmc1 == null && $tg1 == null) {
      echo "";
    }
    else if ($pfe1 == null || $tme1 == null || $wpc1 == null || $tm1 == null || $tmc1 == null || $tg1 == null) {
      echo "Please fill all fields. Thank you!";
    }
    else if ($totalPercentage === 100) {
      if ($examination > $tme1) {
        echo "Result:"."<br><br>";
        echo "Sorry, with your current carrymark you wont able to get ".$grade.". Please target grade below ".$grade.". Thank you.";
      }
      else{
        echo "Result:"."<br><br>";
        echo "In order to get ".$grade.", you need to score at least ".$targetmark." out of ".$tme1." in your final exam. Goodluck!";
      }
    }
    else {
      echo "Please make sure sum both weightage is 100%.";
    }
 
?>
      <div id="course-info">
        <h3>This grade conversion table is used at KDU University</h3>
        
        <table class="ui inverted fixed single line celled table ">
          <thead>
            <tr>
              <th>Letter</th>
              <th>Marks</th>
              <th>Minimum Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Letter">A</td>
              <td data-label="Marks">80-100</td>
              <td data-label="Minimum Marks">80</td>
            </tr>
            <tr>
              <td data-label="Letter">B+</td>
              <td data-label="Marks">70-79</td>
              <td data-label="Minimum Marks">70</td>
            </tr>
            <tr>
              <td data-label="Letter">B</td>
              <td data-label="Marks">65-69</td>
              <td data-label="Minimum Marks">65</td>
            </tr>
            <tr>
              <td data-label="Letter">C+</td>
              <td data-label="Marks">55-64</td>
              <td data-label="Minimum Marks">55</td>
            </tr>
            <tr>
            <td data-label="Letter">C</td>
            <td data-label="Marks">50-54</td>
            <td data-label="Minimum Marks">50</td>
            </tr>
          </tbody>
        </table>

        <div>
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
            <a href="umGrade.php" class="item">Universiti Malaya</a>
            <a href="upmGrade.php" class="item">Universiti Putra Malaysia</a>
            <a href="uitmGrade.php" class="item">Universiti Teknologi Mara</a>
            <a href="utmGrade.php" class="item">Universiti Teknologi Malaysia</a>
            <a href="ukmGrade.php" class="item">Universiti Kebangsaan Malaysia</a>
            <a href="uiaGrade.php" class="item">Universiti Islam Antarabangsa</a>
            <a href="usmGrade.php" class="item">Universiti Sains Malaysia</a>
            <a href="umpGrade.php" class="item">Universiti Malaysia Pahang</a>
            <a href="umkGrade.php" class="item">Universiti Malaysia Kelantan</a>
            <a href="umtGrade.php" class="item">Universiti Malaysia Terengganu</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Private University</h4>
          <div class="ui inverted link list">
            <a href="uniklGrade.php" class="item">Universiti Kuala Lumpur</a>
            <a href="unitenGrade.php" class="item">Universiti Tenaga Nasional</a>
            <a href="uniselGrade.php" class="item">Universiti Selangor</a>
            <a href="kduGrade.php" class="item">KDU University</a>
            <a href="segiGrade.php" class="item">SEGI University</a>
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
  <script src="js1.js"></script>

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