<?php
class Beach{
    private $id;
    private $name;
    // private $address_id;
    // private $address_line1;
    // private $address_line2;
    private $parish;
    private $licensed;
    private $entrance_fee;
    private $opening_hour;
    private $closing_hour;
    private $image;

    private $insertBeacheQuery = "SELECT beach.beach_id, beach.beach_name, beach.licensed, beach.entrance_fee, beach.opening_hour, beach.closing_hour, beach.image, address.address_line1, address.address_line2, parish.parish FROM beach 
    LEFT JOIN address ON beach.address_id = address.address_id
    LEFT JOIN parish ON address.parish_id = parish.parish_id;";


    function __construct($id, $name, $parish, $licensed, $entrance_fee,$opening_hour, $closing_hour, $image) {
        $this->id = $id;
        $this->name = $name;
        // $this-> address_id = "";
        // $this->address_line1 = $address_line1;
        // $this->address_line2 = $address_line2;
        $this->parish = $parish;
        $this->licensed = $licensed;
        $this->entrance_fee = $entrance_fee;
        $this->opening_hour = $opening_hour;
        $this->closing_hour = $closing_hour;
        $this->image = $image;
      }

    function showBeach(){
      echo '
      <div class="row g-0">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="' . $this->image . '" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8 ps-5">
            <div class="card-body d-flex flex-column justify-content-between h-100">
              <h2 class="card-title display-1">' . $this->name . '</h2>
              <p class="card-text text-uppercase address"><i class="bi bi-geo-alt-fill"></i> ' . $this->parish .  '</p>
              <div class="row">
                    <p class="card-text col-5"><i class="bi bi-clock-history"></i> Opening hours: '. $this->opening_hour . " - ". $this->closing_hour .' </p>
                    <p class="card-text col-3"><i class="bi bi-person-fill-lock"></i> Licensed: </p>
                    <p class="card-text col-4"><i class="bi bi-coin"></i> Entrance Fee: USD $</p>
              </div>
              <button class="btn btn-outline-success">Get directions</button>
            </div>
          </div>
        </div>
      </div>
    </div> ';
    }

    public static function insertBeach($name, $parish_id, $owner_1, $owner_2, $licensed, $entrance_fee, $opening_hour, $closing_hour, $image){
      $insertBeacheQuery = "INSERT INTO beach (beach_name, parish_id, owner_1, owner_2, licensed, entrance_fee, opening_hour, closing_hour, image) VALUES ('$name', $parish_id, '$owner_1', '$owner_2', $licensed, $entrance_fee, '$opening_hour', '$closing_hour', '$image')";
      global $conn;
      $result = mysqli_query($conn, $insertBeacheQuery);
      if($result){
        echo "New record created successfully";
      } else {
        echo "Error: " . $insertBeacheQuery . "<br>" . $conn->error;
      }
    }

    public static function insertParish($parish){
      $insertParishQuery = "INSERT INTO parish (parish) VALUES ('$parish')";
      global $conn;
      $result = mysqli_query($conn, $insertParishQuery);
      if($result){
        echo "New record created successfully";
      } else {
        echo "Error: " . $insertParishQuery . "<br>" . $conn->error;
      }
    }

}

?>