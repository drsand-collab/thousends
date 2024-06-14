@extends('layouts.master')

@section('title', 'Link Page')

@section('content')
    <h4 class="text_red">Link page</h4>

    <div class="container">
        <div class="row">
            <div class="col">
                <a
                    href="{{ route('api.link.generate', ['email'=>'admin@mail.com']) }}"
                    class="btn btn-primary">
                    Generate link
                </a>
            </div>
            <div class="col">
                <a
                    href="{{ route('api.link.get', ['email'=>'YWRtaW5AbWFpbC5jb20=']) }}"
                    class="btn btn-primary">
                    Get decoded link
                </a>
            </div>
        </div>
    </div>

@endsection

@section('footerScripts')
    @parent
    <script src="{{ asset('/assets/js/links.js') }}"></script>
@endsection
