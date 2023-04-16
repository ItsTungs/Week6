<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<h2>Biodata</h2>
	<?php
		$nama = "Rayhan Favian Al Gaffar";
		$umur = 20;
        $tgllahir = "Balikpapan, 28 Agustus 2002";
		$alamat = "Putat Gede Timur 3 No.56";
		$hobi = array("Bermain Game Mobile", "Membaca", "Turing");
	?>
	<p>Name: <?php echo $nama; ?></p>
	<p>Umur: <?php echo $umur; ?></p>
    <p>Tgl Lahir: <?php echo $tgllahir; ?></p>
	<p>Alamat: <?php echo $alamat; ?></p>
	<p>Hobi:</p>
	<ul>
		<?php
			foreach($hobi as $hobby) {
				echo "<li>$hobby</li>";
			}
		?>
	</ul>
</body>
</html>
