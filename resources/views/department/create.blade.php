@extends('layouts.app')



@section('mainContent')

    <div class="container">
        <div>
            <div class="bg-light p-5 rounded">
                <div class="col-sm-8 mx-auto">
                    <h3>Create new department</h3>
                    <form action="{{route('departments.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="inputTitle" class="form-label">Title</label>
                            <input class="form-control"
                                   name="title"
                                   value="{{old('title')}}"
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

