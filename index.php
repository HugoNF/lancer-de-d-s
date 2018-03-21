<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>La mère à lucien</title>

    <!-- Pour Internet Explorer : S'assurer qu'il utilise la dernière version du moteur de rendu -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Affichage sans zoom pour les mobiles -->
    <meta name="viewport" content="width=device-width, init-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--  Font Awesome | Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- HTML5 Shiv & Respond JS -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
    <![endif]-->

</head>
<body>
<!--<nav class="grey navbar navbar-default navbar-fixed-top">
    <div class="container">
        <ul class="navbar1">
            <li><a class="white" href="#">Inscription</a></li>
            <li><a class="white" href="#">Login</a></li>
        </ul>
    </div>
</nav>-->
<div class="form">
    <form name="form1" action="">
        <input type="number" class="choicede" style="width: 35px;">
        <input type=button name=Bouton class="choicedee" value="Lancer de dés" onclick="rolldice1()" style="width: 150px;padding: 5px;" />
        <br>
        <input type=button name=Bouton class="100de" value="Lancer de dés 100" onclick="rolldice2()" style="width: 150px;padding: 5px;"/>
        <br>
        <input type=button name=Bouton class="20de" value="Lancer de dés 20" onclick="rolldice3()" style="width: 150px;padding: 5px;" />
        <br>
        <input type=button name=Bouton class="12de" value="Lancer de dés 12" onclick="rolldice4()" style="width: 150px;padding: 5px;" />
        <br>
        <input type=button name=Bouton class="6de" value="Lancer de dés 6" onclick="rolldice5()" style="width: 150px;padding: 5px;" />


</div>
<div class="animation1 col-sm4"><input name="dechoice" type="text" style="width: 100%;height: 100%;text-align: center;" /></div>
<div class="animation2 col-sm4"><input name="de100" type="text"  style="width: 100%;height: 100%;text-align: center;" /></div>
<div class="animation3 col-sm4"><input name="de20" type="text" style="width: 100%;height: 100%;text-align: center;" /></div>
<div class="animation4 col-sm4"><input name="de12" type="text" style="width: 100%;height: 100%;text-align: center;" /></div>
<div class="animation5 col-sm4"><input name="de6" type="text" style="width: 100%;height: 100%;text-align: center;" /></div>
</form>



<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>