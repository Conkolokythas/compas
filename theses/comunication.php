<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--Rights of this code belongs to W3schools -->
    <title>Comunication</title>
  </head>
  <body>

    <div id="head">
      <a class="btn" href="index.php" style="text-decoration: none;">Αρχική</a>
     <a class="btn" href="info.php" style="text-decoration: none;">Πληροφορίες</a>
     <a class="btn" href="#" style="text-decoration: none;">Έρευνα</a>
     <a class="btn" href="comunication.php" style="text-decoration: none;">Επικοινωνία</a>

    </div>


    <div class="page">


      <div class="infotxt">


      <h3 style="margin: 10px;">Στείλτε μας τις δικές σας "λέξεις κλείδια" για τα έργα που επισκευτήκατε και βοηθήστε για την βέλτηστη λειτουργία του ClikArt.</h3>
      <p>Με τη βοήθια σας το ClikArt μπορεί να γίνει πιο εύχρηστο και πιο αποτελεσματικό και να δείνει καλύτερα αποτελέσματα στους χρήστες του.</p>


      <form class="comfor" action="#" method="post" onsubmit="return chek(this);">
        <table>

          <tr>
            <td>Όνομα έργου</td>
          </tr>
          <tr>
            <td> <input type="text" name="object" maxlength="50"> </td>
          </tr>
          <tr>
            <td>Λέξεις κλειδιά</td>
          </tr>
          <tr>
            <td> <input type="text" name="keywords"> </td>
          </tr>
          <tr>
            <td>Παρατηρίσεις</td>
          </tr>
          <tr>
            <td> <textarea name="obs" rows="8" cols="80"></textarea> </td>
          </tr>
          <tr>
            <td>Όνομα αποστολέα</td>
          </tr>
          <tr>
            <td> <input type="text" name="name" maxlength="30"> </td>
          </tr>
          <tr>
            <td>Email</td>
          </tr>
          <tr>
            <td> <input type="email" name="em" maxlength="50" > </td>
          </tr>

          <tr>
            <td> <input type="submit" name="sub"  value="Αποστολη"> </td>
          </tr>
        </table>
      </form>

      <script type="text/javascript">
        function chek(form){

          var i = 0;
          if (form.obs.value == "") {
            i+1;
          }

          if (form.name.value == "") {
            i+1;
          }

          if (form.em.value == "") {
            i+1;
          }
          var err = error;
          switch (i) {
            case i==1:
            return document.write("<div class=" + err+  "><tr><td>Πρέπει να συμπληρώσετε το πεδίο Παρατηρίσεις.</td></tr></div>");
              break;
              case i==2:
              return document.write("<div class=" + err+  "><tr><td>Πρέπει να συμπληρώσετε το πεδίο Παρατηρίσεις</td></tr><tr><td>Πρέπει να συμπληρώσετε το πεδίο Όνομα αποστολέα.</td></tr></div>");
                break;
                case i==3:
                  return document.write("<div class=" + err+  "><tr><td>Πρέπει να συμπληρώσετε το πεδίο Παρατηρίσεις</td></tr><tr><td>Πρέπει να συμπληρώσετε το πεδίο Όνομα αποστολέα</td></tr><tr><td>Πρέπει να συμπληρώσετε το πεδίο Email.</td></tr></div>");
                  break;
            default:
            break;
          }

        }//chek
      </script>
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

  </body>
</html>﻿
