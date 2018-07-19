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
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">
                    Add
                </button>
            </div>
        </div>
    </form>

    @foreach($skills as $skill)
        <ul class="col-sm-2 offset-sm-4 col-form-label">
            <li class="row">
                <div class="col-md-4">
                    <span class="btn btn-secondary">{{ $skill->skill }}</span>
                </div>
                <div class="col-md-4">
                    <form method="POST" action="{{ route('skill.destroy', ['id' => $skill->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Remove</button>
                    </form>
                </div>
            </li>
        </ul>
    @endforeach
@endsection