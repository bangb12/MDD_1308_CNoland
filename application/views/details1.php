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
                <h1>Eclipse Store Project</h1>
                <img src="Assets/images/Store-big.jpg" id="projectimg"/>
                <p>This project was a bit difficult. We were given a fully made web page, and given the task of piecing together Javascript to make
                the site interactive as if it were an actual store. This included making the divs turn into an icon when held and clicked
                and populating the store page when dropped over that part of the website</p>
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