@extends('layouts.template')
@section('headline','ブログ登録')
@section('content')

    <form action="{{route('blogStore')}}" method="post">
        @csrf
        
        <label for="titleId">タイトル</label><br>
        <input type="text" name="{{$blogsData->title}}" id="titleId"><br>
        <label for="textAreaId">内容</label><br>
        <textarea name="{{$blogsData->content}}" id="textAreaId" cols="30" rows="10"></textarea><br>
        <input type="submit" value="投稿する">
        
        <a href="{{route('index')}}"><button type="button" class="btn btn-success">戻る</button></a>
    </form>
        
 @endsection