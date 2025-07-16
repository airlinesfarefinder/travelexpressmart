<style>
#explore {
    margin-top: 50px;


}

.explore_title_wrapper {
    margin-bottom: 30px;
}



.explore_title_wrapper h {}

.explore_item {

    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
}

.explore_img_wrapper {
    position: relative;
    display: block;
    width: 100%;
   
}

.explore_img {
    position: relative;
    display: block;

    background-repeat: no-repeat;
    background-position:center;
    width: 100%;
    height: 120px;
     background-size: cover;
     object-fit: contain;
     border-top-right-radius: 8px;
      border-top-left-radius: 8px;

}

.explore_content_detail {
    position: relative;
    display: inline-block;
    width: 100%;
    padding:10px;
}

.airport_title {
    /* width: 100%;
    float: left; */

    display: flex;
    justify-content: space-between;
    align-items: center;

}

.airport_left p {
    /* margin-top:-4px; */


    margin-bottom: -2px;
    margin-top: -10px;
}

.airport_right p {
    /* float: left; */

    margin-bottom: -2px;
    margin-top: -10px;
}


@media (max-width: 767px) {
     .explore_title_wrapper {

    padding: 0px 15px;
}

.explore_item{
    margin-bottom: 20px;
}

}


</style>


<div id="explore">
    <div class="container">
        <div class="row">
            <div class="explore_title_wrapper">
                <h2>explore for your next trip</h2>
                <p>Based on your most recent searches or your location</p>

            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="explore_item">
                    <div class="explore_img_wrapper">
                        <div style="background: url('./images/images/Canada.jpg');"
                         class="explore_img">

                        </div>
                    </div>

                    <div class="reommended_content_detail">
                        <div class="airport_title">
                            <div class="airport_left">
                                <h4>New York</h4>
                                <p>Sep 18 - Oct 19</p>
                            </div>
                            <div class="airport_right">
                                <h4>$592</h4>
                                <p>Round Trip</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="explore_item">
                    <div class="explore_img_wrapper">
  <div style="background: url('./images/images/capetown.jpg');"
                         class="explore_img">

                        </div>
                    </div>

                    <div class="reommended_content_detail">
                        <div class="airport_title">
                            <div class="airport_left">
                                <h4>New York</h4>
                                <p>Sep 18 - Oct 19</p>
                            </div>
                            <div class="airport_right">
                                <h4>$592</h4>
                                <p>Round Trip</p>
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="explore_item">
                    <div class="explore_img_wrapper">
  <div style="background: url('assets/images/dubai.jpg');"
                         class="explore_img">

                        </div>
                    </div>

                    <div class="reommended_content_detail">
                        <div class="airport_title">
                            <div class="airport_left">
                                <h4>New York</h4>
                                <p>Sep 18 - Oct 19</p>
                            </div>
                            <div class="airport_right">
                                <h4>$592</h4>
                                <p>Round Trip</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="explore_item">
                    <div class="explore_img_wrapper">
  <div style="background: url('assets/images/tokyo.jpg');"
                         class="explore_img">

                        </div>
                    </div>

                    <div class="reommended_content_detail">
                        <div class="airport_title">
                            <div class="airport_left">
                                <h4>New York</h4>
                                <p>Sep 18 - Oct 19</p>
                            </div>
                            <div class="airport_right">
                                <h4>$592</h4>
                                <p>Round Trip</p>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>


        </div>

    </div>
</div>