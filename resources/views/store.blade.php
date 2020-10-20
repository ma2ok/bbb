<!-- adminlte::pageを継承 -->
@extends('adminlte::page')
<!-- ページタイトルを入力 -->
@section('title', 'Lead管理画面')
<!-- ページの見出しを入力 -->
@section('content_header')
<h1>追加画面（新しい店）</h1>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{action('StoreController@add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="control-label">店舗名</label> <input class="form-control mr-sm-2" name="store_name"
                    type="text" required>
                <label class="control-label">住所</label> <input class="form-control mr-sm-2" name="address" type="text" required>
                <br>
                <label class="control-label">店外見</label>
                <br>
                <input type="file" name="store_appearance" required>
                <div class="text-right">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit" value="追加">追加</button>
                    <button class="btn btn-primary my-2 my-sm-0" type="submit" value="戻る" onclick="history.back()">戻る</button>
                </div>
            </form>
        </div>
    </div>
</div>@stop
<!-- 読み込ませるCSSを入力 -->
@section('css')
<link href="/css/admin_custom.css" rel="stylesheet">@stop
<!-- 読み込ませるJSを入力 -->
@section('js')
<script>
    let msg = '{{Session::get('alert')}}';
    let exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script> @stop