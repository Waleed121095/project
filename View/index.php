<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../Classes/class_disk.php';
        $disk = new class_disk();
        
        $msg = "" ; 
        $msg = $disk->retouch();
        echo $msg;
        ?>
        
        
    </body>
</html>
