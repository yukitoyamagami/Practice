@extends('layouts.about')
@section('title','目標達成のためのソウカツ')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-12 mx-auto cover-img">
			<div class="title">
				<h1>Let`s Achieve Your Goal!</h1>
				<p>目標達成のために行動を記録しよう</p>
			</div>
			<div class="col-xs-7 col-md-7 mx-auto" style="text-align:center;">
			<button class="btn_top_login " type=“button” onclick="location.href='/login'">ログイン</button>
			<button class="btn_top_testlogin " type=“button” onclick="location.href='soukatu/start'">テストユーザーログイン</button>
			<button class="btn_top_register " type=“button” onclick="location.href='/register'">新規登録</button>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-11 col-md-11 mx-auto">
			<h1 class="about  mx-auto" style="text-align:center;">ソウカツは目標を管理するアプリです</h1>
			
			<div class="box1 col-xs-3 col-md-3">
    			<h2>自由に目標設定</h2>
    			<img src='../images/goal_icon.jpeg' class='icon'/>
    			<p>自由に目標を設定することができます。フォーマットに沿って入力するだけで目標が明確化</p>
			</div>
			
			<div class="box1 col-xs-3 col-md-3">
				<h2>目標を毎日確認</h2>
				<img src='../images/log_icon.jpeg' class='icon'/>
    			<p>設定した目標への成果を更新することができます。毎日記録をすることで目標に近づきましょう</p>
			</div>
			
			<div class="box1 col-xs-3 col-md-3">
				<h2>目標の振り返り</h2>
				<img src='../images/check_icon.jpeg' class='icon'/>
    			<p>努力する上で最も重要なのが振り返りです。今回の目標はどれくらい達成できたか振り返りましょう</p>
			</div>
		</div>
</div>
@endsection