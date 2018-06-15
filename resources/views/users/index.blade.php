@extends('layouts.app')
<!--layoutsフォルダのappファイルを継承-->

@section('content')
    @include('users.users', ['users' => $users])
    <!--$usersにusersを代入-->
@endsection