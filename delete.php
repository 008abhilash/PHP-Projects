<?php
//print_r($_GET);die;
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    echo "<a href='displaydata.php'> <input type='button'  value='display' align='center' ></a>";
$con=mysql_connect("localhost","root","");
				mysql_select_db("student details");
				$sql="DELETE FROM student WHERE id=' $id '";
                $result=mysql_query($sql);
                if($result)
					{
                        header('Location: http://localhost/student_details/displaydata.php');
                        echo "done";
                    }
                    else{
                        header('Location: http://localhost/student_details/displaydata.php');
                        echo " query not done";
                    }
                }
                else
                {
                    echo " if main not done";
                }

?>