<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Libraries/Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Sign Up - Chris Noland's Space</title>
    <script type="text/javascript">
        function validateForm()
        {
        var a=document.forms["reg"]["username"].value;
        var b=document.forms["reg"]["password"].value;
        var c=document.forms["reg"]["firstname"].value;
        var d=document.forms["reg"]["email"].value;
        if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
          {
          alert("All Fields must be filled out");
          return false;
          }
        }
    </script>
</head>

<body>
    <div id="wrapper">
        <header>
            <a href="#"><img src="Assets/images/logo.jpg" alt="Chris Noland's Space" width="242px" height="102px" id="logo"></a>
        </header>
        <div id="content">
            <form name="register" action="../controllers/Signup_controller.php">
                <label><h2>Username:</h2> </label>
                <input type="text" name="username" class="textinput"/>
                <label><h2>First Name:</h2></label>
                <input type="text" name="firstname" class="textinput"/>
                <label><h2>Password:</h2></label>
                <input type="text" name="password" class="textinput"/>
                <label><h2>Email Address:</h2></label>
                <input type="text" name="email" class="textinput"/>
                <input type="submit" name="submit" value="Submit" id="submitbutton"/>
            </form>
        </div>
    </div>
</body>

</html>
