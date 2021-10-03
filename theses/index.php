<!DOCTYPE html>
<html lang="el" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--Rights of this code belongs to W3schools -->
    <title>ClikArt</title>
  </head>
  <body>


<div id="head">
  <a class="btn" href="index.php" style="text-decoration: none;">Αρχική</a>
 <a class="btn" href="info.php" style="text-decoration: none;">Πληροφορίες</a>
 <a class="btn" href="#" style="text-decoration: none;">Έρευνα</a>
 <a class="btn" href="comunication.php" style="text-decoration: none;">Επικοινωνία</a>

</div>

</div>


      <div class="sec1">

        <img draggable="false" class="mySlides w3-animate-fading" src="siteImages/The_Creation_of_Adam.jpg">
        <img draggable="false" class="mySlides w3-animate-fading" src="siteImages/el-greco.jpg">
        <img draggable="false" class="mySlides w3-animate-fading" src="siteImages/maxresdefault.jpg">
        <img draggable="false" class="mySlides w3-animate-fading" src="siteImages/cri_000000223805.jpg">

        <script type="text/javascript">
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 9000);
        }
        </script>

      <div class="searchform">
        <form class="" action="searchres.php" method="post">
          <input type="text" name="search" size="20" maxlenght="30">
          <input type="submit" name="submit" value="Search">
        </form>
        <p align="center">Search everything you want</p>
      </div>
    </div>




<div class="page">

<div class="intro">
<h1>Όλη η τέχνη σε μια σελίδα</h1>
<p>Αναζητήστε οποιοδήποτε έργο τέχνης από την Αναγέννηση έως σήμερα.</p>
<p>Δεν χρειάζεται να γνωρίζετε το όνομα του έργου που ψάχνετε.</p>
<p> Αρκεί μόνο να γράψετε μια λέξη κλειδί.</p>
</div>

  <div class="intro">
    <h1>Βασισμένο στο βιβλίο του E.H. Gombrich.</h1>

    <div class="introsec">

      <p>Οι πληροφορίες των έργων προέρχονται από το παρόν σύγγραμμα που είναι ορόσημο στην Ιστορία της τέχνης. <br>
      Όλα τα έργα συνοδέυονται από τεκμηριωμένα κείμενα περιγραφών που έχουν αντληθεί από αυτό το βιβίο.</p>


        <img src="siteImages/xroniko tis texnis.JPG" alt="Chronikles of Art">



</div>
  </div>




</div>


<div id="footer">
  <div class="lastsect">
    <h4>Σύνδεσμοι</h4>
    <table>

      <tr>
        <td><a target="_blank" href="http://www.culture.upatras.gr/cms/">Τμήμα Διαχείρισης Πολιτισμικού Περιβάλλοντος και Νέων Τεχνολογιών  </a></td>
      </tr>

    </table>
  </div>
    <div class="lastsect">

      <table>
        <tr>
          <td><a href="index.php">Αρχική</a></td>
        </tr>

        <tr>
          <td><a href="info.php">Πληροφορίες</a></td>
        </tr>

        <tr>
          <td><a href="#">Έρευνα</a></td>
        </tr>

        <tr>
          <td><a href="comunication.php">Επικοινωνία</a></td>
        </tr>
      </table>

    </div>
    <div class="lastsect">
      <h4>Επικοινωνία</h4>
      <table>
        <tr>
          <td>conkolokythas96@gmail.com</td>
        </tr>
      </table>
    </div>

    <div class="lastsect">
      <a target="_blank" href="https://www.upatras.gr/el"> <img src="siteImages/University_of_Patras_(logo).png" alt="University" height="150" width="340"> </a>
    </div>

    <div id="tag">
      &#169; &#922;&#969;&#957;&#963;&#964;&#945;&#957;&#964;&#943;&#957;&#959;&#962; &#922;&#959;&#955;&#959;&#954;&#965;&#952;&#940;&#962;
    </div>
</div>
<!--end of footer-->
  </body>
</html>
