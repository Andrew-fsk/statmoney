@extends('adminlte::page')

@section('title', 'Edit ' . $account->name)

@section('content_header')
    <h1>Edit "{{ $account->name }}"</h1>
    <form action="{{ route('account.update', $account->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                   value="@if( old('name') ){{ old('name') }}@else{{$account->name}}@endif" name="name" placeholder="Name">
            @error('name')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Balance</label>
            <input type="text" class="form-control @error('balance') is-invalid @enderror" id="balance"
                   value="@if( old('balance') ){{ old('balance') }}@else{{$account->balance}}@endif" name="balance" placeholder="Balance">
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
