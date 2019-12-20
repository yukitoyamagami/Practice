@extends('layouts.about')
@section('title','活動総括')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-8 col-md-8 mx-auto">
			<h2 mx-auto style="text-align:left;">目標を選択し、総括を行いましょう</h2>
			    <div class="form-group row">
                        <label class="col-md-2">目標選択</label>
                        <select name="selectgoal">
                        	@foreach($posts as $goal)
                        	<option value="$goal">{{ $goal->title }}</option>
                        	 @endforeach
                        </select>
                </div>
                
                <div class="form-group row">
                        <label class="col-md-2">目標の達成度合</label>
                            <select name="selectgoal">
                            <option value="達成度合100%">達成度合100%</option>
                            <option value="達成度合80%">達成度合80%</option>
                            <option value="達成度合50%">達成度合50%</option>
                            <option value="達成度合20%">達成度合20%</option>
                            <option value="達成度合0%">達成度合0%</option>
                        </select>
                        <div class="hatena">
                        <img src='../images/hatena_icon.jpeg' class='hatena_icon'/>
                        <div class="description5">目標度合の目安<br>達成度合:100%:予定通り完璧に達成<br>達成度合80%:予定に遅れはあるがほとんど達成<br>
                        達成度合50%:達成した点もあるが、達成できなかった点も多々ある<br>達成度合20%:達成からは程遠い状態<br>達成度合:全く達成できず</div>
                        </div>
                </div>
                        
                <div class="form-group row">
                        <label class="col-md-2">達成度合の理由</label>
                            <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                            </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-md-2">良かった点</label>
                            <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                            </div>
                </div>

                <div class="form-group row">
                        <label class="col-md-2">反省点</label>
                            <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                            </div>
                </div>
                
                 <div class="form-group row">
                    <input type="button" onClick="window.open('http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/activitylog')" class="btn btn-primary mx-auto" value="活動の総括を行う！"></div>
                </div>
@endsection