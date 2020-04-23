<?php
session_start();

if ( !isset($_SESSION['user_login']) ||
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {

	header('location:./../login.php');
	exit();
}
?>
<h2>Selamat datang <?=$_SESSION['nama'];?> Bagaimana keadaan anda ?</h2>

<a href="http://localhost/XR2/Tugasmerdeka/1/">COVID CHECK</a
