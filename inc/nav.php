
<style>


    @media (min-width: 769px) {
  #nav_toggle {
    display: none !important;
  }
}

</style>

<div id="nav">
    <div class="container-fluid">
        <div class="row">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3  col-xs-5">
                            <a href="index.php">
                                <div class="logo"></div>
                            </a>
                        </div>


                        <div class="col-sm-6">
                            <div id="nav_menu" class="menu content">
                                <ul class="clearfix">
                                    <li>
                                        <a href="index.php">
                                            Home
                                        </a>
                                    </li>

                                    <li>
                                        <a href="us-flights.php">
                                            Flight
                                        </a>
                                    </li>


                                    <li>
                                        <a href="cruise.php">
                                            Cruise
                                        </a>
                                    </li>


                                    <li>
                                        <a href="car-rental.php">
                                            Car Rental
                                        </a>
                                    </li>



                                    <li>
                                        <a href="about.php">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-sm-3 col-xs-7">
                            <div class="menu right">
                                <ul class="clearfix">
                                    <li class="withicon">
                                        <a href="tel:<?php echo config('phone_number'); ?>">
                                            <span class="icon"
                                                style="background-image:url('assets/img/help.png'); width:35px;"></span>&nbsp;
                                            <?php echo config('phone_number'); ?>
                                        </a>
                                    </li>
                                    <li style="color:black;" id="nav_toggle" class="icononl" onclick="toggle_nav()">
                                        <span class="ico" style="background-image:url('assets/img/menu.png');
                                         
                                             width: 20px;
    display: block;
    height: 20px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
                                         
                                         
                                         ">


                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>