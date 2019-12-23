@extends('layouts.about')
@section('title','目標一覧')
@section('content')
 <div class="container">
        <div class="row">
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
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">目標分類</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">目標計画</th>
                                <th width="10%">目標達成予定日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $goal)
                                <tr>
                                    <td>{{($goal->selectgoal) }}</td>
                                    <td>{{ \Str::limit($goal->title, 100) }}</td>
                                    <td>{{ \Str::limit($goal->body, 250) }}</td>
                                    <td>{{($goal->date) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection