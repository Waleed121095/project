<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" id="delete">
        
            <table><tr> <td> <input type="number" name="ID" placeholder="ID"/> </td></tr></table>
        <input type='submit' name='submit' value='Delete'>
        </form>
        
        <?php
        if (isset($_POST['ID']))
            $textID = $_POST['ID'];
        if (isset($_POST['submit'])){
            include_once './class_supervisor.php';
            $x = new class_supervisor();
            if($x->removeText($textID))
                echo 'Delete Done';
            else
                echo 'Failed to Delete';
        }                          
        ?>
    </body>
</html>