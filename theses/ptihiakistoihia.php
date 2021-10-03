<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Καταχωρηση</title>
</head>

<link rel="stylesheet" href="CSS/diahiristiko.css">

<body>
  <h2 class="header" align="center">Τα στοιχεια που καταχωρησατε ειναι τα παρακατω: </h2>

  <?php
  $title=$_POST['title'];
  $artist_name=$_POST['artist_name'];
  $artist_lastname=$_POST['artist_lastname'];
  $type=$_POST['type'];
  $date=$_POST['date'];
  $descr=$_POST['descr'];
  $art_period=$_POST['art_period'];


  echo '<table width=40% align=center>';

  echo '<tr><td>Τιτλος εργου:</td><td>'.$title.'</td></tr>';
  echo '<tr><td>Ονομα καλιτεχνη:</td><td>'.$artist_name.'</td></tr>';
  echo '<tr><td>Επιθετο:</td><td>'.$artist_lastname.'</td></tr>';

  if ($type=='a')

  echo'<tr><td>Κατηγορια εργου</td><td>Πινακας ζωγραφικης</td></tr>';

  elseif ($type=='b')

    echo'<tr><td>Κατηγορια εργου</td><td>Γλυπτο</td></tr>';

  elseif ($type=='c')

    echo'<tr><td>Κατηγορια εργου</td><td>Κολαζ</td></tr>';

  elseif ($type=='d')

    echo'<tr><td>Κατηγορια εργου</td><td>Σκιτσο</td></tr>';

    elseif ($type=='e')

      echo'<tr><td>Κατηγορια εργου</td><td>Σχεδιο</td></tr>';

      elseif ($type=='f')

        echo'<tr><td>Κατηγορια εργου</td><td>Ψηφιδοτο</td></tr>';

        elseif ($type=='g')

          echo'<tr><td>Κατηγορια εργου</td><td>Αγιογραφια της Δησης</td></tr>';

          elseif ($type=='h')

            echo'<tr><td>Κατηγορια εργου</td><td>Βυζαντινη αγιογραφια</td></tr>';

            elseif ($type=='i')

              echo'<tr><td>Κατηγορια εργου</td><td>Τεχνη χειρογραφου</td></tr>';

              elseif ($type=='j')

                echo'<tr><td>Κατηγορια εργου</td><td>Ξυλογραφια</td></tr>';

                elseif ($type=='k')

                  echo'<tr><td>Κατηγορια εργου</td><td>Χαλκογραφια</td></tr>';

                  elseif ($type=='l')

                    echo'<tr><td>Κατηγορια εργου</td><td>Νωπογραφια</td></tr>';

                    elseif ($type=='m')

                      echo'<tr><td>Κατηγορια εργου</td><td>Λιθογραφια</td></tr>';


                      if ($type=='a') {
                        $real='Πίνακας';
                      }
                      elseif ($type=='b') {
                        $real='Γλυπτό';
                      }
                      elseif ($type=='c') {
                        $real='Κολλάζ';
                      }
                      elseif ($type=='d') {
                        $real='Σκίτσο';
                      }
                      elseif ($type=='e') {
                        $real='Σχέδιο';
                      }
                      elseif ($type=='f') {
                        $real='Ψηφιδωτό';
                      }
                      elseif ($type=='g') {
                        $real='Αγιογραφία Δύσης';
                      }
                      elseif ($type=='h') {
                        $real='Βυζαντινή Αγιογραφία';
                      }
                      elseif ($type=='i') {
                        $real='Τέχνη χειρόγραφου';
                      }
                      elseif ($type=='j') {
                        $real='Ξυλογραφία';
                      }
                      elseif ($type=='k') {
                        $real='Χαλκογραφία';
                      }
                      elseif ($type=='l') {
                        $real='Νωπογραφία';
                      }
                      elseif ($type=='m') {
                        $real='Λιθογραφία';
                      }


                      $target_file ="images/" . basename($_FILES["image"]["name"]);
                      $img  = basename($_FILES['image']['name']);
                      if (move_uploaded_file( $_FILES["image"]["tmp_name"], $target_file)) {
                              echo "The file ". $img. " is in the file.<br>";
                              echo $_FILES['image']['size'];

                          } else {
                              echo "Sorry, there was an error uploading your file.<br>";
                              echo $_FILES['image']['error'];

                          }
   $dir = "images";

                      echo '<tr><td>Χρονολογια δημιουργιας του εργου</td><td>'.$date.'</td></tr>';
                      echo '<tr><td>Περιγραφη:</td><td>'.$descr.'</td></tr>';


                      echo '<tr><td>Καλιτεχνικο ρευμα η κινημα</td><td>'.$art_period.'</td></tr>';
                      $datetime = date('H:i, d-m-Y');
                      echo '<tr><td>Η αποθηκευση εγινε</td><td>'.$datetime.'</td></tr>';
                      echo '<tr><td><img src=" '.$dir.'/'.$img.'"></td></tr>';
                      echo '</table>';





          $db = mysqli_connect('localhost', 'root', '', 'ptihiaki');
            if (mysqli_connect_errno())
          {
            echo 'Error: could not connect to database';
          }

$q="insert into ergo (title, atrtistname, atrtistlastname, type, date, descr, art_period, date_time) values ('$title', '$artist_name', '$artist_lastname', '$real', $date, '$descr', '$art_period', '$datetime') ";
if (mysqli_query($db, $q)) {
  echo "Τα στοιχεια καταχωρήθηκαν στη βαση επιτυχώς. <br>";
}else {
  echo "Τα στοιχεια δεν αποθηκευτηκαν στν βαση. <br>";
}

$q="insert into image (imname) value ('$img')";
if (mysqli_query($db, $q)) {
  echo "Η εικόνα καταχωρήθηκε στη βαση επιτυχώς. <br>";
}else {
  echo "Η εικόνα δεν καταχωρήθηκε  στν βαση. <br>";
}
?>



<a href="http://localhost/theses/ptihiakidiahiristiko.php">Επιστροφη</a>

</body>
<html>
