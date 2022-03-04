@extends('adminlte::page')

@section('title', 'Settings')

@section('content_header')
    <h1>Settings</h1>
@stop

@section('content')
    <p>Setting of account</p>
    <form action="{{ route('update') }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                   value="@if( old('name')){{ old('name') }}@else{{ $user->name }}@endif" name="name" placeholder="Name">
            @error('name')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
