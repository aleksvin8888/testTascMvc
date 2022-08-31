@extends('layouts.app')



@section('mainContent')

    <div class="container">
        <div>
            <div class="bg-light p-5 rounded">
                <div class="col-sm-8 mx-auto">
                    <h3>Edit department</h3>
                    <form action="{{route('departments.update', $department)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="inputTitle" class="form-label">Title</label>
                            <input class="form-control"
                                   name="title"
                                   value="{{old('title', $department->title)}}"
                                   type="text"
                                   id="inputTitle"
                                   required>
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
