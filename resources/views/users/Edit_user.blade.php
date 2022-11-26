
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gg</title>
     <link rel="stylesheet" href={{URL::asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{URL::asset('css/style.css')}}>
    </head>
    <body>
        <header>
            <div class="con">
                <div id="branding">
                    <h1>
                        <span class="spe">منهل</span> الادارة
                    </h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="" class="current">المستخدمين</a></li>
                        <li><a href="/showbook" class="">الكتب</a></li>
                        <li><a href="/categories" class="">  الفئات</a></li>
                        <li><a href="/Admin">الصفحة الرئيسية</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <form action="/user/edit2/{{$user->id}}" method="POST" enctype="multipart/form-data" >
            {{  csrf_field()  }}

              </div>
                <div class="form-group">
                <label for="exampleFormControlInput1">عدل أسم المستخدم</label>
                <br>

                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="عدل أسم المستخدم" name="user_name"  value="{{$user->name}}" required>
              </div>

           <div class="form-group">
                <label for="exampleFormControlInput1" >عدل  كلمة المرور</label><br>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="عدل كلمة المرور" name="user_password" value="{{$user->password}} " required >
              </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"> عدل البريد الالكتروني </label> <br>

                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="عدل البريد الالكتروني " name="user_email"  value="{{$user->email}}" required >
              </div>

              <select class="form-select" aria-label="Default select example" name='user_state'>
                <option value="Admin">Admin</option>
                <option value="user">normal user</option>
               </select>
               <br>
               <br>
                <input type="submit" class="btn btn-danger">
        </form>

    </body>
</html>
