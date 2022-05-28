@extends('app')
@section('content')
    <div class="col-lg-6 mx-auto">
        <div class="auth-form-light text-left py-7 px-6 px-sm-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Score</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>score</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item['name']}}</td>
                                    <td>{{$item['score']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <form class="pt-3">
                            <a href="/" class="btn btn-primary me-2">play again</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
