<?php include('header.php'); ?>
<?php include('admin/connect.php'); ?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
        <div id="page">
            <div id="sidebar">
                <a href="index.php" class="logo"><img src="images/wine8.png" alt=""></a>
                <ul>
                    <li>
                        <span><a href="index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>
                    <li  class="selected">
                        <span><a href="wines.php"><i class=" icon-th-large icon-large"></i>Products</a></span>
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
                <div class="hero-unit-table"> 
                    <div id="header">
                        <img src="images/mountains.jpg" width="938" halt="" class="img-rounded">

                    </div>
                    <div id="body">


                        <h3>List of Our Products</h3>
                        <p>
                        <div class="hero-unit-table">..</div>
                        </p>

                        <ul class="thumbnails">
                            <?php
                            $query = mysqli_query("select * from tb_products") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
                                ?>

                                <li class="span3">
                                    <div class="thumbnail">
                                        <img data-src="holder.js/300x200" alt="">
                                        <div class="alert alert-danger"><div class="font1"><?php echo $row['name']; ?></div></div>
                                        <hr>


                                        <a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>


                                        <p>
                                            <a> Price: <?php echo $row['price']; ?></a>
                                        </p>




                                    </div>
                                </li>

                                <!-- picture modal -->
                                <div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                    </div>
                                    <div class="modal-body">

                                        <div class="span2">

                                            <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
                                        </div>
                                        <div class="span3">
                                            <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Description:</p></div>   
                                            <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['description'] ?></div>
                                            <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Origin:</p></div>
                                            <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['originated'] ?></div>
                                            <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Price:</p></div>
                                            <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;<?php echo $row['price'] ?></div>
                                        </div>





                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
                                    </div>
                                </div>
                                <!-- end modal -->


                            <?php } ?>

                        </ul>






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