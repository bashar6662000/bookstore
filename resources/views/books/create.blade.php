<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>أنشاء كتاب</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
                    <li ><a href="#" class="current">اضافة كتاب</a></li>
                    <li><a href="/showbook">الكتب</a></li>
                    <li><a href="/categories">الفئات</a></li>
                    <li><a href="/books/users/show" >المستخدمين</a></li>
                    <li><a href="/Admin">الصفحة الرئيسية</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <br><br>
    <form action="/books/store" method="POST" enctype="multipart/form-data">

        {{  csrf_field()  }}


            <div class="form-group">
            <label for="exampleFormControlInput1">دخل أسم الكتابا</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="أدخل أسم الكتاب" name="book_name"  >
          </div>

       <div class="form-group">
            <label for="exampleFormControlInput1">أسم الكاتب</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="أدخل أسم الكاتب" name="Author_name" >
          </div>


        <div class="form-group">
            <label for="exampleFormControlInput1">عدد الصفحات</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="أدخل عدد الصفحات" name="page_number" >
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">شرح الكتاب </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="أدخل شرح الكتاب" name="bio"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1"> السعر </label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder=" السعر" name="price"></textarea>
          </div>

          <select class="form-select" aria-label="Default select example" name='categories_id'>
           @foreach ($cat as $cat_item)
           <option value={{$cat_item->id}}> {{$cat_item->name}} </option>
           @endforeach
          </select>

            <div class="form-group">
              <label for="exampleFormControlFile1">أدخل صورة غلاف</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>
            <input type="submit" class="btn btn-danger">
          </form>
</body>
</html>
