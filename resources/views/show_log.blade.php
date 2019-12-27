@extends('layouts.about')
@section('title','活動記録の確認')
@section('content')
 <div class="container">
        <div class="row_top">
            <h2>活動一覧　目標名：{{$title}}</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('SoukatuController@log') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('SoukatuController@show_log') }}" method="get">
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
                    活動記録が登録されていません
                </div>
                @endif
                <div class="row">
                    @foreach($posts as $log)
                    <table border="2" class="table">
                            <tr>
                                <th>活動日</th>
                                <td>{{($log->datelog) }}</td>
                            </tr>
                            <tr>
                                <th>活動内容</th>
                                <td>{{($log->bodylog) }}</td>
                            </tr>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection