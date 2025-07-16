<style>
  #cruise_banner {
    position: relative;
    display: block;
    width: 100%;
    padding-bottom: 30px;
  }

  #cruise_banner .head {
    position: relative;
    display: block;
    width: 100%;
    background: #6a11cb;
    padding: 16px;
    text-transform: capitalize;
    text-align: center;
    font-size: 18px;
    color: #fff;
    font-weight: 600;
    
    margin-top: 65px;
  }

  #cruise_banner .banner {
    position: relative;
    display: block;
    width: 100%;
    height: 250px;
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  #cruise_banner .featured_lines {
    position: relative;
    display: block;
    width: 100%;
    text-align: center;
    padding: 10px;
  }

  #cruise_banner .featured_lines .line {
    position: relative;
    display: inline-block;
    padding: 7px 15px;
    background: #00e5ff;
    border-radius: 5px;
    font-size: 15px;
    font-weight: 600;
    width: auto;
    margin-top: -1px;
  }

  #cruise_banner .cta {
    position: relative;
    display: block;
    width: 100%;
    text-align: center;
  }

  #cruise_banner .cta .title {
    position: relative;
    display: block;
    width: 100%;
    text-align: center;
    font-size: 17px;
    font-weight: 600;
  }

  #cruise_banner .cta .blink_title {
    font-size: 16px;
    color: #b31b4f;
    font-weight: 800;
    margin: 8px 0px;
    position: relative;
    display: block;
  }

  .call_button {
    position: relative;
    display: flex;
    justify-content: center;
    /* Horizontal center */
    align-items: center;
    /* Vertical center */
    gap: 15px;
    width: 100%;
    /* background: linear-gradient(45deg, #0072a5, #002634); */
   background: linear-gradient(45deg, #ff512f, #dd2476);


    padding: 15px 20px;
    border: none;
    text-align: left;
    box-shadow: 1px 4px 7px -1px #00000094;
  }

  .call_button .icon {
    width: 50px;
    height: 50px;
    background: url("../img/popup/phone-call.png") center/contain no-repeat;
    flex-shrink: 0;
  }

  .call_button .text {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .call_button .text h3 {
    font-size: 14px;
    color: #fff;
    margin: 0;
    text-transform: capitalize;
      margin-bottom: 10px;
  }

  .call_button .text p {
    font-size: 25px;
    color: #fff;
    margin: 5px 0 0 0;
    font-weight: 700;
  }

  .blink {
    animation: blink 1s ease-in-out infinite;
  }

  @keyframes blink {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  #cruise_banner .gutter {
    padding: 10px;
  }

  #cruise_banner .call_button {
    border-radius: 25px;
  }

  #cruise_banner .outrow {
    position: relative;
    display: block;
    width: 100%;
    text-align: center;
    padding: 10px 20px;
    font-size: 15px;
    font-weight: 600;
    color: #2d2d2d;
  }

  #cruise_banner .pills {
    position: relative;
    display: block;
    width: 100%;
    padding: 0 15px;
    margin: 0;
    list-style: none;
  }

  #cruise_banner .pills li {
    position: relative;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background: #dd2476;

    border-radius: 12px;
    margin: 10px 0;
    padding-left: 40px;
    color: #fff;
  }

  #cruise_banner .pills li::after {
    content: "";
    position: absolute;
    top: 13px;
    left: 15px;
    width: 7px;
    height: 12px;
    border: 2px solid #ffb530;
    border-left: 0;
    border-top: 0;
    transform: rotate(45deg);
  }

  #call_now_btn {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
  }

  #call_now_btn .call_button {
    background: #c6d8f9;
    box-shadow: -1px -4px 7px -1px #00000094;
  }

  #call_now_btn .call_button h3 {
    color: #000;
  }

  #call_now_btn .call_button h3 span {
    background: #ffb700;
    padding: 7px;
    border: 1px solid #6f301c;
    border-radius: 7px;
  }

  #call_now_btn .call_button p {
    color: #000;
    font-weight: 800;
  }


  #cruise_banner,
  #call_now_btn {
    display: none;
  }



  @media screen and (max-width: 768px) {

    #cruise_banner,
    #call_now_btn {
      display: block;
    }
  }
</style>


<div id="cruise_banner">

  <a href="tel:(877) 869-0408"></a>
  <div class="head">Car-Rent Helpline</div>
  <div class="banner" style="background-image:url('images/carRental/images/Generic-Banner1.png'); "></div>
  <div class="featured_lines">
    <div class="line">Hot Rental Rates | Quick Getaways</div>
    <div class="line">Roadtrip-Ready Cars</div>

  </div>
  <div class="cta">
    <span class="title">Quick Service – Get the Best Car Deal Fast</span>
    <span class="blink_title blink">Tap to Lock In Your Rental!</span>

    <div class="gutter">
      <button class="call_button">
        <div class="icon animated_icon" style="background-image:url('./images/images/phone.gif')"></div>
        <div class="text">
          <h3>call now for unbeatable rental car rates</h3>
 <a href="tel:(877) 869-0408"  style=" text-decoration: none; font-size:30px; color:white; font-weight:bolder; "    >(877) 869-0408</a>
         
        </div>
      </button>
    </div>
    <p class="outrow">Speak with Our Rental Experts to Save Up to 60% on Car Rentals Across the U.S., Europe, and Beyond!</p>

  </div>
  <ul class="pills">
    <li>Bundle & Save on Car + Hotel Packages</li>
    <li>Wide Selection of Vehicles & Upgrades</li>
    <li>One-Way Rentals & Road Trip Routes</li>
    <li>24/7 Customer Support</li>
    <li>Flexible Booking & Payment Options</li>
  </ul>

</div>

<a href="tel:(877) 869-0408">
<div id="call_now_btn"

  style="
z-index: 9999; 
position: fixed; bottom: 0; left: 0; width: 100%; 
 justify-content: center; align-items: center; 
">
  <button class="call_button">
    <div class="icon animated_icon" style="background-image:url('./images/images/call-ezgif.com-resize.gif');background-size:120%"></div>
    <div class="text">
      <h3>Get Rolling with <span>Up to 60%</span> Off Rental Rates!</h3>

       <a href="tel:(877) 869-0408"  style=" text-decoration: none;font-size: 30px;
    font-weight: bolder;  "    >(877) 869-0408 </a>
    </div>
  </button>
</div>
</a>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const banner = document.getElementById("cruise_banner");

    if (banner) {
      banner.addEventListener("click", function() {
        const link = banner.querySelector("a");
        if (link) {
          link.click();
        }
      });
    }
  });
</script>