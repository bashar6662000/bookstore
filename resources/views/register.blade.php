<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="{{ URL::asset('css/log.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
       <a href="/loginn">  <h2 class="inactive underlineHover"> Sign In </h2></a>
         <h2  class="active">Sign Up </h2>


          <!-- Login Form -->
          <form method="GET" action="/singup">
            <input type="text" id="login" class="fadeIn second" name="register_username" placeholder="login" required>
            <input type="text" id="password" class="fadeIn third" name="register_password" placeholder="password" required>
            <input type="text" id="password" class="fadeIn third" name="register_email" placeholder="email" required>
            <input type="submit" class="fadeIn fourth" value="register" >
          </form>

          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="/forgot">Forgot Password?</a>
          </div>

        </div>
      </div>
</body>
</html>
