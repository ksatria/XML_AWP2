<?php
	header("Content-type: text/xml");
	
	echo "<tokobuku>";
		echo "<buku>";
			echo "<judul>Pulang</judul>";
			echo "<genre>Fiksi</genre>";
			echo "<pengarang>Tere Liye</pengarang>";
			echo "<penerbit>Republika</penerbit>";
			echo "<tahun>2015</tahun>";
			echo "<harga>58650</harga>";
		echo "</buku>";
		echo "<buku>";
			echo "<judul>Aku</judul>";
			echo "<genre>Biografi</genre>";
			echo "<pengarang>Sjuman Djaya</pengarang>";
			echo "<penerbit>Gramedia</penerbit>";
			echo "<tahun>2016</tahun>";
			echo "<harga>42500</harga>";
		echo "</buku>";
		echo "<buku>";
			echo "<judul>Sepotong Senja Untuk Pacarku</judul>";
			echo "<genre>Fiksi</genre>";
			echo "<pengarang>Seno Gumira Ajidarma</pengarang>";
			echo "<penerbit>Gramedia</penerbit>";
			echo "<tahun>2016</tahun>";
			echo "<harga>59500</harga>";
		echo "</buku>";
		echo "<buku>";
			echo "<judul>Intelegensi Embun Pagi</judul>";
			echo "<genre>Fiksi</genre>";
			echo "<pengarang>Dee Lestari</pengarang>";
			echo "<penerbit>Mizan</penerbit>";
			echo "<tahun>2016</tahun>";
			echo "<harga>100300</harga>";
		echo "</buku>";
	echo "</tokobuku>";
?>