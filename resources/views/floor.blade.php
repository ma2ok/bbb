<!-- adminlte::pageを継承 -->
@extends('adminlte::page')

<!-- ページタイトルを入力 -->
@section('title', 'Lead管理画面')

<!-- ページの見出しを入力 -->
@section('content_header')
<h1>フロアマップ編集 - {{$store->store_name}}</h1>

<!-- エラーメッセージ。なければ表示しない -->
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<div class="row">
    <div class="col-9">
        @forelse ($floors as $floor)
        <div class='maps' id="{{$floor->floor_id}}" style="display:none">
            <h1>{{ $floor->floor }}F</h1>
            <div
                style="overflow:scroll; background-repeat: no-repeat; background-image: url('{{ asset('/storage/image/floor_map/' . $floor->floor_map) }}');">
                @php
                $data = getimagesize('./storage/image/floor_map/' . $floor->floor_map);
                $width = $data[0];
                $height = $data[1];
                $dividedBy = $store->dividedBy;
                $horizionCount = round($width / $dividedBy);
                $verticalCount = round($height / $dividedBy);
                for ($i=0; $i < $verticalCount ; $i++) { echo '<div class="d-flex">' ; for ($j=0; $j <
                    $horizionCount; $j++) { echo '
                            <div
                            onclick="setPosition(' .(($i*$horizionCount) + $j).')" style="
                            height:'.$dividedBy.'px; 
                            flex-basis:'.$dividedBy.'px; 
                            background-color:rgba(128,128,128,0.7);
                            color:white;
                            text-align:center;
                            line-height:'.$dividedBy.'px;
                            ">' . (($i*$horizionCount) + $j) . '</div>';
            }
            echo '
        </div>';
        }
        @endphp
    </div>
    <form action="{{action( 'FloorController@delete', $floor->floor_id )}}" method="POST"
        id="delete-floor-{{$floor->floor_id}}">
        @csrf
        @method('delete')
    </form>
    <form action="{{ action('FloorController@upload', $store->store_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <input type="text" name="floor" required> F
        <br>
        <br>
        <input type="file" name="map" required>
        <br>
        <br>
        <button class="btn btn-primary" type="submit">画像追加</button>
        <button class="btn btn-danger my-2 my-sm-0 text-right" type="submit"
            form="delete-floor-{{$floor->floor_id}}">画像削除</button>
    </form>
</div>
@empty
<div>
    マップはまだない。
</div>
<!-- フォーム -->
<form action="{{ action('FloorController@upload', $store->store_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
    <input type="text" name="floor" required> F
    <br>
    <br>
    <input type="file" name="map" required>
    <br>
    <br>
    <button class="btn btn-primary" type="submit">画像追加</button>
    <button class="btn btn-danger my-2 my-sm-0 text-right" type="submit"
        form="delete-floor-{{$store->store_id}}">画像削除</button>
</form>
@endforelse
<!-- フォーム -->
<br>
</div>
<div class="col">
    <div class="container" style="height: 100%">
        <div class="row">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    @forelse ($floors as $floor)
                    <button class="btn btn-secondary btn-lg" type="button" id="btn_{{$floor->floor_id}}"
                        value="{{$floor->floor_id}}" onclick="change({{$floor->floor_id}})">{{$floor->floor}}F</button>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="btn-group-vertical">
                @forelse ($types as $type)
                <form id="{{$type->type_id}}_form" action="{{action('FloorController@position' , $store->store_id)}}"
                    method="post">
                    @csrf
                    @method('PATCH')
                    <div class="{{$type->type_id}}">
                        <input class="selected_type" type="hidden" name="type_id" value="{{$type->type_id}}">
                        <input class="selected_floor" type="hidden" name="floor" value="{{$type->floor}}">
                        <input class="selected_position" type="hidden" name="position" value="{{$type->position}}">
                    </div>
                </form>
                <button class="btn btn-primary my-2 my-sm-0 text-left" onclick="setType({{$type->type_id}})">
                    @if ($type->floor == null)
                    {{$type->type_name}}, まだ設定していないです。
                    @else
                    {{$type->type_name}}, {{$type->floor}}F, 位置: {{$type->position}}
                    @endif
                </button>
                @empty
                <div>
                    <div class="alert alert-danger" role="alert">
                        商品はまだない。
                    </div>
                </div>
                @endforelse
            </div>
        </div>
        <br>
        <div class="row">
        <button class="btn btn-success my-2 my-sm-0" type="submit" value="戻る" onClick="location.href='{{action('IndexController@index')}}'">戻る</button>
        </div>
    </div>
</div>
@stop
<!-- 読み込ませるCSSを入力 -->
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!-- 読み込ませるJSを入力 -->
@section('js')
@if (isset($floor))

<script>
    let msg = '{{Session::get('alert')}}';
    let exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }

    const allMaps = document.getElementsByClassName('maps');
    allMaps[0].style.display = "block";

    let set_floor = document.getElementsByClassName('btn-group mr-2').item(0).firstElementChild.value;
    
    function change(floor_id){
        for(let i = 0; i < allMaps.length; i++){
            allMaps[i].style.display = "none";
        }
        const map = document.getElementById(floor_id);
        map.style.display = "block";
        set_floor = floor_id;
    }

    let set_type;
    function setType(type){
        set_type = type;
    }
    function setPosition(cell){
        if(set_type){
            let selected_form = document.getElementsByClassName(set_type).item(0);
            selected_form.children[1].setAttribute('value', set_floor);
            selected_form.children[2].setAttribute('value', cell);

            let get_form = document.getElementById(set_type + '_form');
            console.log(get_form.submit());

            set_floor = null;
            set_type = null;
        }else{ 
            return; 
        }
    }
</script>
@else
<script>
    let msg = '{{Session::get('alert')}}';
    let exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>
@endif
@stop