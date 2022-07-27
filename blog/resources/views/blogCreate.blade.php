@extends('layouts.template')
@section('headline','ブログ登録')
@section('content')

    <form action="" method="post">
        @csrf
        <label for="titleId">タイトル</label><br>
        <input type="text" name="title" id="titleId"><br>
        <label for="textAreaId">内容</label><br>
        <textarea name="content" id="textAreaId" cols="30" rows="10"></textarea><br>
        <button type="button" class="btn btn-dark">投稿</button>
    </form>
        
 @endsection