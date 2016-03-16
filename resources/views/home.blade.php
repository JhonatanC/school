@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    {{ Auth::user()->name ." " . Auth::user()->last_name }}
                </div>

                <img class="avatar" src="{{ Auth::user()->avatar }}.jpg" alt=""/>

            </div>
        </div>
    </div>
</div>
@endsection
