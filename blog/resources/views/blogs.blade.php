<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ブログ</title>
  </head>
  <body>

    <header></header>
    <main>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>内容</th>
                    <th>更新日時</th>
                </tr>
            </thead>
          
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td> {{$blog->title}}</td>
                    <td> {{$blog->content}}</td>
                    <td> {{$blog->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    
    <footer></footer>


  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>