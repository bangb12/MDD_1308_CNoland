<!DOCTYPE html>
    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Libraries/Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Listings - Chris Noland's Space</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <a href=?action=home><img src="Assets/images/logo.jpg" alt="Chris Noland's Space" width="242px" height="102px" id="logo"></a><?
            //If statement that checks if a user is logged in, if yes it takes away the login and signup buttons and adds the logout.
            if($this->session->userdata('logged_in')){
                echo('<a href=?action=logout><h2>Logout</h2></a>');
            }else{
                echo('<a href=?action=register><h2>Sign-up</h2></a><a href=?action=login><h2>Log-In</h2></a>');
            }
            echo('<a href=?action=faq><h2>FAQ</h2></a>');
            ?>
        </header>
        <div id="listingcontent">
            <!--Div's for the projects.-->
            <div class="project">
                <a href="?action=details1"><h1>Eclipse Store Project</h1></a>
                <img src="Assets/images/Store-small.jpg" class="hidden-phone"/>
                <p>This was school project to design a partially working javascript store.</p>
            </div>
            <div class="project">
                <a href="?action=details2"><h1>Adobe Flash Game</h1></a>
                <img src="Assets/images/game-small.jpg" class="hidden-phone"/>
                <p>A school project of a small flash game involving a fairy, trolls and diamond projectiles</p>
            </div>
                <br />
                <br />    
                <h5>Email bangb12@fullsail.edu if you have issues with the site</h5>
                <a href=?action=tos><h5>Terms of Service</h5></a>
                <h5>&copy Christopher Noland and Chris Noland's Space 2013</h5>
            </div>
        </div>
    </div>
</body>

</html>
