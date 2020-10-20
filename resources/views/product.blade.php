<!-- adminlte::pageを継承 -->
@extends('adminlte::page')

<!-- ページタイトルを入力 -->
@section('title', 'Lead管理画面')

<!-- ページの見出しを入力 -->
@section('content_header')

<h1>{{ $store->store_name}}</h1>
<label class="control-label" style="margin-top:10px">商品種類名</label>
<div class="d-flex flex-row">
  <form action="{{ action('ProductController@addType', $store->store_id)}}" method="POST">
    @csrf
    <div class="input-group mb-3">
      <input type="text" class="form-control" aria-describedby="button-addon2" name="type_name" required>
      <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">追加</button>
      </div>
    </div>
  </form>
</div>
<br>
<div class="accordion" id="accordion">
  <div class="card">
    @forelse ($types as $type)
    <div class="card-header" role="tab">
      <h5 class="mb-0">
        <div class="d-flex flex-row justify-content-between">
          <a class="collapsed text-body d-block p-3 m-n3 align-self-center" data-toggle="collapse"
            href="#collapse{{$type->type_id}}" role="button" aria-expanded="false"
            aria-controls="collapse{{$type->type_id}}" style="width:95%">
            {{$type->type_name}}
          </a>
          <form action="{{action('ProductController@deleteType', $store->store_id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="type_id" value="{{$type->type_id}}">
            <button class="btn btn-danger" type="submit">削除</button>
          </form>
        </div>
      </h5>
    </div>
    <!-- /.card-header -->
    <div id="collapse{{$type->type_id}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$type->type_id}}"
      data-parent="#accordion">
      @foreach ($products as $product)
      @if ($type->type_id == $product->type_id)
      <div class="card-body border bg-light d-flex flex-row justify-content-end">
        <div class="d-flex flex-row justify-content-between align-items-center font-weight-bold" style="width:90%;">
          {{$product->product_name}}
          <form action="{{action('ProductController@deleteProduct')}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="product_id" value="{{$product->product_id}}">
            <button class="btn btn-outline-danger" type="submit">削除</button>
          </form>
        </div>
      </div>
      <!-- /.card-body -->
      @endif
      @endforeach
      <div class="card-body bg-light">
        <div class="input-group d-flex flex-row justify-content-end">
          <form action="{{action('ProductController@addProduct', $type->type_id)}}" method="POST">
            @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control" aria-describedby="button-addon2" name="product_name" required>
              <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">追加</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.collapse -->
    @empty
    <div class="alert alert-danger" role="alert">商品はまだない。</div>
    @endforelse
  </div>
  <!-- /.card -->
</div>
<div class="text-right p-3">
  <a href=" {{action('FloorController@floor', $store->store_id )}} ">
    <button class="btn btn-primary" type="submit" value="マップ">マップ</button>
  </a>
  <button class="btn btn-success my-2 my-sm-0" type="submit" value="戻る" onclick="location.href='{{action('IndexController@index')}}'">戻る</button>
</div>
@stop
<!-- 読み込ませるCSSを入力 -->
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!-- 読み込ませるJSを入力 -->
@section('js')
<script>
  let msg = '{{Session::get('alert')}}';
  let exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>
@stop