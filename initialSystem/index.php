<?php
include('header.php');
?>
<body>
    <?php
    include('navtop.php');
    ?>

    <div id="background">

        <div id="page">

            <div id="sidebar">

                <a href="user_index.php" class="logo"><img src="admin/images/logo.jpeg" alt="" style="width:200px;height:100px;"></a>
                <ul>
                    <li class="selected">
                        <span><a href="index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>
                    

                    <li>
                        <span><a href="about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a></span>
                    </li>

                    <li>
                        <span><a href="contact.php"><i class="icon-phone-sign icon-large"></i>Contact US</a></span>
                    </li>
                    <li>
                        <span><a href="order.php"><i class="icon-shopping-cart icon-large"></i>Order Now</a></span>
                    </li>

                </ul>
                <?php include('sidebar.php'); ?>
                <div class="newsletter">

                </div>
            </div>

            <div id="content">
                <div class="hero-unit-table">                        <!-- image slider -->
                    <div class="slider-wrapper theme-default">

                        <div id="slider" class="nivoSlider">
                            <img src="admin/images/logo.jpeg" alt="" style="width:200px;height:300px;"/>
                            <img src="admin/images/iceCube.png" alt="" style="width:200px;height:300px;"/>
                            <img src="admin/images/crushedIce.png"  alt="" style="width:200px;height:300px;" />
                            <img src="admin/images/iceBlock.jpg"  alt="" data-transition="slideInLeft" style="width:200px;height:300px;"/>
                            
                        </div>

                        <div id="htmlcaption" class="nivo-html-caption">
                            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
                        </div>
                    </div>
                    <!-- end slider -->

                    <div id="body">

                        <div class="body">
                            <ul>
                                <li>
                                    <a class="figure" href=""><img src="images/ice1.jpg" alt="" style="width:180px;height:180px;"></a>
                                </li>
                                <li>
                                    <a class="figure" href=""><img src="images/ice2.jpg" alt="" style="width:180px;height:180px;"></a>

                                </li>
								
                                <li>
                                   <a class="figure" href=""><img src="images/crashed.jpg" alt="" style="width:180px;height:180px"></a>

                               </li>
                                <li>
                                    <a class="figure" href=""><img class="img-rounded" src="images/tube.jpg" alt="" style="width:180px;height:180px"></a>         
                               </li>
								

                            </ul>

                            
                        </div>

                    </div>
                    <div id="footer">
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer_bottom.php') ?>
</body>
</html>