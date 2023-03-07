<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gg</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
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
                        <li ><a href="/books/create" >اضافة كتاب</a></li>
                        <li><a href="#" class="current">الكتب</a></li>
                        <li><a href="/categories" >الفئات</a></li>
                        <li><a href="/books/users/show">المستخدمين</a></li>
                        <li><a href="/Admin">الصفحة الرئيسية</a></li>
                    </ul>
                </nav>
            </div>
        </header>
      <table class="table table-hover">
          <thead>
             <tr class="bg-info">
               <th scope="col">أسم الكتاب</th>
                <th scope="col">الكاتب</th>
                <th scope="col">عدد الصفحات</th>
                <th scope="col">السعر</th>
                <th scope="col">خيارات</th>


             </tr>
        </thead>
     <tbody>

            @foreach ($books as $item)
            <a href="/books/preview/{{$item->id}}">
            <tr>
            <th scope="row">{{$item->title}}</th>
            <th scope="row">{{$item->Author}}</th>
            <th scope="row">{{$item->pagenumber}}</th>
            <th scope="row">{{$item->price}}</th>
            <th scope="row">
            <a href="/books/edit/{{$item->id}}">
            <button type="button" class="btn btn-outline-success">تعديل</button>
            </a>
            <a href="/books/delete/{{$item->id}}">
            <button type="button" class="btn btn-outline-danger">حذف</button>
            </a>
            </th>
          </tr>
        </a>
          @endforeach
        </tbody>
      </table>

   </body>
</html>
