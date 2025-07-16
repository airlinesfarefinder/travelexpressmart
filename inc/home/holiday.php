<style>
  #holiday {
    margin-top: 50px;
  }


  .holiday_title h2 {

    font-weight: bold;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }

  .holiday_item {
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  }

  .holiday_img {
    position: relative;
    display: block;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;

    width: 100%;
    border-radius: 10px;
  }




  .holiday_overlay {
    position: absolute;
    bottom: 25px;
    left: 15px;
    color: #ffffff;
    font-weight: bold;
    padding: 2px 8px;
    z-index: 5;
  }

  .dest {
    font-size: 20px;
    color: #ffffff;
  }

  .to {
    font-size: 16px;
    color: #ffffff;
  }

  .price_rate {
    font-size: 35px;
    color: #ffffff;
  }

  .return_info {
    font-size: 14px;
    color: #ffffff;
  }



  @media (max-width: 767px) {


    .holiday_title h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .holiday_overlay {

      bottom: 30px;

    }

  }
</style>

<div id="holiday">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="holiday_title">
          <h2 style="font-size:25px;">The world is yours to
          </h2>
          <h2 style="font-size:30px;">DISCOVER</h2>
        </div>
      </div>


      <div class="col-sm-3">
        <div class="holiday_item">
          <div class="holiday_img_wrapper">
            <div class="holiday_img"
              style="
             background-image:url('./images/flight/paris-city-rooftop-view-with-napoleon-s-tomb-sunset.jpg');
              height:300px;
            "></div>
            <div class="holiday_overlay">
              <p class="dest">Paris flights</p>
              <p class="to">From</p>
              <p class="price_rate">$809</p>
              <p class="return_info">Return, from Seattle, Oct 2025</p>







            </div>
          </div>

        </div>

        <br>
      </div>


      <div class="col-sm-3">
        <div class="holiday_item">
          <div class="holiday_img_wrapper">
            <div class="holiday_img"
              style="
             background-image:url('./images/flight/basilica-our-lady-pillar-from-ebro.jpg');
              height:300px;
            "></div>


            <div class="holiday_overlay">
              <p class="dest">Europe flights</p>
              <p class="to">From</p>
              <p class="price_rate">$700</p>
              <p class="return_info">Return, from Seattle, Oct 2025</p>







            </div>
          </div>

        </div>

        <br>
      </div>


      <div class="col-sm-3">
        <div class="holiday_item">
          <div class="holiday_img_wrapper">
            <div class="holiday_img"
              style="
             background-image:url('./images/flight/new-york-city-manhattan-downtown.jpg');
              height:300px;
            "></div>


            <div class="holiday_overlay">
              <p class="dest">New York flights</p>
              <p class="to">From</p>
              <p class="price_rate">$999</p>
              <p class="return_info">Return, from Seattle, Oct 2025</p>







            </div>
          </div>

        </div>

        <br>
      </div>

    </div>
  </div>
</div>