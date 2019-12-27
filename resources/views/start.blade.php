@extends('layouts.about')
@section('title','トップページ')

@section('content')
<div class="container-fluid">
	<div class="row">
		@if(Session::has('flash_message'))
            <div class="alert alert-success" role="alert">
                {{ session('flash_message') }}
            </div>
        @endif
        
		<div class="col-xs-11 col-md-11 mx-auto">
			<h1 mx-auto style="text-align:center; margin:30px;">ソウカツスタートページ</h1>
			
			<a href="http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/goal">
			<div class="box3 col-xs-2 col-md-2">
    				<img src='../images/goal_icon.jpeg' class='icon'/>
    				<h2>目標設定</h2>
    			<p>自由に目標を設定することができます。</p>
			</div></a>
			
			<a href="http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/show">
				<div class="box3 col-xs-2 col-md-2">
    				<img src='../images/show_icon.jpeg' class='icon'/>
    				<h2>目標一覧</h2>
    			<p>自分が設定した目標の確認が行えます。</p>
			</div></a>
			
			<a href="http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/log">
			<div class="box3 col-xs-2 col-md-2">
					<img src='../images/log_icon.jpeg' class='icon'/>
					<h2>活動記録</h2>
    			<p>設定した目標の活動記録を登録しましょう。</p>
			</div></a>
			
			<a href="http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/check">
			<div class="box3 col-xs-2 col-md-2">
					<img src='../images/check_icon.jpeg' class='icon'/>
					<h2>活動総括</h2>
    			<p>設定した目標の達成度合を振り返りましょう</p>
			</div></a>
			
		</div>
		</div>
@endsection