<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">       
    <link rel="stylesheet" href="css/style.css">    
</head>
<body id="main_container">
    <input type="hidden" id="session" value="mosiur">
    <?php include "layouts/header.php"; ?>
    <div id="admin-wrapper">
        <div class="container-fluid">
            <div class="row">
                <?php
                include "layouts/side_menu.php";
                ?>
                <div class="col-md-10 col-sm-9 clearfix" id="admin_content">
                </div>
            </div>
        </div>
    </div>    
    <script src="js/admin_menu.js"></script> 
</body>
</html>