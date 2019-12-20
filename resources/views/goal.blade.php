@extends('layouts.about')
@section('title','目標設定')


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-8 col-md-8 mx-auto">
			<h2 mx-auto style="text-align:left;">新しい目標を登録しよう</h2>
			<form action="{{ action('SoukatuController@create') }}" method="post" enctype="multipart/form-data">
			         @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                <div class="form-group row">
                        <label class="col-md-2">目標分類</label>
                        <select name="selectgoal">
                            <optgroup label="資格習得">
                            <option value="公務員試験">公務員試験</option>
                            <option value="法律">法律</option>
                            <option value="医療">医療</option>
                            <option value="建築">建築</option>
                            <option value="その他資格習得">その他資格習得</option>
                            </optgroup>
                            <optgroup label=スキルアップ>
                            <option value="大学受験">大学受験</option>
                            <option value="プログラミング">プログラミング</option>
                            <option value="自己啓発">自己啓発</option>
                            <option value="就職試験">就職試験</option>
                            <option value="その他スキルアップ">その他スキルアップ</option>
                            </optgroup>
                            <optgroup label=外国語学習>
                            <option value="TOEIC">TOEIC</option>
                            <option value="英検">英検</option>
                            <option value="TOEFL">TOEFL</option>
                            <option value="中国語">中国語</option>
                            <option value="フランス語">フランス語</option>
                            <option value="ドイツ語">ドイツ語</option>
                            <option value="スペイン語">スペイン語</option>
                            <option value="韓国語">韓国語</option>
                            <option value="その他外国語">その他外国語</option>
                            </optgroup>
                            <optgroup label=読書・教養>
                            <option value="読書">読書</option>
                            <option value="学問">学問</option>
                            <option value="趣味">趣味</option>
                            <option value="その他読書・教養">その他読書・教養</option>
                            </optgroup>
                            <optgroup label=運動>
                            <option value="ランニング">ランニング</option>
                            <option value="筋トレ">筋トレ</option>
                            <option value="ウォーキング">ウォーキング</option>
                            <option value="水泳">水泳</option>
                            <option value="その他運動">その他運動</option>
                            </optgroup>
                        </select>
                </div>
                
			    <div class="form-group row">
                        <label class="col-md-2">目標名</label>
                        <div class="col-md-10">
                            <input type="text" size="10" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-2">目標計画</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-2">目標達成予定日</label>
                        <div class="col-md-10">
                            <input type="date" name="date"></input>
                        </div>
                </div>
                {{ csrf_field() }}
                    <div><input type="submit" class="btn btn-primary mx-auto" value="新規目標作成！"></div>
                    <a href=https://ecf9c7a6f7bc4ba091a47969d057aef5.vfs.cloud9.us-east-2.amazonaws.com/soukatu/index>目標管理</a>
                </form>
		</div>
	</div>
</div>
@endsection