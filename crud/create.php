<?php require('security.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Création de nouvelle blog</h2>
                    <form action="image.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" name="titre" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control "></textarea>
                        </div>
                        <div class="form-group">
                            <label>Lieu</label>
                            <input type="text" name="lieu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="datetime-local" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description de l'image</label>
                            <input type="text" name="alt" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="postImage" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Créer">
                        <a href="index.php" class="btn btn-secondary ml-2">Annuler</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>