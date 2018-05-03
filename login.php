<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>EasyOrg - Login</title>
        <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    
        <!-- Body border -->
        <div id="left"></div>
        <div id="right"></div>
        <div id="top"></div>
        <div id="bottom"></div>
        
        <div id="container">
            <div id="wordDisplay"><p id="appearOne">SIMPLE.<br></p><p id="appearTwo">BEAUTIFUL.<br></p><p id="appearThree">ORGANIZED.<br></p><p id="appearTitle">EASY-ORG</p></div>
            
            <input id="memberButton" type="button" value="Access My Restaurant" onclick="showLogin()">

            <form id="loginPanel" action="handleLogin.php" method="POST">
                <input type="hidden" name="action" value="do_login">
                <input id="username" class="fields" name="username" placeholder="Username" type="text" maxlength="25">
                <input id="password" class="fields" name="password" placeholder="Password" type="password" maxlength="25"> 
                <input class="loginButton" type="submit" value="Login">
            </form>
        </div>
        
        <script>
            function showLogin(){
                $("#loginPanel").show();
            }
        </script>
            
    </body>

</html>