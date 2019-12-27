@extends('layouts.about')
@section('title','目標一覧')
@section('content')
 <div class="container">
        <div class="row_top">
            <h2>目標一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('SoukatuController@goal') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('SoukatuController@show') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="list-goal col-md-12 mx-auto">
                    @if(count($posts)==0)
                        <div class="alert alert-danger" role="alert">
                        目標が登録されていません
                        </div>
                    @endif
                <div class="row">
                    @foreach($posts as $goal)
                    <table border="2" class="table">
                            <tr>
                                <th>タイトル</th>
                                <td>{{($goal->title) }}</td>
                            </tr>
                            <tr>
                                <th>目標分類</th>
                                <td>{{($goal->selectgoal) }}</td>
                            </tr>
                            <tr>
                                <th>目標計画</th>
                                <td>{{($goal->body) }}</td>
                            </tr>
                            <tr>
                                <th>目標達成予定日</th>
                                <td>{{($goal->date) }}</td>
                            </tr>
                            <tr>
                                <th>目標の管理</th>
                                <td>
                                <a href="{{ action('SoukatuController@edit', ['id' => $goal->id]) }}" role="button" class="btn btn-primary">目標編集</a>
                                <a href="{{ action('SoukatuController@delete', ['id' => $goal->id]) }}" role="button" class="btn btn-primary">目標削除</a>
                                <a href="{{ action('SoukatuController@show_log', ['id' => $goal->id]) }}" role="button" class="btn btn-primary">活動記録の確認</a>
                                <a href="{{ action('SoukatuController@show_check', ['id' => $goal->id]) }}" role="button" class="btn btn-primary">活動総括の確認</a>
                                </td>
                            </tr>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection