<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Διαχειριστικο κεντρικης σελιδας</title>
  </head>

  <link rel="stylesheet" href="CSS/diahiristiko.css">

  <body>

<div class="wholepage">


    <header class="header">
        <h2 align="center"> Φορμα καταχωρησης στοιχειων εργου τεχνης </h2>
    </header>

    <script type="text/javascript">

    function chek(form){

      if (form.title.value == "") {
        alert("Συμπληρώστε πεδίο: Τίτλος έργου.");
        form.title.focus();
        return false;
      }

      if (form.artist_name.value == "") {
        alert("Συμπληρώστε το πεδίο: Όνομα καλιτέχνη.");
        form.artist_name.focus();
        return false;
      }


      if (form.artist_lastname.value == "") {
        alert("Συμπληρώστε το πεδίο: Επίθετο.");
        form.artist_lastname.focus();
        return false;
      }

      if (form.artist_lastname.value == form.artist_name.value) {
        alert("Το όνομα καλιτέχνη είναι ίδιο με του επιθέτου. Συμπληρώστε το πεδίο: Επίθετο.");
        form.artist_lastname.focus();
        return false;
      }

      if (form.date.value == "") {
        alert("Συμπληρώστε το πεδίο: Χρονολογία δημιουργίας.");
        form.date.focus();
        return false;
      }

      if (form.descr.value == "") {
        alert("Συμπληρώστε το πεδίο: Περιγραφή.");
        form.descr.focus();
        return false;
      }

      if (form.art_period.value == "") {
        alert("Συμπληρώστε το πεδίο: Καλιτεχνικο ρεύμα η κήνιμα.");
        form.art_period.focus();
        return false;
      }


      return true;
    }//chek

    </script>

<div>

      <form class="form" action="ptihiakistoihia.php" enctype="multipart/form-data" method="post" onsubmit="return chek(this);">

        <table border="0" align="center" width="10%">
          <tr>
            <td>Τίτλος έργου</td>
          </tr>

          <tr>
            <td><input type="text" name="title" size="30" maxlenght="30"> </td>
          </tr>

          <tr>
            <td>Όνομα καλιτέχνη</td>
          </tr>

          <tr>
            <td><input type="text" name="artist_name" size="30" maxlenght="30"></td></td>
          </tr>

          <tr>
            <td>Επίθετο</td>
          </tr>

          <tr>
            <td><input type="text" name="artist_lastname" size="30" maxlenght="30"></td></td>
          </tr>

          <tr>
            <td>Κατηγορία εργου</td>
          </tr>

          <tr>
            <td><select name="type">
        <option value="a">Πίνακας ζωγραφικής</option>
        <option value="b">Γλυπτό</option>
        <option value="c">Κολάζ</option>
        <option value="d">Σκίτσο</option>
        <option value="e">Σχέδιο</option>
        <option value="f">Ψηφιδοτό</option>
        <option value="g">Αγιογραφία της Δύσης</option>
        <option value="h">Βυζαντινή αγιογραφία</option>
        <option value="i">Τέχνη χειρόγραφου</option>
        <option value="j">Ξυλογραφία</option>
        <option value="k">Χαλκογραφία</option>
        <option value="l">Νωπογραφία</option>
        <option value="m">Λιθογραφία</option>
      </select>
          </tr>

          <tr>
            <td>Χρονολογια δημιουργιας</td>
          </tr>

          <tr>
            <td><input type="text" name="date" size="30" maxlenght="30"></td></td>
          </tr>


          <tr>
  <td>Περιγραφη</td>

         </tr>

         <tr>
           <td><textarea name="descr" rows="10" cols="90" maxlenght="500"></textarea></td>
         </tr>


          <tr>
            <td>Καλιτεχνικο ρευμα η κινημα</td>
          </tr>

          <tr>
            <td><input type="text" name="art_period" size="30" maxlenght="30"></td></td>
          </tr>

          <tr>
            <td>Εικόνα</td>
          </tr>

          <tr>
            <input type="hidden" name="size" value="200000">
            <td><input type="file" name="image"></td>
          </tr>

          <tr>
            <td><input type="submit" class="subbtn" value="Καταχωρηση"></td>
          </tr>

        </table>
      </form>


</div>
<div class="footer">
  <p>Hello</p>

</div>
</div>
  </body>
</html>﻿
