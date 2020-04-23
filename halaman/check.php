<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkup Mode</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
</head>
<body>
</div>
<div class="header">
  <div class="bayangan">
  </div>
  <h1 align="center">COVID-19 CHECK</h1>
</div>
<div class="about">
  <br>
  <div class="container">
    <form action="" method="POST">
      <div class="col-10 label">
        <label for="">1. Apakah intensitas keluar rumah anda bisa dikatakan sering?</label>
        <br>
        <input type="radio" name="selection1" value="yes1">
        <label for="yes1">YES</label>
        <br>
        <input type="radio" name="selection1" value="no1">
        <label for="no1">NO</label>
      </div>
      <div class="col-10 label">
        <label for="">2. Apakah anda sering berada di kerumunan?</label>
        <br>
        <input type="radio" name="selection2" value="yes2">
        <label for="yes2">YES</label>
        <br>
        <input type="radio" name="selection2" value="no2">
        <label for="no2">NO</label>
      </div>
      <div class="col-10 label">
        <label for="">3. Apakah anda merasa demam setelah bepergian keluar rumah?</label>
        <br>
        <input type="radio" name="selection3" value="yes3">
        <label for="yes3">YES</label>
        <br>
        <input type="radio" name="selection3" value="no3">
        <label for="no3">NO</label>
      </div>
      <div class="col-10 label">
        <label for="">4. Berapa suhu tubuh anda?</label>
        <br><input type="text" name="suhu" placeholder="celcius"> <br>
      </div>
      <div id="Submit">
        <br>
        <th col-3 col-s-6 bg-blue>
          <td rows="1" cols="110"></td>
        </th>
          <?php
          if(isset($_POST['suhu'])) {
            $suhu = $_POST['suhu'];
            if ($suhu >=38 ){
              echo "Anda memiliki kemungkinan positif corona,segera periksakan diri Anda";
            }else{
              echo "Anda termasuk negatif, jaga diri anda dan kurangi intensitas kegiatan diluar rumah!";
            }
          }
          ?>
      </div>
      <div class="col-10 label">
        <label>
          <br><input type="submit" name="Submit" value="Submit" class = "btn btn-success"><br>
        </label>
      </div>
    </form>

  </div>
</div>
</div>
</body>
</html>
