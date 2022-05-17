<?php 
 include("../database/connection.php");
 include("../database/fonctions.php");
 include("../database/donnees.php");
 require('security.php');
 $url="https://rayannayar.alwaysdata.net/Iceberg-sauvez-la-planete/";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Liste des actualités</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Ajouter une nouvelle actualité</a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>titre</th>
                                <th>description</th>
                                <th>lieu</th>
                                <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($liste['blog']as $blog){ ?>
                            <tr>
                                <td><img src="<?php echo $url.$blog['urlImage'] ?>" width="150px" alt="<?php echo $blog['altImage'] ?>" class="img-responsive"></td>
                                <td><p style="max-height: 100px;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                        <?php echo $blog['titre']?>
                                    </p>
                                </td>
                                <td><p style="max-height: 100px;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                        <?php echo $blog['description']?>
                                    </p>
                                </td>
                                <td><?php echo $blog['lieu']?></td>
                                <td><?php echo $blog['dateIncident']?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $blog['id']?>" class="mr-3" title="Modifier" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
                                    <a href="delete.php?id=<?php echo $blog['id']?>" title="Supprimer" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>                            
                    </table>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>