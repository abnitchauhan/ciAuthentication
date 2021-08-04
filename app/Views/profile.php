<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>  <?= $name ?> </title>
</head>
<body> 
<div class="container">
    <h3>Welcome to the Profile Section : <?= $name ; ?></h3>
    <p>Your email id : <?= $email ; ?></p>
    <a href="<?= base_url() ; ?>/logout"><button class="btn btn-danger">Logout</button></a>
</div>
</body>
</html>