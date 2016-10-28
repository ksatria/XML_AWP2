<html>
	<head>
		<title>Parsing XML via jQuery</title>
	</head>
	<body>
		<div id="databuku"></div>
	</body>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
		var xml = "http://localhost/awp2/program/generatebukuxml.php";
		var xmlDoc = $.parseXML( xml );
		var xml = $( xmlDoc );
		var title = xml.find( "judul" );
 
		$( "#databuku" ).append( title.text() );
	</script>
</html>