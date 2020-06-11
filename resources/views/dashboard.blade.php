@extends('layouts.app')
@section('content')
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Bienvenido aaa{{ Auth()->user()->name }}</h1>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <button class="btn btn-danger">Cerrar sesion</button>
            </form>
        </div>
    </div>
</div>
@endsection
