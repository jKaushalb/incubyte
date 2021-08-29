<html>
<?php
            
            include "db_connection.php";
            
        ?>
<head>
	<style>
		table,th,td
		{
			border: 3px solid black;
			border-collapse: collapse;
			background-color:skyblue;
			padding: 10px;
		}
	</style>
</head>

<body>

 <?php
 
				$conn=OpenCon();
				
				
                if (file_exists('records.dat'))
				{	
					$f=fopen('records.dat','r');
					
					
					while(!feof($f))
					{

						$d= fgets($f);
						$s=explode('|',$d);
						
						gettype($s[1]);
						if( $s[1] == 'D')
						{
							
							
							create($conn,$s[9]);
							if(insert($conn,$s[9],$s))
							{
								echo "record.".implode(" ",$s)."inserted succesfully ";
							}
							echo" <br >";
							
								
						}
						
							
						
						
					}

							
						
					//echo "</table>";
				}
				else
				{
					echo "File not found<br>";
				}
            ?>
            
</div>
</body>
</html>