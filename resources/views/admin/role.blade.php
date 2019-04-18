@extends('admin.layouts.app')
@php $roleView  = TRUE; @endphp
@section('content')
    <div class="table-block">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Display Name</th>
            </tr>
            </thead>
            <tbody>
            @php $index = 0; @endphp
            @foreach($roles as $role)
                <tr>
                    <th scope="col" class="index">
                        {{$index++}}
                    </th>
                    <th scope="col" class="center">
                        {{$role['name']}}
                    </th>
                    <th scope="col">
                        {{$role['display_name']}}
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

