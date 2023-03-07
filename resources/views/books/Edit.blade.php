
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
                        <li ><a href="/books/create" >اضافة كتاب</a></li>
                        <li><a href="/showbook" class="current">الكتب</a></li>
                        <li><a href="/categories" class="">  الفئات</a></li>
                        <li><a href="/books/users/show" >المستخدمين</a></li>
                        <li><a href="/Admin">الصفحة الرئيسية</a></li>

                    </ul>
                </nav>
            </div>
        </header>
        <form action="/books/update/{{$book_id->id}}" method="POST" enctype="multipart/form-data" >
            {{  csrf_field()  }}

              </div>
                <div class="form-group">
                <label for="exampleFormControlInput1">عدل أسم الكتاب</label>
                <br>

                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="عدل أسم الكتاب" name="book_name"  value="{{$book_id->title}}" required>
              </div>

           <div class="form-group">
                <label for="exampleFormControlInput1" >عدل اسم الكاتب</label><br>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="عدل أسم الكاتب" name="Author_name" value="{{$book_id->Author}} " required >
              </div>


            <div class="form-group">
                <label for="exampleFormControlInput1"> عدل عدد الصفحات</label> <br>
                {{$book_id->pagenumber}} عدد الصفحات الحالي:
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="عدل عدد الصفحات" name="page_number"  value="{{$book_id->pagenumber}} " required >
              </div>


              <div class="form-group">
                <label for="exampleFormControlTextarea1"> عدل سعر الكتاب</label> <br>
                <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="عدل  السعر" name="price"  value="{{$book_id->price}} " required >
              </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1"> عدل شرج الكتاب </label>

              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="عدل شرح الكتاب" name="bio" value="{{$book_id->bio}}" required ></textarea>
            </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1"> غير صورة الغلاف</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                </div>
                <input type="submit" class="btn btn-danger">
        </form>

    </body>
</html>
