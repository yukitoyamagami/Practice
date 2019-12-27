@extends('layouts.about')
@section('title','ユーザー情報更新')


@section('content')
<div class="container-fluid">
	<div class="row_top">
		<div class="col-xs-8 col-md-8 mx-auto">
			<h2 mx-auto style="text-align:left; margin-bottom:20px">ユーザー情報の更新</h2>
			<form action="{{ action('SoukatuController@userupdate') }}" method="post" enctype="multipart/form-data">
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
                        <label class="col-md-2">ユーザー名</label>
                        <div class="col-md-10">
                            <input type="text" size="10" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                </div>
			    <div class="form-group row">
                        <label class="col-md-2">emailアドレス</label>
                        <div class="col-md-10">
                            <input type="email" size="10" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                </div>
  
                {{ csrf_field() }}
                    <div class="btn_submit"><input type="submit" class="btn btn-primary mx-auto" value="ユーザー情報の更新"></div>
                </form>
		</div>
	</div>
</div>
@endsection