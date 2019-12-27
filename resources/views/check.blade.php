@extends('layouts.about')
@section('title','活動総括')
@section('content')
<div class="container-fluid">
	<div class="row_top">
		<div class="col-xs-8 col-md-8 mx-auto">
			<h2 mx-auto style="text-align:left; margin-bottom:20px">目標を選択し、総括を行いましょう</h2>
			<form action="{{ action('SoukatuController@createcheck') }}" method="post" enctype="multipart/form-data">
			         @if (count($errors) > 0)
			         <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                     </div>
                     @elseif(session('flash_message'))
                     <div class="alert alert-success" role="alert">
                        {{ session('flash_message') }}
                     </div>
                    @endif
                    
			    <div class="form-group row">
                        <label class="col-md-2">目標名選択</label>
                        <select name="goal_id">
                        	@foreach($posts as $goal)
                        	<option value="{{ $goal->id }}">{{ $goal->title }}</option>
                        	 @endforeach
                        </select>
                </div>
                
                <div class="form-group row">
                        <label class="col-md-2">総括記入日</label>
                            <div class="col-md-10">
                            <input type="date" name="datelog"></input>
                            </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-md-2">目標の達成度合</label>
                            <select name="selectdegree">
                            <option value="達成度合100%">達成度合100%</option>
                            <option value="達成度合80%">達成度合80%</option>
                            <option value="達成度合50%">達成度合50%</option>
                            <option value="達成度合20%">達成度合20%</option>
                            <option value="達成度合0%">達成度合0%</option>
                        </select>
                        <div class="hatena">
                        <img src='../images/hatena_icon.jpeg' class='hatena_icon'/>
                        <div class="description5">目標度合の目安<br>達成度合:100%:予定通り完璧に達成<br>達成度合80%:予定に遅れはあるがほとんど達成<br>
                        達成度合50%:達成した点もあるが、達成できなかった点も多々ある<br>達成度合20%:達成からは程遠い状態<br>達成度合0%:全く達成できず</div>
                        </div>
                </div>
                        
                <div class="form-group row">
                        <label class="col-md-2">達成度合の理由</label>
                            <div class="col-md-10">
                            <textarea class="form-control" name="bodyreason" rows="5">{{ old('body') }}</textarea>
                            </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-md-2">良かった点</label>
                            <div class="col-md-10">
                            <textarea class="form-control" name="bodygood" rows="5">{{ old('body') }}</textarea>
                            </div>
                </div>

                <div class="form-group row">
                        <label class="col-md-2">反省点</label>
                            <div class="col-md-10">
                            <textarea class="form-control" name="bodybad" rows="5">{{ old('body') }}</textarea>
                            </div>
                </div>
                
                <div class="form-group row">
                 {{ csrf_field() }}
                     <div class="btn_submit"><input type="submit" class="btn btn-primary mx-auto" value="活動の総括を行う"></div>
                     
@endsection