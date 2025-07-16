<style>
#trending {
    margin-top: 50px;
}

.trending_title {

    margin-bottom: 30px;
    text-align: center;
}

.trending_item_container {
        border-radius: 10px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

.tre_img_wrap {
    position: relative;
    display: block;
    width: 100%;

    
}



.tre_img {
    position: relative;
    display: block;
 
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

    width: 100%;
    min-height: 300px;

 
   border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    /* transition: transform 0.3s ease-in-out;
    transform-origin: center center; */

}



.tre_img:hover {
    /* transform: scale(1.05); */

}



.middle_dark_overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.35);
    z-index: 1;

       border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.customer_info {
    position: absolute;
    top: 10px;
    right: 10px;
    color:rgb(29, 28, 28);
    font-size: 14px;
    font-weight: 800;
    z-index: 2;
    margin: 0;
    padding: 2px 5px;
    background-color: #ffffff;
    border-radius: 4px;
}

.customer_price {
    position: absolute;
    bottom: 10px;
    left: 10px;
    font-size: 14px;
    font-weight: 600;
    padding: 4px 10px;
    color: white;
    /* background: #010080; */
    border-radius: 4px;
    z-index: 2;
    margin: 0;

    font-size:22px;
    font-weight: bold;
}



.overlay1 {}

.overlay2 {}

.tre_text {
    padding: 15px;
    letter-spacing: 0.5px;   
    word-spacing: 1px;     
    line-height: 1.6;        
}


     @media (max-width: 767px) {
   .trending_title {
text-align: center;
}
     }

</style>



<div id="trending">
    <div class="container">

        <div class="row">
            <div class="trending_title">
                <h2>Don't miss these trending cruise holiday deals</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="trending_item_container">
                    <div class="tre_img_wrap">
                        <div class="tre_img"  style=" 
                          background-image: url('./images/home/view-luxurious-cruise-ship (3).jpg');"
                        
                        >
                            <div class="middle_dark_overlay"></div>
                            <p class="customer_info">Selling Fast</p>
                            <p class="customer_price"> Last minute holidays</p>
                        </div>



                    </div>

                    <div class="tre_text">
                        <p>Escape the norm and make the most of our last minute deals. Travelling Jun- Sep. </p>


                    </div>

                </div>
            </div>


            <div class="col-sm-4">
                <div class="trending_item_container">
                    <div class="tre_img_wrap">
                        <div class="tre_img"
                        style=" 
                          background-image: url('./images/home/view-luxurious-cruise-ship (2).jpg');"
                        >
                            <div class="middle_dark_overlay"></div>
                            <p class="customer_info">Unbeatable prices</p>
                            <p class="customer_price"> Holidays under £400</p>
                        </div>


                    </div>

                    <div class="tre_text">
                        <p>
                            Holiday more and spend less with our great range of holiday deals all £400pp or less.
                        </p>


                    </div>

                </div>
            </div>


            <div class="col-sm-4">
                <div class="trending_item_container">
                    <div class="tre_img_wrap">
                        <div class="tre_img"
                        
                        style=" 
                          background-image: url('./images/home/medium-shot-people-sitting-table.jpg');"
                        >
                            <div class="middle_dark_overlay"></div>
                            <p class="customer_info">Don't delay</p>
                            <p class="customer_price"> Summer holiday deals</p>
                        </div>

                    </div>

                    <div class="tre_text">
                        <p>It's not too late to soak up some sun and book your summer getaway today.
                        </p>


                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

