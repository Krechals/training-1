<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try {
			$db = new PDOEx("mysql:host=localhost;dbname=training", "root","nan587");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			$_LOGGER->error($e->getMessage());
			die("A aparut o eroare (verifica user/parola/host pentru MySQL):<br>" . $e->getMessage());
		}
        ?>
    </body>
</html>
