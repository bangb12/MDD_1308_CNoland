<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Libraries/Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Log in - Chris Noland's Space</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <a href=?action=home><img src="Assets/images/logo.jpg" alt="Chris Noland's Space" width="242px" height="102px" id="logo"></a>
        </header>
        <div id="content">
                <?php if (isset($_SESSION['errors'])): ?>
                <div class="form-errors">
                    <?php foreach($_SESSION['errors'] as $error): ?>
                        <p><?php echo $error ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?> 
                <form action="?action=checklogin" method="POST">
                <label><h3>Username:</h3> </label>
                <input type="text" name="username" class="textinput" maxlength="20"/>
                <label><h3>Password:</h3></label>
                <input type="password" name="password" class="textinput"/ maxlength="32">
                <input type="submit" name="submit" value="Submit" id="submitbutton"/>
                </form>
        </div>
    </div>
</body>

</html>
