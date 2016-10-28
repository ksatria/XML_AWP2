<html>
	<head>
		<title>XML on Table</title>
	</head>
	<body>
		<table border=1>
			<tr>
				<th>Judul</th>
				<th>Genre</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>Harga</th>
			</tr>
			
			<?php
			$url = "http://localhost/awp2/program/xmlviaphp.php?p=Sjuman Djaya";
			$xml = simplexml_load_file($url) 
					or die("Something error");
	
			foreach($xml as $data){
			?>
			<tr>
				<td><?php echo $data->judul; ?></td>
				<td><?php echo $data->genre; ?></td>
				<td><?php echo $data->pengarang; ?></td>
				<td><?php echo $data->penerbit; ?></td>
				<td><?php echo $data->tahun; ?></td>
				<td><?php echo $data->harga; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>