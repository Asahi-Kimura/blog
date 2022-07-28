@extends('layouts.template')
@section('headline','ブログ一覧')
@section('content')
      @if (session()->has('err'))
        <p>{{session('err')}}</p> 
      @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>記事番号</th>
                    <th>タイトル</th>
                    {{-- <th>内容</th> --}}
                    <th>更新日時</th>
                </tr>
            </thead>
          
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td> <a href="blog/{{$blog->id}}">{{$blog->title}}</a></td>
                    {{-- <td> {{$blog->content}}</td> --}}
                    <td> {{$blog->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
<<<<<<< HEAD:blog/resources/views/blogs.blade copy.php
        <p>新規記事の作成</p>

    
    <footer></footer>


  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
=======
        <a href="/blog/create">
            <button type="button" class="btn btn-dark" >新規ブログ投稿</button>
        </a>
        
 @endsection
>>>>>>> 7ba35ad97e4c65551361b75debb1034e9f2652bb:blog/resources/views/blogs.blade.php
