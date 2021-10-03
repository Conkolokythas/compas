<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/main.css">
    <title></title>
  </head>
  <body>



    <div id="head">
      <a class="btn" href="index.php" style="text-decoration: none;">Αρχική</a>
     <a class="btn" href="info.php" style="text-decoration: none;">Πληροφορίες</a>
     <a class="btn" href="#" style="text-decoration: none;">Έρευνα</a>
     <a class="btn" href="comunication.php" style="text-decoration: none;">Επικοινωνία</a>

    </div>

    <div class="page">
    <?php

    $search=$_POST['search'];
    $db=mysqli_connect('localhost', 'root', '', 'ptihiaki');
    if (mysqli_connect_errno())
    {
      echo 'Error: could not connect to database';
    }

    if (isset($_POST['submit'])) {

      $query="select ergo.title, ergo.atrtistname, ergo.atrtistlastname, ergo.descr, ergo.art_period, image.imname FROM ergo inner join image on ergo.id = image.id WHERE title like '%".$search."%' or atrtistname like '%".$search."%' or atrtistlastname like '%".$search."%' or type like '%".$search."%' or date like '%".$search."%' or descr like '%".$search."%' or art_period like '%".$search."%' order by title";
      $result=mysqli_query($db, $query);
      $num_results=mysqli_num_rows($result);

      $dir = "images";
      if ($num_results == 0) {
        echo '<div> <h3>No resaults</h3> </div>';
      }

      for ($i=0; $i< $num_results; $i++) {


        $row=mysqli_fetch_row($result);

        echo '<div class="results">


          <img src="'.$dir.'/'.$row[5].'" alt="element"> <div class="info"><p><b>'.$row[0].' </b><br><b>'.$row[1].' '.$row[2].'</b> <br>'.$row[3].' <br>'.$row[4].'</p></div>


        </div>';

      }//for

    }//isset

   ?>

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
</html>
