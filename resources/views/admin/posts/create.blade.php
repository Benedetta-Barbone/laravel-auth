@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.posts.create')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <h1>
                        Create new post
                    </h1>
                </div>
                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="image">Image Url</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content">Post Content:</label>
                    <textarea name="content" id="content" cols="150" rows="5"> </textarea>
                </div>

                <input type="submit" value="Create new post" class="btn btn-primary btn-lg">
                <input type="reset" value="Reset fields" class="btn btn-primary btn-lg">
            </form>
        </div>
    </div>
</div>
@endsection
