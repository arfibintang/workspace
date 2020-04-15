@extends('layouts.app')

@section('content')
<div class="container">
    @include('component.space')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Space</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        This is List Space 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
