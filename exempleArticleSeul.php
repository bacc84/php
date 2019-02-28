<?php
  session_start();
  //include("./donnees.php");
  $datas = $_SESSION["datas"];
  $key = $_GET["cle"];
  $article = $datas[$key];
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>
    <div class="container">
        <!-- *********************************************************************************************** Barre de navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <!-- ************************************************************************************** liens Actualités -->
                    <li class="active"><a href="#">Actualités<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </nav>
        <div class="page-header">
            <!-- ********************************************************************************************************* Titre -->
            <h3><?php echo $article["titre"]; ?></h3>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <!-- ************************************************************************************************* Image -->
                    <img src=<?php echo $article["image"];?> alt="enAttente" class="img-responsive col-sm-6 col-md-6">
                    <div class="col-sm-6 col-md-6 text-justify">
                        <!-- ******************************************************************************** texte de l'article -->
                        <?php echo $article["article"]; ?>
                        <!-- ************************************************************************************** Date et lieu -->
                        <p class="text-right small text-muted"><?php echo $article["date"];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
