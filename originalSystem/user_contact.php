<?php include('header.php'); ?>
<?php include('session.php'); ?>
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
                <a href="user_index.php" class="logo"><img src="images/wine8.png"alt=""></a>
                <ul>
                    <li>
                        <span><a href="user_index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>
                    <li>
                        <span><a href="user_wines.php"><i class=" icon-th-large icon-large"></i>Products</a></span>
                    </li>

                    <li>
                        <span><a href="user_about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a></span>
                    </li>

                    <li  class="selected">
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
                        <h3>Contact Us</h3>
                        <hr>
                        <form action="">
                            <label for="name"><span>name</span>
                                <input type="text" name="name" id="name">
                            </label>
                            <label for="email2"><span>email</span>
                                <input type="text" name="email2" id="email2">
                            </label>
                            <label for="message"><span>message</span>
                                <textarea id="message" cols="30" rows="10"></textarea>
                            </label>
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                            <button   class="btn btn-success" value="Submit"><i class="icon-envelope"></i>&nbsp;Submit</button>
                        </form>
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