<?php include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
 ?>
<body>

    <div class="row-fluid">
        <div class="span12">


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


                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->


                        </div>

                    </div>
                </div>
            </div>
            <div class="hero-unit-header">

            </div>
            <div class="row-fluid">
                <div class="login-center">
                    <div class="span7">
                        <div class="hero-unit-table">
                            <!-- login -->
                            <form class="form-horizontal" method="post">
                                <div class="alert alert-info"><strong>Login</strong></div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Username</label>
                                    <div class="controls">
                                        <input type="text" name="username" id="inputEmail" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" id="inputPassword" placeholder="Password">
                                    </div>
                                </div>


                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="login" class="btn btn-info"><i class="icon-signin"></i>&nbsp;Sign in</button>
                                    </div>
   <?php
                                if (isset($_POST['login'])) {
								
								      function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return ($str);
                                    }
                                    $username = clean($_POST['username']);
                                    $password = clean($_POST['password']);

                                    $query = mysqli_query("SELECT * from tb_user where username='$username' and password='$password'");
                                    $count = mysqli_num_rows($query);
                                    $row = mysqli_fetch_array($query);


                                    if ($count > 0) {
                                       session_start();
                                        session_regenerate_id();
                                        $_SESSION['id'] = $row['user_id'];
                                        header('location:home.php');
										session_write_close();
                                    } else {
									   session_write_close();
                                        ?>
                                      <br>
                                      
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Please Check Your Username And Password</div>
                                      
                                        <?php
                                    }
                                }
                                ?>

                                </div>

                             

                            </form>


                            <!-- end login -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




>

</body>
</html>


