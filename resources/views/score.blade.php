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
                                <th>stt</th>
                                <th>tên</th>
                                <th>điểm</th>
                                <th>Thứ hạn</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Jacob</td>
                                <td>53275531</td>
                                <td>12 May 2017</td>
                                <td><label class="badge badge-danger">Pending</label></td>
                            </tr>
                            <tr>
                                <td>Messsy</td>
                                <td>53275532</td>
                                <td>15 May 2017</td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
                            <tr>
                                <td>John</td>
                                <td>53275533</td>
                                <td>14 May 2017</td>
                                <td><label class="badge badge-info">Fixed</label></td>
                            </tr>
                            <tr>
                                <td>Peter</td>
                                <td>53275534</td>
                                <td>16 May 2017</td>
                                <td><label class="badge badge-success">Completed</label></td>
                            </tr>
                            <tr>
                                <td>Dave</td>
                                <td>53275535</td>
                                <td>20 May 2017</td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
