<?php
	session_unset();
	session_destroy();
	header("Location:admin/admin_login.php");
?>