<?php 

class Parish{
    
    public static function findParishID($parish_name): int{
        global $conn;
        $parishIdQuery = "SELECT parish_id FROM parish WHERE parish.parish = '$parish_name' LIMIT 1;";
        $result = mysqli_query($conn, $parishIdQuery);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        return $row['parish_id'];
        } else {
            return 1;
        }
    }


    public static function  insertParish($parish){
        $insertParishQuery = "INSERT INTO parish (parish) VALUES ('$parish')";
        global $conn;
        try{
        $result = mysqli_query($conn, $insertParishQuery);
        if($result){
            return;
        }}catch(Exception $e){
            return;
        }
      }
}


?>