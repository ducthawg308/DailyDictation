@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card shadow-lg border-0 rounded-lg mt-1">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Thêm exercise</h3></div>
            <div class="card-body">
                <form method="POST" action="{{ url('admin/exercise/store-exercise1') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-floating mb-3">
                        <select class="form-select" name="topic" id="floatingSelect">
                        <option value="">Chọn chủ đề</option>
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                        @endforeach
                        </select>       
                        <label for="floatingSelect">Topic</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" name="title" type="text" placeholder="Title" />
                        <label for="title">Title</label>
                        @error('name')
                            <small class="text- danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button class="btn btn-primary" type="submit" value="Thêm mới" name="btn-add">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection