<?php 
	$url="http://localhost/Miniprojet%20-%20Web%20design/";
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Iceberg - Sauvez la planète contre le réchauffement climatique</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Site de don et de collecte de fond. Pour aider les animaux et les populations dans les antarctiques contre les dégats causés par le réchauffement climatique dans le monde" />
        <meta name="keywords" content="iceberg, grand blanc, ours polaire, pingoins, orques, baleine blanche, climat, réchauffement climat, antarctiques, température, sauver, don, collecte de fond" />
		<link rel = "icon" type = "image/png" href = "<?php echo $url ?>images/facebook (1).png">
        <link href="<?php echo $url ?>BackOffice/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $url ?>BackOffice/css/main.css">
	</head>
	<body>
        <div class="bod">
            <div class="menu">
                <div class="image">
                    <h1 ><a style="text:center"href="<?php echo $url?>accueil">Iceberg</a></h1>
                    <img src="<?php echo $url?>images/slide_2.jpg" width=400px />
                </div>
                <form action="admin/login" method="post">
                    <div class="soratra" id="inputes">
                        <p><input class="inputT" type="text" placeholder="Email" name="email"/></p>
                        <p><input class="inputT" type="Password" placeholder="Mot de passe" name="mdp"/></p>
                        <p><input class="boutton" id="logIn" type="submit" value="Log In"/></p>
                    </div>
                </form>
            </div>
        </div>
	</body>
</html>