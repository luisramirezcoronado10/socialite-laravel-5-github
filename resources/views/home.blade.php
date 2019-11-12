@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido Mr.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{Auth::user()->name}}</p>
                    <p>{{Auth::user()->email}}</p>
                    <img class="img-round" src="{{Auth::user()->avatar}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
