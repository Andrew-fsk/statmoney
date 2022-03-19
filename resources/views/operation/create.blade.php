@extends('adminlte::page')

@section('title', 'New operation')

@section('content_header')
    <h1>Add new operation</h1>
    <form action="{{ route('operation.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Amount</label>
            <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount"
                   value="@if( old('amount')){{ old('amount') }}@endif" name="amount" placeholder="Amount">
            @error('amount')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Comment</label>
            <input type="text" class="form-control @error('comment') is-invalid @enderror" id="comment"
                   value="@if( old('comment')){{ old('comment') }}@endif" name="comment" placeholder="Comment">
            @error('comment')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            @foreach( $accounts as $account)
            <label class="form-check" style="font-weight: normal; cursor: pointer">
                <input class="form-check-input" type="radio" name="account_id" value="{{ $account->id }}" @if (!old('account_id') && $loop->first) checked @elseif (old('account_id') == $account->id) checked @endif>
                <span class="form-check-label">{{ $account->name }}</span>
            </label>
            @endforeach
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="custom-select rounded-0" name="category_id" id="category_id">
                @foreach( $categories as $category)
                    <option @if( old('category_id') == $category->id){{'selected'}}@endif value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Income?</label>
            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" name="is_income" value="1" id="is_income">
                <label style="cursor: pointer" class="custom-control-label" for="is_income"></label>
            </div>
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
