<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" href="images/favicon.png">
    <title>Wish A Sprinkle</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("adminnav.php");?><br><br><br>
    
    <main role="main" class="container">
        <div class="row">
            <div class="col-xl-4   p-1  "></div>
            <div class="col-xl-5  p-1 mt-5  ">
                
                <?php
                     include("dbConnection.php");?>
                <h3 style="font-family: 'Cookie', cursive; color:#FF7F50;"> <b>Add Product</b></h3><br>