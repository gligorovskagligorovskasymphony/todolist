@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new item</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST">
                            <div class="form-group">
                                <label>Item name:</label>
                                <input type="text" class="form-control" placeholder="Item name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-success float-right">Save</button>
                        </form>
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
