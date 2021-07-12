<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function func(){  
var a = "Javascript";  
document.getElementById("test").value = 'a';  
print a;
}  
</script>
</head>
<h1>123</h1>





<body>
<p>
<?php   
if(isset($_POST['sub'])){  
$test = $_POST['test'];  
echo "<br>".$test."----php";  
}  
?>  
</p>
<form action="" method="post">  
<p><input type="text" id="test" name="test" value="1"/>12</p>
<p><input type="submit" id="sub" value="change" /> </p> 
<button onclick="func()">button</button>
<p><?php echo 'a12' ?></p>
</form>
</body>
</html>
