<?php
	include("koneksi.php");
	
	$pengarang = $_GET["p"];
	
	$sql = "SELECT * FROM buku WHERE pengarang = '$pengarang'";
	
	$result = mysql_query($sql) or die("Query gagal dijalankan");
	
	header("Content-type: text/xml");
	
	echo "<tokobuku>";
	
	while($buku = mysql_fetch_assoc($result)){
		echo "<buku>";
			echo "<judul>".$buku["judul"]."</judul>";
			echo "<genre>".$buku["genre"]."</genre>";
			echo "<pengarang>".$buku["pengarang"]."</pengarang>";
			echo "<penerbit>".$buku["penerbit"]."</penerbit>";
			echo "<tahun>".$buku["tahunterbit"]."</tahun>";
			echo "<harga>".$buku["harga"]."</harga>";
		echo "</buku>";
	}
	
	echo "</tokobuku>";
?>