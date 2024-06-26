<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php 
        
        include('style.php');
        
    ?>
    <title>
        <?php echo $title;?> 
    </title>
</head>
<body>
    <?php
        $current_page = trim($_SERVER['REQUEST_URI'], '/');
        if($current_page == '' || $current_page == 'tournaments' || $current_page == 'gallery' || $current_page == 'new' || $current_page == 'new/show'){
            include('navbar.php');
        }
    ?>
    <?php 
        echo $content; 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script scr='puclic/script/index.js'></script>
    <?php include('script.php');?>
</body>
</html>




<!-- 
    1 Практика 
    2 Если понтавиться 
        2.1 Учеба 
        2.2 Работа 

-->