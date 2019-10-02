<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php
     require "plug-ins/aws-autoloader.php" 
      use plug-ins/Aws/S3/S3Client;
      use plug-ins/Aws/Exception/AwsException;
      //Create a S3Client
      $s3 = new Aws\S3\S3Client([
        'profile' => 'default',
        'version' => 'latest',
        'region' => 'us-east-1']
      ]);
    ?>
    <!-- IMPORT BOOTSRAP  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="styles.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <title>Bretter Homes</title>
</head>
<body>
  <!--================START NAV BAR===============---->
<div class="container-fluid" id="navbar">
  <div class="row">
    <ul class="nav font-dark col-md">
      <li class="nav-item">
        <a class="nav-link active" href="index.php"><img src="images/logo-fav.png" id="nav-icon" alt="Bretter Homes Logo"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" tabindex="-1">Contact Us</a>
      </li>
    </ul>
    <div class="col-sm text-right pt-2">
      <img src="images/logo-letter.png" alt="Bretter Homes Logo" id="nav-logo-full">
    </div><!--Last menu item-->
  </div><!--End row-->
</div><!--End container-->
    