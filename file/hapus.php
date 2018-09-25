<?php
include "config.php";

	$id=$_GET['id'];
	$row=$conn->query("select * from uploads where id='$id'"));
	$file_name=$row['file_name'];

	$query=mysql_query("delete from uploads where id='$id'") or die ("Gagal Menghapus Data");
	if($query){
		$nama_file="../uploads/".$file_name;
		unlink($nama_file);
		
		header("Location:?page=my");
	}
?>