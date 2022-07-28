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
        <a href="/blog/create">
            <button type="button" class="btn btn-dark" >新規ブログ投稿</button>
        </a>
        
 @endsection