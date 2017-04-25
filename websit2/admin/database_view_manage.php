<?php
class databaseViewManage {
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
    function manageEventTH(){
        $conn = $this->connDataBase();
        $sql = "SELECT id,text, date FROM event_th";
        $result = $conn->query($sql);
        $valueCheck = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            
        echo '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["date"].'</td>
        <td>'.$row["text"].'</td>
        <td>
        <form action="event_th_edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_event_th" value="'.$row["id"].'"/>
            <input type="hidden" value="'.$row["text"].'" name="text_event_th"/>
            <input type="hidden" value="'.$row["date"].'" name="date_event"/>
            <input type="submit" class="btn btn-warning" value="Edit">
        </form></td>
        <td>
        <form action="process_event_th_delete.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_event_th" value="'.$row["id"].'"/>
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </td>
      </tr>';

            }   
        } else {
            echo "No result in Database";
        }
        $conn->close();
    }
    function manageEventEN(){
        $conn = $this->connDataBase();
        $sql = "SELECT id,text, date FROM event_en";
        $result = $conn->query($sql);
        $valueCheck = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            
        echo '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["date"].'</td>
        <td>'.$row["text"].'</td>
        <td>
        <form action="event_en_edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_event_en" value="'.$row["id"].'"/>
            <input type="hidden" value="'.$row["text"].'" name="text_event_en"/>
            <input type="hidden" value="'.$row["date"].'" name="date_event"/>
            <input type="submit" class="btn btn-warning" value="Edit">
        </form></td>
        <td>
        <form action="process_event_en_delete.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_event_en" value="'.$row["id"].'"/>
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </td>
      </tr>';

            }   
        } else {
            echo "No result in Database";
        }
        $conn->close();
    }

    function manageNewsEN()
    {
        $conn = $this->connDataBase();
        $sql = "SELECT id,text, name_img FROM news_en";
        $result = $conn->query($sql);
        $valueCheck = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            
        echo '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["text"].'</td>
        <td><img src="../uploads/news_en/'.$row["name_img"].'" width="50px" height="50px" id="l1"></td>
        <td>
        <form action="news_en_edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_news_en" value="'.$row["id"].'"/>
            <input type="hidden" value="'.$row["text"].'" name="text_news_en"/>
            <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
            <input type="submit" class="btn btn-warning" value="Edit">
        </form></td>
        <td>
        <form action="process_new_en_delete.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_news_en" value="'.$row["id"].'"/>
            <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </td>
      </tr>';

            }   
        } else {
            echo "No result in Database";
        }
        $conn->close();
    }
    function manageNewsTH(){

                    $conn = $this->connDataBase();
                    $sql = "SELECT id,text, name_img FROM news_th";
                    $result = $conn->query($sql);
                    $valueCheck = 0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        
                    echo '<tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["text"].'</td>
                    <td><img src="../uploads/news_th/'.$row["name_img"].'" width="50px" height="50px" id="l1"></td>
                    <td>
                    <form action="news_th_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_news_th" value="'.$row["id"].'"/>
                        <input type="hidden" value="'.$row["text"].'" name="text_news_th"/>
                        <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
                        <input type="submit" class="btn btn-warning" value="Edit">
                    </form></td>
                    <td>
                    <form action="process_new_th_delete.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_news_th" value="'.$row["id"].'"/>
                        <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                    </td>
                  </tr>';

                        }   
                    } else {
                        echo "No result in Database";
                    }
                    $conn->close();

    }

    function managePerEN(){
                    $conn = $this->connDataBase();
                    $sql = "SELECT id,text, name_img FROM per_en";
                    $result = $conn->query($sql);
                    $valueCheck = 0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        
                    echo '<tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["text"].'</td>
                    <td><img src="../uploads/per_en/'.$row["name_img"].'" width="50px" height="50px" id="l1"></td>
                    <td>
                    <form action="per_en_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_news_en" value="'.$row["id"].'"/>
                        <input type="hidden" value="'.$row["text"].'" name="text_news_en"/>
                        <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
                        <input type="submit" class="btn btn-warning" value="Edit">
                    </form></td>
                    <td>
                    <form action="process_per_en_delete.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_news_en" value="'.$row["id"].'"/>
                        <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                    </td>
                  </tr>';

                        }   
                    } else {
                        echo "No result in Database";
                    }
                    $conn->close();
    }

    function managePerTH(){
                      $conn = $this->connDataBase();
                    $sql = "SELECT id,text, name_img FROM per_th";
                    $result = $conn->query($sql);
                    $valueCheck = 0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        
                    echo '<tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["text"].'</td>
                    <td><img src="../uploads/per_th/'.$row["name_img"].'" width="50px" height="50px" id="l1"></td>
                    <td>
                    <form action="per_th_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_news_th" value="'.$row["id"].'"/>
                        <input type="hidden" value="'.$row["text"].'" name="text_news_th"/>
                        <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
                        <input type="submit" class="btn btn-warning" value="Edit">
                    </form></td>
                    <td>
                    <form action="process_per_th_delete.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_news_th" value="'.$row["id"].'"/>
                        <input type="hidden" value="'.$row["name_img"].'" name="name_file_img"/>
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                    </td>
                  </tr>';

                        }   
                    } else {
                        echo "No result in Database";
                    }
                    $conn->close();
    }

}

?>