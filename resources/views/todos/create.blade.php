@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Creating task') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('todos.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    aria-describedby="titleHelp">
                                <div id="titleHelp" class="form-text">What do you wanna do today ?</div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="/todos" role="button" class="btn btn-danger">Cancel</a>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul class="m-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
