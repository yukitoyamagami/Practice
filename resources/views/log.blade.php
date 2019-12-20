@extends('layouts.about')
@section('title','活動記録の登録')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-8 col-md-8 mx-auto">
			<h2 mx-auto style="text-align:left;">活動の記録をつけましょう</h2>
			<form action="{{ action('SoukatuController@createlog') }}" method="post" enctype="multipart/form-data">
			        
			         @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
			
			    <div class="form-group row">
                        <label class="col-md-2">目標選択</label>
                        <select name="selectgoal">
                        	@foreach($posts as $goal)
                        	<option value="{{ $goal->title }}">{{ $goal->title }}</option>
                        	 @endforeach
                        </select>
                </div>
                <div class="form-group row">
                        <label class="col-md-2">活動日</label>
                            <div class="col-md-10">
                            <input type="date" name="datelog"></input>
                            </div>
                </div>
                        
                <div class="form-group row">
                        <label class="col-md-2">活動内容</label>
                            <div class="col-md-10">
                            <textarea class="form-control" name="bodylog" rows="5">{{ old('bodylog') }}</textarea>
                            </div>
                </div>
            
                
                 <div class="form-group row">
                     {{ csrf_field() }}
                     <div><input type="submit" class="btn btn-primary mx-auto" value="活動記録登録！"></div>
                    <!--<input type="button" onClick="window.open('http://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/activitylog')" class="btn btn-primary mx-auto" value="活動記録作成！"></div>
                    -->
                </div>
            </form>
        </div>    
    </div>           
</div>           
@endsection