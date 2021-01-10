@extends('layouts.app')

<style>
    .error_message {
    background-color: #F8F8D3;
    padding: 10px;
    border: solid 1px;
    border-color: #F4D790;
    border-radius: 4px;
}
</style>
@section('content')
<div class="container ">
    <div class="error_message">
    @if (1)
        <div>
        <i class="material-icons">error_outline</i>
        該当する課題が見つかりませんでした。
        </div>
        <div>
        検索のヒント
        <li>検索条件を減らしてみてください。</li>
        <li>違うキーワードを使ってみてください。</li>
        <li>課題がまだ登録されていない可能性があります。</li>
        </div>
    @endif
    </div>
</div>
@endsection
