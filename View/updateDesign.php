<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" id="update">
            
        <table>
            <tr> <td> <input type="number" name="ID" placeholder="ID" /> </td></tr>
            <tr><td><input type="text" name="content" placeholder="content" /> </td></tr>
        </table>
        <input type='submit' name='submit' value='Update'>
        </form>
        
        <?php
        session_start();
        if (isset($_POST['ID']))
            $textID = $_POST['ID'];
        if (isset($_POST['content']))
            $content = $_POST['content'];
        if (isset($_POST['submit'])){
            include_once './class_supervisor.php';
            $x = new class_supervisor();
            if($x->updateText($textID,$content))
                echo 'update Done';
            else
                echo 'Failed to update';
        }
                             
        ?>
    </body>
</html>
         