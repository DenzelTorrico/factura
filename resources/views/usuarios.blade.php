@extends("layouts.app")

@section("title","Usuarios")

@section("content")


<table class="table border">
    <tr class="">
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>create</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
        </tr>

    @endforeach
</table>


@endsection