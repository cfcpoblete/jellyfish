<?php include('header.php'); ?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
        <div id="page">
            <div id="sidebar">
                <a href="index.php" class="logo"><img src="admin/images/logo.jpeg" alt="" style="width:200px;height:100px;"></a>
                <ul>
                    <li>
                        <span><a href="index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>


                    <li class="selected">
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
                <div class="hero-unit-table">
                    <div id="header">
                        <img src="images/mountains.jpg" width="938" halt="" class="img-rounded">

                    </div>
                    <div id="body">








                        <h3>About US</h3>
                        <div class="hero-unit-table">

                            <p>building a website like ordering and inventory system is not easy, you need to trust your developer to build the website. we want the customer to appreciate this project does. the team wants to solve the problem in delivering the products at the same time. but the team did not know how this project will run through the following days, months, and years to come. the team wants to increase sales and deliver the product at the said time.</p>
                            <br>
                            <br>
                            

                        </div>
                    </div>
                    <div id="footer">
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer_bottom.php');
    ?>
</body>
</html>