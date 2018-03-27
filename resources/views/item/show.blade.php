@extends('layout.master')

<?php

    $layout = [
        'title' => $item->title . "|サービス詳細",
        'description' => $item->title . 'のサービス詳細ページです。',
    ];

?>

@section('content')

<div class="container">

<div class="panel panel-default" style="margin-top:30px;">
  <div class="panel-heading">{{ $item->title }}</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-8">
        <label class="control-label col-md-4">スタッフ</label>
        <div class="col-md-8"><a href="{{ route('staff.show', ['staff' => $item->staff->id ]) }}" target="_blank">{{ $item->staff->getName() }}さん</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <label class="control-label col-md-4"></label>
        <div class="col-md-8"><a href="{{ route('message.show', $item->staff->id) }}" target="_blank">メッセージを送る</a></div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <label class="control-label col-md-4">価格（1時間あたり）</label>
        <div class="col-md-8">{{ $item->price }}円</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <label class="control-label col-md-4">最大利用時間</label>
        <div class="col-md-8">{{ $item->max_hours }}時間</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <label class="control-label col-md-4">対応可能エリア</label>
        <div class="col-md-8">{{ $item->location }}</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <label class="control-label col-md-4">スタッフの出身地</label>
        <div class="col-md-8">{{ $item->staff->prefecture }}</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <label class="control-label col-md-4">説明</label>
        <div class="col-md-8">{!! nl2br(e($item->description)) !!}</div>
      </div>
    </div>
  </div>
</div>


@if (!Auth::guard('web')->check())
<br>
<a href="{{ route('auth.signin') }}" class="exhibit">ログイン</a>または
<a href="{{ route('user.create') }}" class="exhibit">新規登録</a>

@else
{{ Form::model($item, ['route' => ['item.pay', '?' . http_build_query($_GET)] , 'method' => 'post']) }}
@include('item._form', ['item' => $item])


<div class="row">
<div class="form-group" style="margin:20px 0;">
  <div class="col-md-offset-0 col-md-6">
    <button type="submit" class="btn btn-primary btn-block"><span>購入申請する</span></button>
  </div>
</div>
</div>
<br>
{!! Form::close() !!}
@endif

</div>
@endsection
