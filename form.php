<?php
	//print_r($_GET);die;

		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$s_name = isset($_GET['s_name']) ? $_GET['s_name'] : '';
		$age = isset($_GET['age']) ? $_GET['age'] : '';
		$branch = isset($_GET['branch']) ? $_GET['branch'] : '';
		//$s_name= $_POST['s_name'];
		//$age = $_POST['age'];
		//$branch=$_POST['branch'];
		//$age = $_GET['age'];
		//$branch=$_POST['branch'];

		mysql_connect("localhost","root","");
		mysql_select_db("student details");
		$sql="SELECT * FROM student WHERE id='$id'";
		$result=mysql_query($sql);

		$u_id="";
		$u_name="";
		$u_age="";
		$u_branch="";

		//print_r($_GET);die;
if(isset($_GET['id']))
{
		
		//echo '<pre>';
		while($row = mysql_fetch_array($result))
	{
			$u_id=$row['id'];
			$u_name=$row['s_name'];
			$u_age=$row['age'];
			$u_branch=$row['branch'];
	}

}


		//insertion of data


	if(isset($_POST['submit']))
{
	
			$s_name= $_POST['s_name'];
			$branch=$_POST['branch'];
			$age = $_POST['age'];

			mysql_connect("localhost","root","");
			mysql_select_db("student details");

			if(isset($_GET['id']))
			{
				//$id = $_GET['id'];
				$sql ="UPDATE student SET s_name='$s_name',age='$age',branch='$branch' where id='$id'";
				$result=mysql_query($sql);

				if($result)
			{
					echo "<script type='text/javascript'>alert('updated')</script>";
			}
				else
			{
					echo "alert('not done')";
			}
			}

			else
			{
				$sql="INSERT INTO student (s_name,age,branch) VALUES ('$s_name',$age,'$branch')";

				$result=mysql_query($sql);

				if($result)
			{
				echo "<script type='text/javascript'>alert('inserted!')</script>";
			}
				else
			{
				echo "alert('not done')";
			}
			}
			
		}			

		

?>	
	<html>
	<head><h1>STUDENT DETAILS</h1></head>
	<style>    
	table, th, td
	{
	border: 1px solid black;
	}
	</style>

	<body bgcolor="gray" >
	
	<link rel = "stylesheet" type="text/css" href="style.css">
	<form name = "my form"  action=" " method="post"  align="center">
	<table style="width:20%" align="center">
	<tr>
	<td>
STUDENT NAME:
	</td>

	<td>
	<input type="text" name="s_name" value="<?php echo "$u_name"; ?>">
	</td>

	</tr>

	<tr>
	<td>
AGE:
	</td>
	<td><input type="text" name="age" value='<?php echo "$u_age"; ?>'></td>
	</tr>
	<tr>
	<td>
	<label>Select BRANCH</label>
	</td>
	<td align="center">
	
	<select name="branch" value="   ">
	<option value="option1"<?=$u_branch == 'option1' ? ' selected="selected"' : '';?>>option1</option>
	<option value="option2"<?=$u_branch == 'option2' ? ' selected="selected"' : '';?>>option2</option>
	<option value="option3"<?=$u_branch == 'option3' ? ' selected="selected"' : '';?>>option3</option>
	<option value="option4"<?=$u_branch == 'option4' ? ' selected="selected"' : '';?>>option4</option>
	</select>
	</td>
	</tr>
	<!-- //https://stackoverflow.com/questions/1336353/how-do-i-set-the-selected-item-in-a-drop-down-box -->
	<tr>
	<td align="center"> <input type="submit" name="submit" value="submit" /> </td>
	<td>
	<a href="displaydata.php"> <input type="button" value="display" ></a>
	</td>
	</tr>
	</table>
	</form>
	</body>
	</html>


	<!-- <br /><b>Notice</b>:  Undefined variable: u_name in <b>/opt/lampp/htdocs/student_details/form.php</b> on line <b>88</b><br /> -->