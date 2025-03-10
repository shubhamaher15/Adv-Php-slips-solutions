<html>
  <body>
  <form method="post" action="#">
      Enter User_id:
      <input type="text" name="t1"><br> 
   Enter Name:
      <input type="text" name="t2"><br>
  Enter Adddress:
      <input type="text" name="t3"><br>
  Enter Moblie no:
      <input type="text" name="t4"><br>
    <input type="submit">
 </form>
 </body>
</html>
<?php
   $id=$_POST["t1"];
   $n=$_POST["t2"];
   $addr=$_POST["t3"];
   $mno=$_POST["t4"];

echo("<h1> User id=".$id);
echo("<h1> User name=".$n);
echo("<h1> User address=".$addr);
echo("<h1> User mobile no=".$mno);

?>