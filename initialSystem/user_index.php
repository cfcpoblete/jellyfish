<?php
include('admin/connect.php');
include('header.php');

?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
        <?php
        include ('navbarfixed.php');
        ?>
        <div id="page">

            <div id="sidebar">

                <a href="user_index.php" class="logo"><img src="images/wine8.png" alt=""></a>
                <ul>
                    <li class="selected">
                        <span><a href="user_index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>
                    <li>
                        <span><a href="user_wines.php"><i class=" icon-th-large icon-large"></i>Products</a></span>
                    </li>

                    <li>
                        <span><a href="user_about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a></span>
                    </li>

                    <li>
                        <span><a href="user_contact.php"><i class="icon-phone-sign icon-large"></i>Contact US</a></span>
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
                            <img src="admin/images/wine.png" data-thumb="images/toystory.jpg" alt="" />
                            <img src="admin/images/brotherhood_winery_cellars_1.jpg" data-thumb="images/toystory.jpg" alt="" />
                            <img src="admin/images/wineries.jpg" data-thumb="images/wineries.jpg" alt="" t />
                            <img src="admin/images/koehler_winery_vines_and_fruit_crop.jpg"  alt="" data-transition="slideInLeft" />
                            <img src="admin/images/winery-sunrise646.jpg" data-thumb="images/nemo.jpg" alt=""  />
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
                                    <a class="figure" href=""><img src="images/our-wines.png" alt=""></a>
                                </li>
                                <li>
                                    <a class="figure" href=""><img src="images/history.png" alt=""></a>
                                    
                                </li>
                                <li>
                                    <a class="figure" href=""><img src="images/about.png" alt=""></a>
                                  
                                </li>
                                <li>
                                    <a class="figure" href=""><img class="img-rounded" src="images/wineries.jpg" alt=""></a>         
                                </li>
                                
                            </ul>
                            
                             <ul>
                                <li>
                                    <a class="figure" href=""><img src="images/wine1.png" alt=""></a>
                                </li>
                                <li>
                                    <a class="figure" href=""><img src="images/wine2.png" alt=""></a>
                                    
                                </li>
                                <li>
                                    <a class="figure" href=""><img src="images/wine3.png" alt=""></a>
                                  
                                </li>
                                <li>
                               <a class="figure" href=""><img class="img-rounded" src="images/wine4.png" alt=""></a>         
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
</body>
</html>