@extends('layouts.about')
@section('title','活動記録の登録')

@section('content')
<div class="container-fluid">
	<div class="row_top">
		<div class="col-xs-8 col-md-8 mx-auto">
			<h2 mx-auto style="text-align:left; margin-bottom:20px">活動の記録をつけましょう</h2>
			<form action="{{ action('SoukatuController@createlog') }}" method="post" enctype="multipart/form-data">
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
                        	<option value="{{ $goal->id }}">{{$goal->title }}</option>
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
                     <div class="btn_submit"><input type="submit" class="btn btn-primary mx-auto" value="活動記録登録！"></div>
                </div>
            </form>
        </div>    
    </div>           
</div>           
@endsection