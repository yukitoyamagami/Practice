@extends('layouts.about')
@section('title','トップページ')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-11 col-md-11 mx-auto">
			<h1 mx-auto style="text-align:center;">ソウカツスタートページ</h1>
			<div class="box3 col-xs-3 col-md-3">
    			<a href="http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/goal"><h2>目標設定</h2></a>
    			<p>自由に目標を設定することができます。フォーマットに沿って入力するだけで目標が明確化</p>
			</div>
			<div class="box3 col-xs-3 col-md-3">
				<a href="http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/log"><h2>活動記録</h2></a>
    			<p>設定した目標への成果を更新することができます。毎日記録をすることで目標に近づきましょう</p>
			</div>
			<div class="box3 col-xs-3 col-md-3">
				<a href="http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/check"><h2>活動総括</h2></a>
    			<p>努力する上で最も重要なのが振り返りです。今回の目標はどれくらい達成できたか振り返りましょう</p>
			</div>
		</div>
@endsection