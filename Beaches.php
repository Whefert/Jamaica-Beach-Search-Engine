<?php 
require "Beach.php";

class Beaches{

    private $beaches =[];
    private $allBeachesQuery = "SELECT beach.beach_id, beach.beach_name, beach.licensed, beach.entrance_fee, beach.opening_hour, beach.closing_hour, address.address_line1, address.address_line2, parish.parish FROM beach 
    LEFT JOIN address ON beach.address_id = address.address_id
    LEFT JOIN parish ON address.parish_id = parish.parish_id;";

    public function getAllBeaches() {
        global $conn;
        $result = mysqli_query($conn, $this->allBeachesQuery);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $beach = new Beach($row["beach_id"], $row["beach_name"], $row["address_line1"],$row["address_line2"], $row["parish"], $row["licensed"], $row["entrance_fee"], $row["opening_hour"], $row["closing_hour"]);
            $beach->showBeach();
        }        
        } else {
        echo "No beaches found";
        }

    }

}
?>