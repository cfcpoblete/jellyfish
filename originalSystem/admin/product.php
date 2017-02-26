<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">


            <!-- navbar -->
            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->
                        <a class="brand" href="#">Grande' Uva Vino</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->

                            <ul class="nav">
                                <li><a href="home.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                                <li  class="active"><a href="product.php"><i class="icon-th icon-large"></i>&nbsp;Products</a></li>
                                <li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;Members</a></li>
                                <li><a href="orders.php"><i class="icon-truck icon-large"></i>&nbsp;Orders</a></li>
                                <li><a href="reports.php"><i class="icon-file icon-large"></i>&nbsp;Reports</a></li>
                                <li><a href="user.php"><i class="icon-user icon-large"></i>&nbsp;User</a></li>
                                <li><a  href="#myModal" role="button"  data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--- end navbar -->
            <div class="hero-unit-header">
           <?php include('user_name.php'); ?>
            </div>

            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                        <div class="hero-unit-table">
                            <!-- left nav -->

                            <a href="add_product.php" class="btn btn-info"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Product</a>

                            <!-- right nav -->
                        </div>
                    </div>
                    <div class="span10">

                        <div class="hero-unit-table">   
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-condensed" id="example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Product Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Origin</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from tb_products") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $user_id = $row['productID'];
                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['name']; ?></td> 
                                            <td><?php echo $row['description']; ?></td> 
                                            <td><?php echo $row['category']; ?></td> 
                                            <td><?php echo $row['originated']; ?></td> 
                                            <td><?php echo $row['price']; ?></td> 
                                            <td><?php echo $row['quantity']; ?></td> 
                                            <td width="50" align="center"><img src="<?php echo $row['location']; ?>" class="img-rounded" width="50" height="40"></td> 
                                            <td width="160">
                                                <a href="#userdel<?php echo $user_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a href="edit_product.php<?php echo '?id=' . $user_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                            <!-- product delete modal -->
                                    <div id="userdel<?php echo $user_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete &nbsp;</strong> <?php echo $row['name']; ?>?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_product.php<?php echo '?id=' . $user_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>

                                        </div>
                                    </div>
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>



    <?php include('../footer_bottom.php'); ?>

</body>
</html>


