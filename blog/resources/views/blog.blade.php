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
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
          
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td> <a href="blog/{{$blog->id}}">{{$blog->title}}</a></td>
                    {{-- <td> {{$blog->content}}</td> --}}
                    <td> {{$blog->updated_at}}</td>
                    <td> <a href="{{route('blogEdit', $blog->id )}}"><button type="button" class="btn btn-primary">編集</button></td>
                    <td>
                        <a href="{{route('blogDelete',$blog->id)}}">
                            <button type="button" class="btn btn-danger">削除</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <footer></footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <a href="{{route('blogCreate')}}"> <button type="button" class="btn btn-dark" >新規ブログ投稿</button></a>
  </body>
</html>


        
 @endsection

