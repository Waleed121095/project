<?php
include_once '../Classes/class_disk.php';
$pk="" ;
 $disk = new class_disk();
if(isset($_GET['pkval']))
{
    $pk = $_GET['pkval'] ;
    $disk->findPostById($pk) ;
}
if(isset($_POST['submit']))
  {
    if($_POST['_post_id'] !="")
    {
        
        $disk->update($_POST['addnews'], $_POST['_post_id']) ;
        $pk = $_POST['_post_id'] ;
    }
 
  }
?>
<html>

<head>
<meta charset="UTF-8">
<title>edit news</title>

<link rel="stylesheet" type="text/css" href="php.css">


</head>

<body>
  
<div id="speac">
<br>
<form class="checkout" action="shownewss.php" method="POST">
    <input type="hidden" name="_post_id" value="<?=$pk?>" >
    <div class="checkout-header">
      <h1 class="checkout-title">
        Retouch Text
      </h1>
    </div>
    
     <textarea  name="addnews" class="textarea"  value="" > <?= $disk->content?> </textarea>
    <h2>
        <input type="submit" name="submit" value=" Save" class="checkout-btn">
    </h2>
  </form>

</body>
</html>