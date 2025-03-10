<html>
<body>
<form method="POST" >

<h2>Enter Student name:
<input type="text" name="t1" value="<?php if(isset($_POST["t1"])) echo $_POST["t1"];?>"></br>

<h2>Enter Student Roll no:
<input type="text" name="t2" value="<?php if(isset($_POST["t2"])) echo $_POST["t2"];?>"></br>

<h2>Enter Class:
<input type="text" name="t3" value="<?php if(isset($_POST["t3"])) echo $_POST["t3"];?>"></br>

<h2>Enter Age:
<input type="text" name="t4" value="<?php if(isset($_POST["t4"])) echo $_POST["t4"];?>"></br>

<h2>Enter Address:
<input type="text" name="t5" value="<?php if(isset($_POST["t5"])) echo $_POST["t5"];?>"></br>

<input type="submit" value="ok"></br>

</form>
</body>
</html>

<?php

$name1=$_POST["t1"];

$roll=$_POST["t2"];

$class=$_POST["t3"];

$age=$_POST["t4"];

$add=$_POST["t5"];

echo "<h1>Student Information </h1></br>";

echo "<h2>Student name=:$name1</br>";

echo "<h2>Student Roll no=: $roll</br>";

echo "<h2>Student Class=: $class</br>";

echo "<h2>Student Age=:$age</br>";

echo "<h2>Student Address=: $add</br>";

?>

