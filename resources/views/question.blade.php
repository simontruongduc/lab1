@extends('app')
@section('content')
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
                <h4 id="role">{{$role->name}}</h4>
            </div>
            <h4 class="card-description" style="font-size: 20px" id="question">
                @csrf
                @php
                    $question = $role->questions()->inRandomOrder()->first();
                @endphp
                {{$question->question}}
            </h4>
            </br>
            <input type="hidden" id="yes-score" value="{{$question->yes}}">
            <input type="hidden" id="no-score"  value="{{$question->no}}">
            <button class="btn btn-primary me-2" data-id="{{$question->id}}" id="yes">Yes</button>
            <button class="btn btn-light" data-id="{{$question->id}}" id="no">No</button>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function(){
            $("#yes").click(function(){
                let data = {
                    'id' : $(this).attr('data-id'),
                    'score' : $("#yes-score").val(),
                }
                $.ajax({
                    url: '/question',
                    type: 'POST',
                    data: data,
                    success: function (responseData){
                        $("#role").html(responseData.role)
                        $("#question").html(responseData.question)
                        $("#yes-score").html(responseData.yes)
                        $("#no-score").html(responseData.no)
                    }
                });
            });
            $("#no").click(function(){
                let data = {
                    'id' : $(this).attr('data-id'),
                    'score' : $(this).attr('data-score'),
                }
                alert('no')
            });
        });
    </script>
@stop
