@extends('layouts.template')
@section('headline','ブログ登録')
@section('content')

    <form action="{{route('blogStore')}}" method="post">
        @csrf
        <input type="hidden" name="id" >
        <input type="hidden" name="created_at">
        <input type="hidden" name="update_at">
        <label for="titleId">タイトル</label><br>
        <input type="text" name="title" id="titleId"><br>
        <label for="textAreaId">内容</label><br>
        <textarea name="content" id="textAreaId" cols="30" rows="10"></textarea><br>
        {{-- <a href="{{route('blogStore')}}"><button type="button" class="btn btn-dark">投稿</button></a> --}}
        <input type="submit" value="投稿する">
        
        <a href="{{route('index')}}"><button type="button" class="btn btn-success">戻る</button></a>
    </form>
        
 @endsection