<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Libraries/Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Sign Up - Chris Noland's Space</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <a href=?action=home><img src="Assets/images/logo.jpg" alt="Chris Noland's Space" width="242px" height="102px" id="logo"></a>
        </header>
        <div id="content">
            <form name="register" action="?action=checkregister" method="post">
                <label><h3>Username:</h3> </label>
                <input type="text" name="username" class="textinput" maxlength="20"/>
                <label><h3>First Name:</h3></label>
                <input type="text" name="firstname" class="textinput" maxlength="20"/>
                <label><h3>Password:</h3></label>
                <input type="password" name="password" class="textinput"/ maxlength="34">
                <label><h3>Email Address:</h3></label>
                <input type="text" name="email" class="textinput" maxlength="30"/>
                <input type="submit" name="submit" value="Submit" id="submitbutton"/>
            </form>
        </div>
    </div>
</body>

</html>
