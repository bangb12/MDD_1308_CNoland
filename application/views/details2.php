<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Libraries/Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Details - Chris Noland's Space</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <a href=?action=home><img src="Assets/images/logo.jpg" alt="Chris Noland's Space" width="242px" height="102px" id="logo"></a>
        </header>
        <div id="detailscontent">
            <div class="project">
                <h1>Adobe Flash Game Project</h1>
                <img src="Assets/images/game-big.jpg" id="projectimg"/>
                <p>In this project we took a couple of assets given by our instructor, colored and shaded them, and then used them to make a game.
                I made a couple of animations including a movment animation for the fairy, an explosion animation, and an animation for the troll
                Some actionscript code was also involved</p>
                <?
                if($this->session->userdata('logged_in')){
                    echo('<a href="#">Favorite</a>');
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>