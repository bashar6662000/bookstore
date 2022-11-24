<!DOCTYPE html>
<html lang="ar" dir="">
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
                    <li ><a href="#" class="current" > الفئات </a></li>
                    <li><a href="/categories/create" >اضافة فئة</a></li>
                    <li><a href="/showbook" > الكتب </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-------------->
  <table class="table table-hover">
    <thead>
       <tr class="bg-info">
         <th scope="col">أسم الفئة</th>
         <th scope="col"> خيارات</th>

       </tr>
  </thead>
<tbody>

    @foreach ($catvar as $item)
      <tr>
      <th scope="row">{{$item->name}}</th>
      <th scope="row">
        <a href="/categories/delete/{{$item->id}}">
            <button type="button" class="btn btn-outline-danger">حذف</button>
         </a>
    </th>
    </tr>

    @endforeach
  </tbody>
</table>

    <!-------------->

</body>
</html>
