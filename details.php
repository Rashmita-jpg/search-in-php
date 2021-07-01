<?php
include './header.php';
include('connect.php');
if(isset($_GET['id']) && $_GET['id']>0 ){
   $id= mysqli_real_escape_string($conn,$_GET['id']);
   
   $sql="select * from alllaptop_post where id='$id'";
   $res=mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
       $row=mysqli_fetch_assoc($res);
       echo"<h2>".$row['filetitle']."</h2>";
       echo"<h3>".$row['filedesc']."</h3>";
    //  echo "<a href="index.php">back</a>";
   }else{
       header('location:index.php');
       die();
}
}

?>