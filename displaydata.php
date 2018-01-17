<body  bgcolor='gray'>
<?php



			//	$s_name= $_POST['s_name'];
			//	$age = $_POST['age'];
			//	$branch=$_POST['branch'];

				$con=mysql_connect("localhost","root","");
				mysql_select_db("student details");
				$sql="SELECT * FROM student";
				$result=mysql_query($sql);
			
				if($result)
					{
						echo "<table align='center' border='1'>

<tr>

<th>Id</th>

<th>s_name</th>

<th>age</th>

<th>branch</th>
<th colspan='2'> other operatios</th>

</tr>";

 
//echo '<pre>';
while($row = mysql_fetch_array($result))

//print_r($row);die;

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['s_name'] . "</td>";

  echo "<td>" . $row['age'] . "</td>";

  echo "<td>" . $row['branch'] . "</td>";

  echo "<td>" ." <a href='delete.php?id=".$row['id']."'> <input type='button'  value='delete'> </a>" . "</td>";

  
  echo "<td>" ." <a href='form.php?id=".$row['id']."'> <input type='button'  value='edit'> </a>" . "</td>";

  echo "</tr>";

  }
  echo "</table>";
  echo "<table align='center'>";
  echo "<tr></tr>";
  
  echo "<tr>";
  
  echo "<td align='center'>" ." <a href='form.php'> <input type='button'  value='INSERT'> </a>" . "</td>";
echo "</tr>";
echo "</table>";
					}
				else
					{
						echo " failed" ;
					}
					
					mysql_close($con);
					
					
					function delete()
					{
						die("reach here");
					}


function delete1()
{
					if(isset($_GET['id']))
					{
						$id = $_GET['id'];
					
						
					$con=mysql_connect("localhost","root","");
									mysql_select_db("student details");
									$sql="DELETE FROM student WHERE id=' $id '";
									$result=mysql_query($sql);
									if($result)
										{
											echo "congo";
										}
										else{
											echo " query not done";
										}
									}
									else
									{
										echo " if main not done";
									}

								}
  if(isset($_GET['button1']))
  {
 delete1();
  
			  }
?>
</body>
