<?php include('session.php'); ?>
<?php include('header.php'); ?>

<?php include('admin/connect.php'); ?>

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
                    <li>
                        <span><a href="user_index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>
                    <li  class="selected">
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
                <div class="hero-unit-table"> 
                    <div id="header">
                        <img src="images/mountains.jpg" width="938" halt="" class="img-rounded">

                    </div>
                    <div id="body">



                        <h3>List of Our Products</h3>
                        <p>
                        <div class="hero-unit-table">...</div>

                        </p>
                        <ul class="thumbnails">
                            <?php
                            $query = mysql_query("select * from tb_products") or die(mysql_error());
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
                                        <a href="#add<?php echo $id; ?>"   data-toggle="modal" class="btn btn-danger"><i class="icon-shopping-cart icon-large"></i>&nbsp;Add to Cart</a>

                                        <?php include('order_modal.php'); ?>
                                    <?php } ?>
                                    <?php
                                    if (isset($_POST['order'])) {
                                        $member_id = $_POST['member_id'];
                                        $quantity = $_POST['quantity'];
                                        $price = $_POST['price'];
                                        $product_id = $_POST['product_id'];
                                        $total = $quantity * $price;
                                        mysql_query("insert into order_details (memberID,qty,productID,price,total) values('$member_id','$quantity','$product_id','$price','$total')") or die(mysql_query);
                                        header('location:user_wines.php');
                                    }
                                    ?>
                        </ul>

                    </div>
                    <div id="footer">
                        <?php include('footer_user.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php include('footer_bottom.php'); ?>
</body>



</html>