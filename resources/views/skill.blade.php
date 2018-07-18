@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('skill.store') }}">
        @csrf

        <div class="form-group row">
            <label for="skill" class="col-sm-4 col-form-label text-md-right">Skill</label>

            <div class="col-md-2">
                <input id="skill" type="text" class="form-control{{ $errors->has('skill') ? ' is-invalid' : '' }}" name="skill" value="{{ old('skill') }}" required autofocus>

                @if ($errors->has('skill'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('skill') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Add
                </button>
            </div>
        </div>
    </form>

    @foreach($skills as $skill)
        <ul class="col-sm-2 offset-sm-4 col-form-label">
            <li>{{ $skill->skill }}</li>
        </ul>
    @endforeach
@endsection