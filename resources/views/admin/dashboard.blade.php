@extends('admin.layouts.app')
@php $dashboard  = TRUE; @endphp
@section('content')

<div class="table-block">
    @include('messages.message')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Registered Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @php $index = 0; @endphp
        @foreach($users as $user)
            <tr>
                <th scope="col" class="index">
                    {{$index++}}
                </th>
                <th scope="col" class="center">
                    {{$user['name']}}
                </th>

                <th scope="col">
                    {{$user['age']}}
                </th>
                <th scope="col">
                    {{$user['email']}}
                </th>
                <th scope="col">
                    {{date('d-m-Y h:i:s', strtotime($user['created_at']))}}
                </th>
                <th>
                    <form action="{{route('delete-user',['id'=>$user['id']])}}" method="post">
                        <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i>&nbsp;Delete </button>
                        {!! method_field('delete') !!}
                        {!! csrf_field() !!}
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="paginate-block">
        {{$users->links()}}
    </div>
</div>
@endsection

