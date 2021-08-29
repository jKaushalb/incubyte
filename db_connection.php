<?php

    // To open connection to the database
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "incubyte";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }

    // To close connection to the database
    function CloseCon($conn)
    {
        $conn -> close();
    }
	
	function create($conn,$country)
	{
		$sql = "CREATE TABLE $country (
		CName VARCHAR(255) NOT NULL,
		CId VARCHAR(18)  PRIMARY KEY,
		OpenDate Date NOT NULL,
		LastDate Date ,
		VType CHAR(5),
		Doctor CHAR(255),
		State VARCHAR(5),
		PostCode INT(5),
		DoB  DATE,
		Active  CHAR(1)
		)";

		if (mysqli_query($conn, $sql)) 
		{
		  //echo "Table $country is created";
		} 
		else
		{
		  echo "Error creating table " . mysqli_error($conn);
		}
	}

   
    function insert($conn,$country,$s)
    {
        $sql = "INSERT INTO `$country` (`Cname`, `CId`, `OpenDate`, `LastDate`,`Vtype`,`Doctor`,`State`,`Postcode`,`Dob`,`Active`) VALUES ('$s[2]','$s[3]','$s[4]','$s[5]','$s[6]','$s[7]','$s[8]',NULL,NULL,'$s[11]')";
        $result = mysqli_query($conn,$sql);
        if(mysqli_affected_rows($conn)>0)
        {
            //echo "The record has been inserted successfully!<br>";
            return True;
        }
        else
        {
            echo "".mysqli_error($conn);
			return False;
        }
    }
?>