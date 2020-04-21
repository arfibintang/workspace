@extends('layouts.app')

@section('content')
<div class="container">
    @include('component.space')
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($spaces as $sp)     
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $sp->title }}
                           @if ($sp->user_id == Auth::user()->id)
                            <form action="{{ route('space.destroy', $sp->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger float-right" onclick="return confirm('Are u sure delete me?')">
                                    Delete
                                </button>
                                <a href="{{ route('space.edit', $sp->id) }}" class="btn btn-sm btn-info float-right text-white">
                                    Edit
                                </a>
                            </form>
                           @endif
                        </h5>
                        <h6 class="card-subtitle">{{ $sp->address }}</h6>
                        <p class="card-text">{{ $sp->description }}</p>
                        {{-- <a href="#" onclick="openDirection({{ $sp->latitude}}, {{$sp->longitude}}, {{$sp->id}})" class="card-link">Direction</a> --}}
                        <a href="#" onclick="openDirection({{ $sp->latitude }}, {{ $sp->longitude }}, {{ $sp->id }})" class="card-link">Direction</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            <div class="row justify-content-center">
                {{ $spaces->links() }}
            </div>
    </div>
@endsection
