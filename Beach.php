<?php
class Beach{
    private $id;
    private $name;
    private $parish;
    private $licensed;
    private $entrance_fee;
    private $opening_hour;
    private $closing_hour;
    private $image;

    function __construct($id, $name, $parish, $licensed, $entrance_fee,$opening_hour, $closing_hour, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->parish = $parish;
        $this->licensed = $licensed;
        $this->entrance_fee = $entrance_fee;
        $this->opening_hour = $opening_hour;
        $this->closing_hour = $closing_hour;
        $this->image = $image;
      }

    function showBeach(){
      $licensed = $this->licensed?"Yes": "No";
      $beachName = explode(" ", $this->name);
      echo '
      <div class="row g-0">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="./images/' . $this->image . '" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8 ps-5">
            <div class="card-body d-flex flex-column justify-content-between h-100">
              <h2 class="card-title display-1">' . $this->name . '</h2>
              <p class="card-text text-uppercase address"><i class="bi bi-geo-alt-fill"></i> ' . $this->parish .  '</p>
              <div class="row">
                    <p class="card-text col-5"><i class="bi bi-clock-history"></i> Opening hours: '. $this->opening_hour . " - ". $this->closing_hour .' </p>
                    <p class="card-text col-3"><i class="bi bi-person-fill-lock"></i> Licensed: '.$licensed. ' </p>
                    <p class="card-text col-4"><i class="bi bi-coin"></i> Entrance Fee: USD $'. $this->entrance_fee .'</p>
              </div>
              <a href="https://www.google.com/maps/place/'. $beachName[0]."+".  $beachName[1] . "+". 'Jamaica" class="btn btn-outline-success" >Get directions</a>
            </div>
          </div>
        </div>
      </div>
    </div> ';
    }

    public static function insertBeach($name, $parish_id, $owner_1, $owner_2, $licensed, $entrance_fee, $opening_hour, $closing_hour, $image){
      $insertBeacheQuery = "INSERT INTO beach (beach_name, parish_id, owner_1, owner_2, licensed, entrance_fee, opening_hour, closing_hour, image) VALUES ('$name', $parish_id, '$owner_1', '$owner_2', $licensed, $entrance_fee, '$opening_hour', '$closing_hour', '$image')";
      global $conn;
      
      try {
        mysqli_query($conn, $insertBeacheQuery);
      } catch (Exception $e) {
        return;
      }
    }
}

?>