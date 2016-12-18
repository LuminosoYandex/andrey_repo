<?php
	class testEdit {
		var $jpg;
		var $txt;
		
		function text($text) {
			echo $text;
		}
		function pict($text) {
			echo $text;
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="test_edit.php" method="post">
		<textarea name="comment" cols="40" rows="3"></textarea>
	</form>
</body>
</html>