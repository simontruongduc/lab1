@extends('app')
@section('content')
<div class="col-lg-4 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo">
            <h4>Quiz Question!</h4>
        </div>
        <h6 class="fw-light">Enter your name before start game</h6>
        <form class="pt-3" action="/regist" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="name" required class="form-control form-control-lg" placeholder="Your name is ...">
            </div>
            <div class="pt-3">
                <button type="submit" class="btn btn-primary me-2">Start game</button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    introduction
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">introduction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Many of our components require the use of JavaScript to function. Specifically, they require jQuery, Popper.js, and our own JavaScript plugins. Place the following
                    s near the end of your pages, right before the closing
                    tag, to enable them. jQuery must come first, then Popper.js, and then our JavaScript plugins.
                        We use jQuery’s slim build, but the full version is also supported.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@stop
