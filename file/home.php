
    <div class="jumbotron">
  		<h1>Selamat Datang!</h1>
  		<p>Ini adalah website upload dan download musik secara Gratis dari MD Musik</p>
  		<p><a class="btn btn-primary btn-lg" href="?page=about" role="button">Selengkapnya</a></p>
		</div>
		
	<?php

      	function bytesToSize($bytes, $precision = 2) {  

	        $kilobyte = 1024;
	        $megabyte = $kilobyte * 1024;
	        $gigabyte = $megabyte * 1024;
	        $terabyte = $gigabyte * 1024;
	       
	        if (($bytes >= 0) && ($bytes < $kilobyte)) {
	          return $bytes . ' B';
	        } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
	          return round($bytes / $kilobyte, $precision) . ' KB';
	        } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
	          return round($bytes / $megabyte, $precision) . ' MB';
	        } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
	          return round($bytes / $gigabyte, $precision) . ' GB';
	        } elseif ($bytes >= $terabyte) {
	          return round($bytes / $terabyte, $precision) . ' TB';
	        } else {
	          return $bytes . ' B';
	        }
      	}

    ?>

    <table class="table table-striped table-hover">
    	<!-- <tr>
	        <th>NO.</th>
	        <th>LAGU</th>
	        <th>FILE SIZE</th>
	        <th>FILE TYPE</th>
	        <th>UPLOAD BY</th>
	        <th>DOWNLOAD</th>
      	</tr> -->

	<?php

	$sql = $conn->query("SELECT * FROM uploads ORDER BY id DESC");

	if($sql->num_rows > 0){

        $no = 1;

        while($row = $sql->fetch_assoc()) {
	?>

		<tr>
            <td><?php '.$no.' ?></td>
            <td><?php '.$row['file_name'].'  ?></td>
            <td><?php '.bytesToSize($row['file_size']).' ?></td>
            <td><?php '.$row['file_type'].' ?></td>
            <td><?php '.$row['username'].' ?></td>
            <td>

	<?php 

		if($_SESSION['user']){

	?>

            <a href="<?php uploads/'.$row['file_name'].' ?>" class="btn btn-primary btn-sm">Download</a>

    <?php
        }

    ?>

            </td>
		</tr>

          
	<?php 

			$no++;
        }

	} else {
		echo '<tr><td colspan="5">Tidak ada data</td></tr>';
	}

	?>

    </table>

    

    