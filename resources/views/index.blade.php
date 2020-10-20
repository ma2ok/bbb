<!-- adminlte::pageを継承 -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  @extends('adminlte::page')
  <!-- ページタイトルを入力 -->
  @section('title', 'Lead管理画面')
  <!-- ページの見出しを入力 -->
  @section('content_header')
  <h1>ホーム画面</h1>@stop
  <!-- ページの内容を入力 -->
  @section('content')
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">店舗リスト</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
          </div>
        </div>
      </div><!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: auto">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>店舗名</th>
              <th>商品編集</th>
              <th>FM編集</th>
              <th>削除</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($stores as $store)
            <tr>
              <td>{{ $store->store_name }}</td>
              <td>
                <a href=" {{action('ProductController@product', $store->store_id )}} ">
                  <button class="btn btn-primary" value="商品編集">商品編集</button>
                </a>
              </td>
              <td>
                <a href=" {{action('FloorController@floor', $store->store_id )}} ">
                  <button class="btn btn-primary" type="submit" value="FM編集">FM編集</button>
                </a>
              </td>
              <td>
                <form method="post" action="/index/delete/{{$store->store_id }}">{{ csrf_field() }}
                <input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("削除しますか？");'>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td>店舗はまだ入ってない</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div><!-- /.card-body -->
      <div class="card-footer">
      <a href=" {{ url('/store') }}">
      <button type="submit" class="btn btn-primary">店舗追加</button></a>
      </div>
    </div><!-- /.card -->
  </div>@stop
  <!-- 読み込ませるCSSを入力 -->
  @section('css')
  <link href="/css/admin_custom.css" rel="stylesheet">@stop
  <!-- 読み込ませるJSを入力 -->
  @section('js')
  <script>
    console.log('Hi!'); 
  </script> @stop
</body>

</html>