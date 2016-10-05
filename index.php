<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php
	require_once('app/services/usuariosService.php');

	$userService = new UsuariosService();
	$userService->TestInsertUser();
?> 

</body>
</html>