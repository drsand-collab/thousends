@extends('layouts.master')

@section('title', 'Ten thousand per thousand')

@section('content')
    <h4>Ten thousand</h4>

@endsection

@section('footerScripts')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('/assets/js/thousand.js') }}"></script>
@endsection
