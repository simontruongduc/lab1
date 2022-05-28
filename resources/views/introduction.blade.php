@extends('app')
@section('content')
<div class="col-lg-4 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo">
            <h4>Quiz Question!</h4>
        </div>
        <h6 class="fw-light">Enter your name before start game</h6>
        <form class="pt-3">
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Your name is ...">
            </div>
            <div class="mt-3">
                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="start.html">Start Game</a>
            </div>
        </form>
    </div>
</div>
@stop
