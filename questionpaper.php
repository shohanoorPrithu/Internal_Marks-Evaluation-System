<?php

class questionpaper
{
	function questionpaper($params,$tpl)
	{
			require_once("connect.php");
			require_once("connection.php");
			extract($params);
			/*$sql1="select qpname from exams where activated='t';";
			$rs1=$con->Execute($sql1) or die("Unable to retrieve papername");
			while(!$rs1->EOF)
			{
				$paper=$rs1->fields[0];
				echo $paper;
				//echo substr($date,5,3);
				//echo " $date || " ;
				$rs1->MoveNext();
			}*/
			$sql2="select * from $qpaper;";
			$rs2=$conn->Execute($sql2) or die("Unable to display paper");
			echo "<table bgcolor='' width='100%'>";
			while(!$rs2->EOF)
			{
				$sno=$rs2->fields[0];
				$q=$rs2->fields[1];
				$c1=$rs2->fields[2];
				$c2=$rs2->fields[3];
				$c3=$rs2->fields[4];
				$c4=$rs2->fields[5];
				
				echo "<tr><td colspan=4 align=left><font color=red size=4>Q $sno : $q</td></tr>";
				echo "<tr><td>(A)  $c1</td><td>(B)  $c2</td><td>(C)  $c3</td><td>(D)  $c4</td></tr>";
				echo "<tr><td colspan=4><hr width='100%' size=3></td></tr>";
				echo "<tr><td></td></tr>";echo "<tr><td></td></tr>";
				//echo $paper;
				//echo substr($date,5,3);
				//echo " $date || " ;
				$rs2->MoveNext();
			}
			echo "</table>";
	}

	
	
}



?>
