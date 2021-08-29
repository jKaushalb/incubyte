<html>
<?php
            
            include "db_connection.php";
            
        ?>

<body>

 <?php
 
				$conn=OpenCon();
				$path    = './records';
				$files = scandir($path);
				$files = array_diff(scandir($path), array('.', '..'));
				print_r($files);
				foreach( $files as $fi)
				{
					if (file_exists($path."/".$fi))
					{	
						$f=fopen($path."/".$fi,'r');
						
						
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

					}
					
					else
					{
						echo "File not found<br>";
					}
				}
            ?>
            

</body>
</html>
