@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check())
        <div class="row justify-content-between">
            <div class="col-md-2">{{ Auth::user()->name }} uses stack:</div>
            <div class="col-md-2">
                <a href="{{ route('user.skill') }}" class="btn btn-light">Edit skills</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul>
                    @foreach ($skills as $skill)
                        <li>{{ $skill->skill }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
@endsection
