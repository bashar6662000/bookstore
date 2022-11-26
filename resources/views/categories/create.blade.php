<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>انشاء فئة</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href={{URL::asset('css/style.css')}}>
</head>
<body>
      <!----header------>
      <header>
        <div class="con">
            <div id="branding">
                <h1>
                    <span class="spe">منهل</span> الادارة
                </h1>
            </div>
            <nav>
                <ul>
                    <li ><a href="/categories" > الفئات </a></li>
                    <li><a href="/#" class="current">اضافة فئة</a></li>
                    <li><a href="/showbook" class=""> الكتب </a></li>
                    <li><a href="users/show" >المستخدمين</a></li>
                    <li><a href="/Admin">الصفحة الرئيسية</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <!----End header---->
    <form  method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/categories/store" >
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">انشاء فئة</label>
          <input type="text" class="form-control"  placeholder="ادخل فئة" name="namet"  >
        </div>
<br>
<input type="submit" value="Enter" class="btn btn-primary">
    </form>
</body>
</html>
