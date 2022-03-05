@extends('adminlte::page')

@section('title', 'New account')

@section('content_header')
    <h1>Add new account</h1>
    <form action="{{ route('account.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                   value="@if( old('name')){{ old('name') }}@else{{'New balance'}}@endif" name="name" placeholder="Name">
            @error('name')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Balance</label>
            <input type="text" class="form-control @error('balance') is-invalid @enderror" id="balance"
                   value="@if( old('balance')){{ old('name') }}@else{{0}}@endif" name="balance" placeholder="Balance">
            @error('balance')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop

@section('content')

@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
