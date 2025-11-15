<?php 
    $title = "View Records";
    require_once './includes/header.php';
    require_once './db/conn.php';
    
	$sql = "SELECT * FROM client_info WHERE 1";
    $result = mysqli_query($conn, $sql);
    //$result contains either the result set object or false

    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["client_id"] . " ";
                echo $row["email"] . " ";
                echo $row["address"] . " ";
                echo $row["city"] . " ";
                echo $row["province"] . " ";
                echo $row["postalcode"] . "<br>";
            }
        }
        else{
            echo "No records found";
        }
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    }

    require_once './includes/footer.php';
?>