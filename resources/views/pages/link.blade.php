@extends('layouts.master')

@section('title', 'Link Page')

@section('content')
    <h4 class="text_red">Link page</h4>

    <div class="container">
        <div class="row">
            <div class="col">
                <button class="btn btn-primary">Get email</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Get encoded email</button>
            </div>
        </div>
    </div>

@endsection

@section('footerScripts')
    @parent
    <script src="{{ asset('/assets/js/links.js') }}"></script>
@endsection
