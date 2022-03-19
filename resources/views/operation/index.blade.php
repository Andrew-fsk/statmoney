@extends('adminlte::page')

@section('title', 'Operations')

@section('content_header')
    <h1>Operations</h1>
@stop

@section('content')

    <div class="row">
        @if(isset($operations))
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Operations list</h3>
                        {{--<div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>--}}
                    </div>

                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 200px;">Amount</th>
                                <th>Comment</th>
                                <th>Account</th>
                                <th style="width: 150px;">Date</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $operations as $operation)
                                <tr>
                                    <td>{{ $operation->id }}</td>
                                    <td class="font-weight-bolder"> <span class="badge @if( $operation->is_income){{'bg-success'}}@else{{'bg-danger'}}@endif" style="font-size: 16px;">@if( $operation->is_income){{'+'}}@else{{'-'}}@endif{{ $operation->amount }} UAH</span></td>
                                    <td>{{ $operation->comment }}</td>
                                    <td>{{ $operation->account->name }}</td>
                                    <td>{{ $operation->created_at }}</td>
                                    <td> <a style="width: 40px; height: 40px; margin-top: 10px;" type="button" class="btn btn-primary"
                                            href="{{ route('operation.edit', $operation->id) }}"><i
                                                class="far fa-edit"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        @endif
    </div>
    <div class="row">
        <a href="{{ route('operation.create') }}" class="col-md-3 col-sm-6 col-12 align-items-center d-flex">
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
