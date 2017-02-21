 <?php

/*
UserCake Version: 2.0.2
http://usercake.com
*/
echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>".$websiteName."</title>
<link href='".$template."' rel='stylesheet' type='text/css' />
<link rel='stylesheet' href='".$externalCss."'>
<link rel='stylesheet' href='". $font ."'>
<script src='models/funcs.js' type='text/javascript'></script>
<script src='".$externalJs."' type='text/javascript'></script>
 <link rel='stylesheet' href='".$icons."'>
 
</head>
<body>
";




 echo '<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
         <div class="mdl-layout__header-row">
            <!-- Title -->
		 	<span class="mdl-layout-title">
               <a class="mdl-navigation__link" href="account.php">Home</a>
            </span>            
		
			<span class="mdl-layout-title">
               <a class="mdl-navigation__link" href="admin.php">Administrator</a>
            </span>

            <span class="mdl-layout-title">
               <a class="mdl-navigation__link" href="order.php">Order</a>   
            </span>

            <span class="mdl-layout-title">
               <a class="mdl-navigation__link" href="complete_order.php">Complete Order</a>
            </span>

            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
            ';  



 echo       '</nav>
         </div>
      </header>
      <div class="mdl-layout__drawer">
         <span class="mdl-layout-title">Learn</span>
         <nav class="mdl-navigation">';


if (!securePage($_SERVER['PHP_SELF'])){die();}

//Links for logged in user
if(isUserLoggedIn()) {
   echo "
   <a class='mdl-navigation__link' href='user_settings.php' style='color:gray'>User Settings</a>
   <a class='mdl-navigation__link' href='question_create.php' style='color:gray'>Create Question</a>
   <a class='mdl-navigation__link' href='quizGame.php' style='color:gray'>Answer Question</a>
   <a class='mdl-navigation__link' href='logout.php' style='color:gray'>Logout</a>
   ";
   
   //Links for permission level 2 (default admin)
   if ($loggedInUser->checkPermission(array(2))){
   echo "
   <a class='mdl-navigation__link' href='admin_configuration.php' style='color:gray'>Admin Configuration</a>
   <a class='mdl-navigation__link' href='admin_users.php' style='color:gray'>Admin Users</a>
   <a class='mdl-navigation__link' href='admin_permissions.php' style='color:gray'>Admin Permissions</a>
   <a class='mdl-navigation__link' href='admin_pages.php' style='color:gray'>Admin Pages</a>
   <a class='mdl-navigation__link' href='admin_questions.php' style='color:gray'>Admin Questions</a>
   ";
   }
} 
//Links for users not logged in
else {
   echo "
   <a class='mdl-navigation__link' href='index.php' style='color:gray'>Home</a>
   <a class='mdl-navigation__link' href='login.php' style='color:gray'>Login</a>
   <a class='mdl-navigation__link' href='register.php' style='color:gray'>Register</a>
   <a class='mdl-navigation__link' href='forgot-password.php' style='color:gray'>Forgot Password</a>";
   if ($emailActivation)
   {
   echo "<a class='mdl-navigation__link' href='resend-activation.php' style='color:gray'>Resend Activation Email</a>";
   }
}

 echo        '</nav>
      </div>

   <div class = "main-content">
   ';

   ?>
