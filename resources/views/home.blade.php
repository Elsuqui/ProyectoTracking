@extends('layouts.app')

@section('content')
<div class="ui segment">
        <div class="ui header">Dashboard</div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        You are logged in!
</div>
@endsection
