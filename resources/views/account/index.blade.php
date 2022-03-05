@extends('adminlte::page')

@section('title', 'Accounts')

@section('content_header')
    <h1>Accounts</h1>
@stop

@section('content')
    <div class="row">
        @foreach( $accounts as $account)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
{{--                    <span class="info-box-icon bg-gradient-green"><i class="far fa-usd"></i></span>--}}
                    <div class="info-box-content">
                        <span class="info-box-text h4">{{ $account->name }}</span>
                        <span class="info-box-number"> {{ $account->balance }} UAH</span>
                    </div>
                    <div class="d-flex flex-column">
                    <form action="{{ route('account.delete', $account->id) }}" method="post" class="">
                        @csrf
                        @method('delete')
                        <label style="margin-bottom: 0;" class="btn btn-danger">

                            <i class="far fa-trash-alt"></i>
                            <input type="submit" hidden value="Delete"
                                   class="btn btn-block btn-danger">
                        </label>
                    </form>
                    <a style="width: 40px; height: 40px; margin-top: 10px;" type="button" class="btn btn-primary"
                       href="{{ route('account.edit', $account->id) }}"><i
                            class="far fa-edit"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
            <a href="{{ route('account.create') }}" class="col-md-3 col-sm-6 col-12 align-items-center d-flex">
                <span class="btn btn-block btn-info btn-lg">Add new</span>
            </a>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
