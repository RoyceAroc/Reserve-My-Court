<?php
//open file to write
$fp = fopen("Tennis.txt", "r+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?>
<script>

	window.onload = function() {
		let interpret = localStorage.getItem("delete");
	window.location = "https://tennis.roydero.com/conjure.php?uname=" + interpret + "&rname=Tennis&enSubmit=Enter";
}

</script>
