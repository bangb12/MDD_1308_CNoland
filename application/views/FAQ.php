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
        <div id="content">
            <!--Div for the content.-->
            <ul>
                <li><h4>What is this app for?</h4>
                <p>This is a personal space for me to show off content. </p></li>
                <li><h4>Who are you?</h4>
                <p>My name is Chris Noland, and I'm a student in Web Design</p></li>
                <li><h4>More will be added later....</h4></li>
            </ul>
        </div>
    </div>
</body>

</html>