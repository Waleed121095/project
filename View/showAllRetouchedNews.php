
<html>
    <head>
    <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}

</style>
</head>

    <body>
      <table style="width:100%">
            
<?php
include '../Classes/class_uploader.php';
session_start();// session need to login() function ,I used initial user ID session to use here ,I will re implement the sessions again ^_^
$_SESSION['id'] = 1;//this well be uploder or user session ID

if( true  )
{
 $id= $_SESSION['id'] ;  
     
echo '<tr>
    <th>News ID </th>
    <th>title</th>
    <th>catogery</th>
    <th>path</th>
    <th>Published State</th>
    <th>views Number</th>
    <th></th>
  </tr>';
 $re = new class_uploader();
 $result = $re->showAllRetouchedNews();
 $c= 0 ;
 $flag = TRUE;
 while ( $flag )
 {
   
     
			echo "hasuvfyilvasfvdfvaisvfapf";
     if( isset( $result[$c] ['title']))
        {
         
			echo "hasuvfyilvasfvdfvaisvfapf";
           echo '<tr>
            <td>'.$result[$c]['ID'].'</td>   
            <td>'.$result [$c]['title'].'</td>
            <td>'.$result[$c]['category'].'</td>
            <td><a href="'.$result[$c]['path'].'"> '.$result[$c]['path'].'</td>
            <td>'.$result[$c]['appearState'].'</td>
            <td>'.$result[$c]['viewsNumber'].'</td> 
            <td>  
           <form method="POST" action="showNews.php" >
           <input type ="hidden" name="newsID" value='.$result[$c]['ID'].' >
           <input type="submit" name="action" value="show">
           </form> </td> 
            </tr>' ;
          
            $flag = TRUE;
            $c++;
        }// end if 
     else 
        {
          $flag = FALSE;
        }// end else 
    
 }//end while
 
}// end if isset session 
 
 
?>
        </table>
</body>
<html>