<!DOCTYPE html>
<html>
	<head>
    	<title>Calcul de somme</title>
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1, p {
            text-align: center;
            margin-top: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        label {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="number"] {
            margin-left: 20px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            flex-grow: 1;
        }

        input[type="submit"] {
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
    <body>
    	<h1>Calcul de somme</h1>

    	<form method="POST" action="">

        	<label for="nombre1">Premier nombre :</label>
        	<input type="number" name="nombre1" id="nombre1"><br>

        	<label for="nombre2">Deuxième nombre :</label>
        	<input type="number" name="nombre2" id="nombre2"><br>

        	<input type="submit" value="Additionner">

    	</form>
<body>
<?php

    // Vérification si les entrées sont soumises par l'utilisateur
    if(isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
        try{
            // Récupération des entrées depuis le formulaire
            $num1 = $_POST['nombre1'];
            $num2 = $_POST['nombre2'];

            // Calcul de la somme des deux nombres
            $sum = $num1 + $num2;

            // Affichage du résultat
            echo "<p>La somme de $num1 et $num2 est égale à : $sum</p>";
        }catch (ErrorException $e){
            echo "<p>Une erreur est survenue : " . $e->getMessage() . "</p>";
        }

    }
?> 