<!DOCTYPE html>
<html>
<head>
  <title>Corona Virus Check</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
  <header>
    <h1 class="judul">SELAMAT DATANG DI SELF CHECK COVID</h1>
  </header>

  <div class="menu">
    <ul>
      <li><a href="index.php?page=home">HOME</a></li>
      <li><a href="index.php?page=tentang">ABOUT</a></li>
      <li><a href="index.php?page=check">SELF CHECK</a></li>
    </ul>
  </div>

  <div class="badan">

    <?php
    if(isset($_GET['page'])){
      $page = $_GET['page'];

      switch ($page) {
        case 'home':
        include "halaman/home.php";
        break;
        case 'tentang':
        include "halaman/tentang.php";
        break;
        case 'check':
        include "halaman/check.php";
        break;
        default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
      }
    }else{
      include "halaman/home.php";
    }

    ?>

  </div>
</div>
</body>
</html>
