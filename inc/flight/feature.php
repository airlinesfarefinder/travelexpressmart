
<style>
#feature {
  margin-top: 50px;
  /* background-color: #efefef; */
}

.feature_title h2 {
  font-size: 30px;
  margin-bottom: 35px;
  font-weight: 700;
  text-align: center;
}

.feature_item {
  /* background-color:#ccc; */

  border-radius: 5px;
  height: 100%;
  padding-left: 20px;
  padding-block: 5px;
  /* border-right: 1px dashed grey; */
  
}

.feature_detail {
  padding: 5px;
  margin-inline: auto;
  text-align: left;
  padding-left: 15px;
}

.feature_detail h6 {
  font-size: 16px;
  font-weight: bold;
}

.value_tick:after {
  content: "";
  position: absolute;
  left: 0.4rem;
  top: 1.5rem;
  width: 40px;
  height: 40px;
  background-position: center;
  background-size: contain;
  background-repeat: no-repeat;
}


.value_tick1:after {
  background-image: url('./images/images/wallet.png');
}

.value_tick2:after {
  background-image: url('./images/images/exchange.png');
}

.value_tick3:after {
  background-image: url('./images/images/refund.png');
}

.value_tick4:after {
  background-image: url('./images/images/discount.png');
}

.feature_detail p {
  font-size: 16px;
  color: #313541;
}

 @media (max-width: 767px) {
   .feature_title h2 {
  text-align: center;
}

.value_tick:after {
 
  left: 2rem;

  width: 30px;
  height: 30px;
 
  
}

.feature_detail {
  padding: 5px;
 
  padding-left: 25px;
}


 }

</style>


<div id="feature">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="feature_title">
                    <h2>Why book with us?
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-3 mb-3">
                <div class="gutter">
                    <div class="feature_item">

                    <div class="value_tick  value_tick1">
                        <div class="feature_detail">
                            <h6> Easy ways to pay</h6>
                            <p>Spread the cost, paying in instalments as often as you like up to 28 days before you travel</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mb-3">
                <div class="gutter">
                    <div class="feature_item">
                          <div class="value_tick  value_tick2">
                        <div class="feature_detail">
                            <h6>Freedom to change</h6>
                            <p>Change your holiday online with low change fees up to 28 days before departure</p>
                        </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
                <div class="gutter">
                    <div class="feature_item">

  <div class="value_tick  value_tick3">
                        <div class="feature_detail">
                            <h6> Refund guarantee</h6>
                            <p>Cancel up to 60 days before you travel and get your deposit back as credit</p>
                        </div>
  </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3  mb-3">
                <div class="gutter">
                    <div class="feature_item">
                          <div class="value_tick value_tick4">
                        <div class="feature_detail">
                            <h6>
                               Great offers & discounts</h6>
                            <p>Unbeatable prices, free child places, plus other discounts and deals</p>
                        </div>
                          </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>