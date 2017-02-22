<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include 'admin/connect.php'; ?>
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
                    <li>
                        <span><a href="user_wines.php"><i class=" icon-th-large icon-large"></i>Products</a></span>
                    </li>

                    <li class="selected">
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








                        <h3>About US</h3>
                        <div class="hero-unit-table">

                            <p>The Company started when don Haliano dream to have his own winery, but unfortunately he was born in a poor fanily.He strive hard with determination to succeed. Until he met SeÃ±orita Olinia, who was born in an elite family. They both love wines. As they got merried they serve their first wine made.They named it as "El Grande Mayor" that means " The First Great Wine".</p>
                            <br>
                            <br>
                            <p> It is popular in Italy where their first branch was established. They named their company Grande' Uva Vino for their great love for wines. He also made a new wine for his wifenamed "DoÃ±a Olivia Grande'". As years went by they had produced several taste of wines namely: Chao Majito, SeÃ±orita Amor, Margarita, Uno Cristina, Estepania, it is named based on their children names. they also produced Majica Vino, Grande' Rosal, Corazon Seran, which is exclusively made for occassions.</p>

                            <br>
                            <br>
                            <p>After several years, the company expanded with popularized wines in every country. Grande' Asta Denar in France, Grande' Estefania Soledad in Spain, Grande' Russo in Russia, El Monita Grande' in Mexico. </p>

                        </div>
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