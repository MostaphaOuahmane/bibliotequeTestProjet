<html>
<head>
	<title>Formulaire de recherche</title>
<?//php var_dump($_GET)   //action=" ?action=ouvragesParMotsCles" ?>
</head>
<body>
  
	<form  method="get"  >
		<label for="mots">Mots-clés :</label>
		<input type="text" id="motscles" name="list">
		<br><br>
		<input type="submit" value="Rechercher">
	</form>
    <?php  
    if($_SERVER['REQUEST_METHOD']==="GET"){
            var_dump($_GET);
    }?>
</body>
</html>