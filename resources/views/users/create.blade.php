@extends('layouts.default')
@section('title', 'Create User')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>signup</h5>
            </div>
            <div class="card-body">
                {{-- add error info --}}
                @include('shared._errors')
                <form method="POST" action="{{ route('users.store') }}">
                    {{-- add csrf --}}
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation">Password confirm:</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">All Ready! Let's GO</button>
                </form>
            </div>
        </div>
    </div>
@stop