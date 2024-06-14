@extends('layouts.master')

@section('title', 'Ten thousand per thousand')

@section('content')
    <h4>Ten thousand</h4>

    <button
        id="get_records"
        class="btn btn-primary">
        Get 10000 records per 1000
    </button>

    <br>

    <table class="table">
        <thead>
        <tr>
            <th scope="col" style="width: 5%;">start</th>
            <th scope="col" style="width: 5%;">offset</th>
            <th scope="col" style="width: 5%;">count</th>
            <th scope="col" style="width: 85%;">data</th>
        </tr>
        </thead>
        <tbody class="tbody" id="table_content"></tbody>
    </table>

@endsection

@section('footerScripts')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('/assets/js/utils.js') }}"></script>
    <script src="{{ asset('/assets/js/thousand.js') }}"></script>
@endsection
