<style>
    #hero{
        margin:70px 0px;
 position:relative;
      display: block;
    }

.hero_container{
    position:relative;
      display: block;
    background:url('./images/home/vecteezy_3d-plane-flight-in-sky-air-realistic-travel-jet_24238334.jpg');
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
    width:100%;
    min-height:400px;
    border-radius: 7px;
}


.hero_overlay {
    position: absolute;
    top: 50%;
    right: 60px;
    transform: translateY(-50%);
    color: #000000;
    font-weight: bold;
    padding: 14px 31px;
    z-index: 1;
}


 /* .hero_overlay {
   position: absolute;
    bottom: 38%;
    left: 60px;
    color: #000000;
    font-weight: bold;
    padding: 14px 31px;
    z-index: 1;



    
  } */

  .day{
     font-size:20px;
     font-weight:bold;
     color:white;
  }

  .fly{
 font-size:30px;
     font-weight:bold;
    color:white;
  }

  .view{
          padding: 9px 5px;
    background-color: #314b69;
    cursor: pointer;
    text-align: center;
    font-size: 20px;
    border-radius: 8px;
    color:white;
    font-weight: bolder;
  }

  .hero_overlay a:hover{
        text-decoration: none;
  }

    @media (max-width: 767px) {
 .hero_overlay {
   position: absolute;
   display: block;
    top: 25%;
    right: 20%;
    color: #000000;
    font-weight: bold;
    padding: 5px 10px;
    z-index: 1;
  }

    }

</style>

<div id="hero">
    <div class="container-fluid">
        <div class="hero_container">

        </div>

 <div class="hero_overlay">
              <p class="day">Cheapest days</p>
              <p class="fly">to fly in 2025</p>
          <a href="tel:(866) 337-7171">   <p class="view">Call Now</p></a> 
            </div>
    </div>
</div>