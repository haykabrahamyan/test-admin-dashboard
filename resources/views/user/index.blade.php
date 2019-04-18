@extends('user.layouts.layout')
@php $home  = TRUE; @endphp
@section('styles')
    <link href="{{ asset('css/table.css')  }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container pt-5">
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Created At</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Created At</th>
        </tr>
        </tfoot>
    </table>
</div>
@endsection
@section('script')
    {{--<script src="{{asset('js/app.js')}}"></script>--}}
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/filter.js')}}"></script>
@endsection

