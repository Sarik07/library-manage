<?php
include "connect.php";
	$id=$_GET["id"];
	mysqli_query($conn,"update sreg set status='yes' where id=$id");
	?>
	<script type ="text/javascript">
	window.location="sinfo.php";
	</script>	
		