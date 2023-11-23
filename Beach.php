<?php
class Beach{
    private $id;
    private $name;
    private $address_line1;
    private $address_line2;
    private $parish;
    private $licensed;
    private $entrance_fee;
    private $opening_hour;
    private $closing_hour;
    private $image;

    function __construct($id, $name, $address_line1, $address_line2, $parish, $licensed, $entrance_fee,$opening_hour, $closing_hour) {
        $this->id = $id;
        $this->name = $name;
        $this->address_line1 = $address_line1;
        $this->address_line2 = $address_line2;
        $this->licensed = $licensed;
        $this->entrance_fee = $entrance_fee;
        $this->opening_hour = $opening_hour;
        $this->closing_hour = $closing_hour;
      }

    function showBeach(){
        echo   "<div class='col-4'>
          <img src='...' class='img-fluid rounded-start' alt='...'>
        </div>
        <div class='col-8'>
          <div class='card-body'>
            <h5 class='card-title'>$this->name</h5>
            <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class='card-text'><small class='text-body-secondary'>$this->parish </small></p>
            <p class='card-text'><small class='text-body-secondary'>Last updated 3 mins ago</small></p>
          </div>
        </div>";
    }

}

?>