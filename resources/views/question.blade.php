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
            <a id="hint-btn">hint</a>
            </br>
            <input type="hidden" id="yes-score" value="{{$question->yes}}">
            <input type="hidden" id="no-score"  value="{{$question->no}}">
            <input type="hidden" id="question_id"  value="{{$question->id}}">
            <button class="btn btn-primary me-2"  id="yes">Yes</button>
            <button class="btn btn-warning" id="no">No</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="hint-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p id="hint">{{$question->hint}}</p>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function(){
            $("#yes").click(function(){
                var loading = loadingShow();
                let data = {
                    'id' : $("#question_id").val(),
                    'score' : $("#yes-score").val(),
                }
                $.ajax({
                    url: '/question',
                    type: 'POST',
                    data: data,
                    success: function (responseData){
                        if(responseData.finish){
                            window.location.href= '/finish';
                        }
                        $("#role").html(responseData.role)
                        $("#question").html(responseData.question)
                        $("#yes-score").val(responseData.yes)
                        $("#no-score").val(responseData.no)
                        $("#question_id").val(responseData.id)
                        $("#hint").html(responseData.hint)
                    }
                });
                loadingHide(loading);
            });
            $("#no").click(function(){
                var loading = loadingShow();
                let data = {
                    'id' : $("#question_id").val(),
                    'score' : $("#no-score").val(),
                }
                $.ajax({
                    url: '/question',
                    type: 'POST',
                    data: data,
                    success: function (responseData){
                        if(responseData.finish){
                            window.location.href= '/finish';
                        }
                        $("#role").html(responseData.role)
                        $("#question").html(responseData.question)
                        $("#yes-score").val(responseData.yes)
                        $("#no-score").val(responseData.no)
                        $("#question_id").val(responseData.id)
                        $("#hint").html(responseData.hint)
                    }
                });
                loadingHide(loading);
            });

            $('#hint-btn').click(function(){
                $('#hint-modal').modal('show');
            });
        });
    </script>
@stop
