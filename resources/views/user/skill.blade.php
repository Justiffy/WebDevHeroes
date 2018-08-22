@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
            <div class="form-group">
                <div class="dropdown">
                    <label for="searchSkillInput">Search skill</label>
                    <input type="search" class="form-control" id="searchSkillInput">
                    <div class="dropdown-menu show" id="skillList">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection