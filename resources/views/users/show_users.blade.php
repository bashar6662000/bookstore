<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gg</title>
     <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css')}}>
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
                        <li><a href="/showbook" >الكتب</a></li>
                        <li><a href="/categories" >الفئات</a></li>
                        <li><a href="/Admin">الصفحة الرئيسية</a></li>
                        <li><a href="users/show" class="current">المستخدمين</a></li>

                    </ul>
                </nav>
            </div>
        </header>
      <table class="table table-hover">
          <thead>
             <tr class="bg-info">
               <th scope="col">أسم المستخدم</th>
                <th scope="col">البريد الالكتروني</th>
                <th scope="col">كلمة السر</th>
                <th scope="col">الحالة</th>
                <th scope="col">خيارات</th>


             </tr>
        </thead>
     <tbody>

            @foreach ($user as $item)
        <tr>
            <th scope="row">{{$item->name}}</th>
            <th scope="row">{{$item->email}}</th>
            <th scope="row">{{$item->password}}</th>
            <th scope="row">{{$item->state}}</th>

                <th scope="row">
                    <a href="/user/edit1/{{$item->id}}">
                   <button type="button" class="btn btn-outline-success">تعديل</button>
                </a>
                <a href="/user/delete/{{$item->id}}">
                   <button type="button" class="btn btn-outline-danger">حذف</button>
                </a>
                </th>
            </th>

          </tr>
          @endforeach
        </tbody>
      </table>

   </body>
</html>
