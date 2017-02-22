<?php include('header.php'); ?>
<?php include('admin/connect.php'); 
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
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
             
                    <li>
                        <span><a href="about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a></span>
                    </li>

                    <li>
                        <span><a href="contact.php"><i class="icon-phone-sign icon-large"></i>Contact US</a></span>
                    </li>
                    <li  class="selected">
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

                        <h3>Susan Ice Store</h3>
                        <div class="signup">
                            <a href="signup.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Sign Up</a>
                        </div>
                        <hr>

                        <div class="row-fluid">
                            <div class="span12">

                                <div class="row-fluid">
                                    <div class="span2"></div>
                                    <div class="span8">
                                        <ul class="thumbnails">
                                            <li class="span12">
                                                <div class="thumbnail">
                                                    <img data-src="holder.js/300x200" alt="">
                                                    <form class="form-horizontal" method="post">
                                                        <div class="alert alert-info"><strong>Login</strong></div>
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputEmail">Email</label>
                                                            <div class="controls">
                                                                <input type="text" id="inputEmail" name="username" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputPassword">Password</label>
                                                            <div class="controls">
                                                                <input type="password" id="inputPassword" name="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="controls">

                                                                <button type="submit" class="btn btn-info" name="login"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                                                            </div>
                                                            <br>
                                                            <?php
                                                            if (isset($_POST['login'])) {
    function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysql_real_escape_string($str);
										}
										
                                                                $username = clean($_POST['username']);
                                                                $password = clean($_POST['password']);

                                                                $query = mysql_query("select * from tb_member where Email='$username' and Password='$password' ") or die(mysql_error());
                                                                $count = mysql_num_rows($query);
                                                                $row = mysql_fetch_array($query);
                                                                if ($count > 0) {
                                                                    session_start();
																	     session_regenerate_id();
                                                                    $_SESSION['id'] = $row['memberID'];
                                                                    header('location:user_wines.php');
																	session_write_close();
                                                                } else {
																session_write_close();
                                                                    ?>

                                                                    <div class="alert alert-error">Please check your username and password</div>
                                                                <?php }
                                                            }
                                                            ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                        </ul>





                                    </div>
                                    <div class="span2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
                <div id="footer">
<?php include('footer.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include('footer_bottom.php');
    ?>
</body>



</html>