@extends('layouts.about')
@section('title','活動総括表示')
@section('content')
 <div class="container">
        <div class="row_top">
            <h2>活動総括　目標名：{{$title}}</h2>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('SoukatuController@check') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>

        <div class="row">
            <div class="list-goal col-md-12 mx-auto">
                @if(count($posts)==0)
                <div class="alert alert-danger" role="alert">
                    活動総括が登録されていません
                </div>
                @endif
                <div class="row">
                    <table border="2" class="table">
                        @foreach($posts as $post)
                            <tr>
                                <th>総括記入日</th>
                                <td>{{($post->datelog) }}</td>
                            </tr>
                            <tr>
                                <th>目標の達成度合</th>
                                <td>{{($post->selectdegree) }}</td>
                            </tr>
                            <tr>
                                <th>達成度合の理由</th>
                                <td>{{($post->bodyreason) }}</td>
                            </tr>
                            <tr>
                                <th>目標の達成度合</th>
                                <td>{{($post->bodygood) }}</td>
                            </tr>
                            <tr>
                                <th>目標の達成度合</th>
                                <td>{{($post->bodybad) }}</td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection