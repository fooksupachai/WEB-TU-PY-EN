<?php
class databaseViewEN {
     private $servername = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "admin";
    private $dbname = "db_tu_py";
    function connDataBase(){
        $conn = new mysqli($this->servername, $this->dbUsername, $this->dbPassword, $this->dbname);
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        } 
        return $conn;
    }

    function viewNewsEN(){
    $conn = $this->connDataBase();	
	$sql = "SELECT text, name_img FROM news_en";
	$result = $conn->query($sql);
	$valueCheck = 0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo '<div  style="margin:50px;" >
	    	<div class="col-md-6"><img src="../uploads/news_en/'.$row["name_img"].'" width="200px" height="200px" id="l1"><br></div>
	    	<div class="col-md-6" style="color:white;margin-top:10px;font-size:20px;" >
	    	'.$row["text"].'
	    	</div>
	    	</div><br><br><br><br>';	    
	    }	
	} else {
	    echo "No result in Database";
	}
	$conn->close();

    }

    function viewEventEN(){
    	 $conn = $this->connDataBase();	
	$sql = "SELECT date, text FROM event_en";
	$result = $conn->query($sql);
	$valueCheck = 0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
			echo "<tr>
				<td>".$row["date"]."</td>
				<td>".$row["text"]."</td>
			</tr>";	    
	    }	
	} else {
	    echo "No result in Database";
	}
	$conn->close();
    }

    function viewPerEN(){
    $conn = $this->connDataBase();
	$sql = "SELECT text, name_img FROM per_en";
	$result = $conn->query($sql);
	$valueCheck = 90;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo '<div  style="margin:50px;" >
	    	<div ><img src="../uploads/per_en/'.$row["name_img"].'" width="200px" height="200px" id="l1"><br></div>
	    	<div  style="color:white;margin-top:10px;font-size:20px;" >
	    	'.$row["text"].'
	    	</div>
	    	</div><br><br><br><br>';	    
	    }	
	} else {
	    echo "No result in Database";
	}
	$conn->close();
    }

}


?>