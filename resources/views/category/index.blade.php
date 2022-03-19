@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')

    <div class="row">
        @if(isset($default_categories))
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Default categories list</h3>
                    </div>

                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: calc(100% - 50px);">Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $default_categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        @endif
        @if(isset($categories))
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories list</h3>
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
                                <th style="width: 200px;">Name</th>
                                <th style="width: 200px;">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td> {{--<a style="width: 40px; height: 40px; margin-top: 10px;" type="button" class="btn btn-primary"
                                            href="{{ route('operation.edit', $operation->id) }}"><i
                                                class="far fa-edit"></i></a>--}}
                                        <form action="{{ route('category.delete', $category->id) }}" method="post" class="">
                                            @csrf
                                            @method('delete')
                                            <label style="margin-bottom: 0;" class="btn btn-danger">

                                                <i class="far fa-trash-alt"></i>
                                                <input type="submit" hidden value="Delete"
                                                       class="btn btn-block btn-danger">
                                            </label>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        @endif
    </div>
    <div class="row">{{--
        <a href="{{ route('operation.create') }}" class="col-md-3 col-sm-6 col-12 align-items-center d-flex">
            <span class="btn btn-block btn-info btn-lg">Add new</span>
        </a>--}}
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
