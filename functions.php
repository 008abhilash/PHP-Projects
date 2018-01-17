


<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
  </head>
  <body>
    <button id="btnfun1" name="btnfun1" onClick='location.href="?button1=1"'>Update to 1</button>
    <button id="btnfun2" name="btnfun2" onClick='location.href="?button2=1"'>Update to 2</button>
  </body>
</html>

<?php
 if(isset($_GET['button1']))
 {fun1();}
 if(isset($_GET['button2'])){fun2();}

 function fun1()
 {
   echo "function 1";
 }
 function fun2()
 {
   echo "function 2";
 }
?>



echo "<tr>";

echo "<td>" . $row['id'] . "</td>";

echo "<td>" . $row['s_name'] . "</td>";

echo "<td>" . $row['age'] . "</td>";

echo "<td>" . $row['branch'] . "</td>";



echo "</tr>";







<html>
	<head><h1>STUDENT DETAILS</h1></head>
	<style>    
	table, th, td {
	border: 1px solid black;
	}
	</style>

	<body>
		<link rel = "stylesheet" type="text/css" href="style.css">
	
		<form name = "my form"  action=" " method="post"  align="center">
			<table style="width:20%" align="center">
				<tr>
					<td>
					STUDENT NAME:
					</td>

					<td>
						<input type="text" name="s_name" id="101">
					</td>

				</tr>



				<tr>
					<td>
					AGE:
					</td>
					<td><input type="text" name="age" id="102"></td>

				</tr>

				<tr>
					<td>
						<label>Select BRANCH</label>
					</td>
					<td align="center">
						<select id = "myList" name="branch" id="103">
							<option value = "1"  id="o1">branch1</option>
							<option value = "2"  id="o2">branch2</option>
							<option value = "3"  id="o3">branch3</option>
							<option value = "4"  id="o4">branch4</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center"> <input type="submit" name="submit" value="insert"> </td>
					<td>
			 <a href="displaydata.php"> <input type="button" name="btn1" id="btn1" value="display" ></a>
			 <a href="update.php"> <input type="button" name="btn1" id="btn1" value="update" ></a>
			 </td>
			 
	
				
				
			 </tr>
			 </table>
	</form>
	
</body>
</html>

<?php



		
		if(isset($_POST['submit']))
			{
				$s_name= $_POST['s_name'];
				$age = $_POST['age'];
				$branch=$_POST['branch'];

				mysql_connect("localhost","root","");
				mysql_select_db("student details");
				$sql="INSERT INTO student (s_name,age,branch) VALUES ('$s_name',$age,'$branch')";
				$result=mysql_query($sql);
			
				if($result)
					{
						echo "<script type='text/javascript'>alert('done!')</script>";
					}
				else
					{
						echo "alert('not done')";
					}
			}


    ?>