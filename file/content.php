<?php
	error_reporting(0);
	$page=$_GET ['page'];
	switch ($page)
	{
	 case "1"; include "home.php"; break;

 	 /** Data login */
	 case "in"; include "login.php"; break;
	 
	  /** Data logout */
	 case "out"; include "logout.php"; break;

	 /** Data User */
	 case "usr"; include "user.php"; break;
	 case "reg"; include "daftar.php"; break;
	 case "my" ; include "myfile.php"; break;

	/** Data Upload */
	 case "up"; include "unggah.php"; break;
	 
  	/** Data Download */
	 case "down"; include "unduh.php"; break;

	 /** Data Hapus Lagu */
	 case "hps"; include "hapus.php"; break;

	 /** Data About Author */
	 case "about"; include "author.php"; break;
	 
	 default; include "home.php";break;
	 }
	?>