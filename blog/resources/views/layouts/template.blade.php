<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('headline')</title>
  </head>
  <body>

    <header>
      <div class="p-3 mb-2 bg-primary text-white">
        <div class="d-flex justify-content-between">
          <div class="btn btn-dark"><a href="{{route('index')}}">テストブログ</a></div>
          <button type="button" class="btn btn-dark">menue</button>
        </div>
      </div>
    </header>

    <main>
      <h1>@yield('headline')</h1>
      @yield('content')
    </main>

    
    <footer></footer>


  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>