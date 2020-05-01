@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My To Do List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for ($i = 0; $i < count($items); $i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{ $items[$i]->name }}</td>
                            <td>@if($items[$i]->status){{'Done'}}@else{{'Pending'}}@endif</td>
                            <td>
                                <a class="btn btn-primary">Edit</a>
                                <a href="/home/show/{{$items[$i]->id}}" class="btn btn-secondary">Preview</a>
                                <a class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>

                    <a href="/home/create" class="btn btn-primary">Add new item</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card-body a{
        color: white !important;
    }
</style>
