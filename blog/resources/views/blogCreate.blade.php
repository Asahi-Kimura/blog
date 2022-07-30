@extends('layouts.template')
@section('headline','ブログ登録')
@section('content')

    <form action="{{route('blogStore')}}" method="post">
        @csrf
        {{-- <input type="hidden" value="{{ $content }}" name="title" id="titleId"><br> --}}
        <label for="textAreaId">内容</label><br>
        <label for="titleId">タイトル</label><br>
        <input type="text" name="title" id="titleId" value="{{old('title')}}"><br>
        <label for="textAreaId">内容</label><br>
        <textarea name="content" id="textAreaId" cols="30" rows="10">{{old('content')}}</textarea><br>
        {{-- <a href="{{route('blogStore')}}"><button type="button" class="btn btn-dark">投稿</button></a> --}}
        <input type="submit" value="投稿する">
        
        <a href="{{route('index')}}"><button type="button" class="btn btn-success">戻る</button></a>
    </form>
        
 @endsection