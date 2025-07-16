<style>
    /* form_banner css */

    #banner {
        position: relative;
        display: block;
        width: 100%;
        min-height: 650px;
        background: url("./images/home/boeing-1731385_1280.jpg");

        background-color: linear-gradient(90deg,
                hsla(233, 100%, 90%, 1) 0%,
                hsla(0, 0%, 89%, 1) 100%);

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #banner .head {
        position: relative;
        display: inline-block;
        width: auto;
        margin-top: 130px;
        margin-bottom: 65px;

        background: linear-gradient(to right, #040404 55%, transparent);
        padding-right: 25px;
        left: 0%;
        border-radius: 15px 0px;
    }

    #banner .head::after {
        content: "";
        position: absolute;
        top: 0;
        left: 23px;
        width: 100px;
        height: 6px;
        background: #ffea54;
        z-index: 1;
    }

    #banner .head .inner {
        padding-left: 22px;
    }

    #banner .head h3 {
        font-size: 17px;
        text-transform: uppercase;
        margin-bottom: 25px;
        color: #fff;
        font-weight: 300;
        letter-spacing: 2px;
        word-spacing: 5px;
    }

    #banner .head h4 {
        font-size: 34px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 800;
    }

    #banner .head h4 .colored {
        color: #ffeb3b;
    }

    #banner .head h2 {
        color: #fff;
        font-size: 29px;
        text-transform: capitalize;
    }

    #banner .search {
        position: relative;

        display: block;

        width: 100%;

        background: #fff90000;

        padding: 15px;

        margin-bottom: 40px;

        box-shadow: 0px 0px 3px #e9d2d2c9;

        backdrop-filter: blur(8px);

        margin-top: 44rem;
        border-radius: 20px;
    }

    #banner .search .input_wrapper {
        position: relative;
        display: block;
        width: 100%;
    }

    #banner .search .input_wrapper label {
        position: absolute;
        display: block;
        color: #000000;
        font-weight: 500;
        z-index: 1;
        left: 10px;
        top: 10px;
        font-size: 14px;
        padding-left: 5px;
    }

    #banner .search .input_wrapper .input {
        position: relative;
        display: block;
        width: 100%;
        text-transform: capitalize;
        height: 52px;
        /* border-radius: 32px; */
        border: 1px solid #f9f9fc;
        padding-top: 22px;
        padding-left: 15px;
        background: #cccccc7d;
        font-size: 12px;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    #banner .search .input_wrapper .input::placeholder {
        color: rgb(53, 53, 53);
        opacity: 1;
    }



    #banner .search .input_wrapper .input:focus {
        /* color:rgb(53, 53, 53);  */
        opacity: 1;

        border: 2px solid rgb(255, 255, 255);
        outline: none;
    }



    #banner .search .title {
        font-size: 15px;
        color: #000000;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        display: block;
    }

    #banner .search .input_wrapper.depart,
    #banner .search .input_wrapper.duration {
        width: 50%;
        float: left;
    }

    #banner .search .input_wrapper.depart .input {
        border-right: 1px solid #ccc;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    #banner .search .input_wrapper.duration .input {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    #banner .search .gutter {
        padding: 2px;
    }

    #banner .search .gutter::after {
        content: "";
        clear: both;
        display: table;
    }

    #banner .search .button.submit {
        padding: 10px 24px;
        margin-top: 7px;

        background: #ffffff;
        margin-right: 5px;
        color: black;
        font-size: 16px;
        border-radius: 3px;
        border: none;
    }


    /* sliding */

    #banner-wrapper {
        position: relative;
        overflow: hidden;
    }

    #banner-wrapper::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        z-index: 8;
        animation: slideBackground 10s infinite ease-in-out;
    }


    
  #banner .overlayflight {
     position: relative;
    display: inline-block;
    width: auto;
    margin-top: 50px;
    margin-bottom: 0px;
    /* background: linear-gradient(to right,#94bbfc 55%, transparent); */
    padding: 15px 10px;
    left: 30%;
    border-radius: 15px 0px;
}
.overlayflight h6{
    color: #ffffff;
    font-size: 20px;
    font-weight: bolder;
}
.overlayflight h3{
    color: #ffffff;
    font-size: 35px;
    font-weight: bolder;
    margin-bottom: 20px;
}


/* #banner .overlayflight::after {
  content: "";
  position: absolute;
  top: 0;
  left: 35%;
  width: 100px;
  height: 6px;
  background: #ffea54;
  z-index: 1;
} */


  @media (max-width: 767px) {
    #banner .search .input_wrapper .input {}


      #banner .overlayflight {
     position: relative;
    display: inline-block;
    width: auto;
    margin-top: 130px;
    margin-bottom: 0px;
    background: linear-gradient(to right, #e9c498 55%, transparent);
    padding: 25px 25px;
    left: 0%;
    border-radius: 15px;
   
    text-align: center;
}

  }




</style>




<div id="banner">



<div class="overlayflight">
  <h6>Secure Your Dream Flight Now</h6>
  <h3>
    Take Off to Exotic Destinations <br />

    <a href="tel:(866) 337-7171"> Call us   (866) 337-7171</a>
  </h3>
  <p>Don't miss out on exclusive offers!</p>
</div>



    <div class="container">

        <div class="row">
            <div class="search">
                <span class="title">Flights</span>
                <form action="">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="gutter">
                                    <div class="input_wrapper">
                                        <label for="">From</label>
                                        <input class="input" type="text" placeholder="any airport">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="gutter">
                                    <div class="input_wrapper">
                                        <label for="">To</label>
                                        <input class="input" type="text" placeholder="any airport">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="gutter">
                                    <div class="input_wrapper depart">
                                        <label for="">Departure</label>
                                        <input class="input" type="text" placeholder="any month">
                                    </div>
                                    <div class="input_wrapper duration">
                                        <label for="">Return</label>
                                        <input class="input" type="text" placeholder="any duration">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="gutter">
                                    <div class="input_wrapper">
                                        <label for="">Travellers</label>
                                        <input class="input" type="text" placeholder="1 Adult">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="gutter">
                                    <div class="input_wrapper">
                                        <label for="">Contact Number</label>
                                        <input class="input" type="text" placeholder="Your Contact Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="gutter">
                                    <div class="input_wrapper">
                                        <label for="">Email Id</label>
                                        <input class="input" type="text" placeholder="Your Email Id">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="button submit pull-right">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>