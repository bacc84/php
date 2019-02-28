<?php
  session_start();
  include("./donnees.php");
  $_SESSION["datas"] = $datas;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <!-- ************************************************************************************** liens Actualités -->
                    <li class="active"><a href="#">Actualités<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Qui sommes nous</a></li>
                    <li><a href="#">Nos partenaires</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </nav>
        <div class="page-header">
            <h1>Actualités <small>nos prochains concert</small></h1>
        </div>
        <main class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <!-- ********************************************************************************* Début pour un article -->
                    <?php foreach ($datas as $key => $data) { ?>
                    <div class="col-sm-6 col-md-4 item">
                        <section class="post">
                            <div class="thumbnail well">
                                <!-- ***************************************************************************************** Image -->
                                <img src="<?php echo $data["image"]; ?>"  alt="enAttente">
                                <div class="caption">
                                    <!-- ************************************************************************************* Titre -->
                                    <h3><?php echo $data["titre"]; ?></h3>
                                    <!-- ************************************************************************************ Résumé -->
                                    <p class="text-justify"> <?php echo $data["resume"]; ?></p>
                                    <!-- ****************************************************************************** Date et lieu -->
                                    <p class="text-right small text-muted"> <?php echo $data["date"]; ?></p>
                                    <!-- **************************************************************************** En savoir plus -->
                                    <p class="text-center"><a href="./exempleArticleSeul.php?cle=<?php echo $key ?>" class="btn btn-primary" role="button">En savoir plus</a></p>
                                </div>
                            </div>
                        </section>
                    </div>
                  <?php } ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
