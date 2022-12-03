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
        <h2 class="inactive "> rest password </h2>

          <!-- Login Form -->
            <form method="GET" action="/forgot/Email/change/recover">
            <input type="text" id="password" class="fadeIn third" name="new_password" placeholder="Enter your new password" required>
            <input type="submit" class="fadeIn fourth" value="Reset my password">
          </form>
        </div>
      </div>
</body>
</html>
