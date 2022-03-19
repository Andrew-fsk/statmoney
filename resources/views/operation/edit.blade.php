@extends('adminlte::page')

@section('title', 'Edit operation ' . $operation->id)

@section('content_header')
    <h1>Edit operation "{{ $operation->id }}"</h1>
    <form action="{{ route('operation.update', $operation->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Amount</label>
            <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount"
                   value="@if( old('amount') ){{ old('amount') }}@else{{$operation->amount}}@endif" name="amount" placeholder="Amount">
            @error('amount')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Comment</label>
            <input type="text" class="form-control @error('comment') is-invalid @enderror" id="comment"
                   value="@if( old('comment') ){{ old('comment') }}@else{{$operation->comment}}@endif" name="balance" placeholder="Comment">
            @error('comment')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            @foreach( $accounts as $account)
                <label class="form-check" style="font-weight: normal; cursor: pointer">
                    <input class="form-check-input" type="radio" name="account_id" value="{{ $account->id }}" @if (!old('account_id') && $operation->account_id == $account->id) checked @elseif (old('account_id') == $account->id) checked @endif>
                    <span class="form-check-label">{{ $account->name }}</span>
                </label>
            @endforeach
        </div>
        <p>{{old('is_income')}}</p>
        <div class="form-group">
            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" name="is_income" value="1" @if(old('is_income') || $operation->is_income){{'checked'}}@endif id="is_income">
                <label style="cursor: pointer" class="custom-control-label" for="is_income">Is income</label>
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
