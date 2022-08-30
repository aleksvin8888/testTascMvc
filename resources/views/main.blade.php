@extends('layouts.app')



@section('mainContent')

    <div class="container">
        <div>
            <div class="bg-light p-5 rounded">
                <div class="col-sm-8 mx-auto">
                    <h3>Add new user</h3>
                    <form action="{{route('users.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input class="form-control"
                                   name="email"
                                   value="{{old('email')}}"
                                   type="email"
                                   id="inputEmail"
                                   aria-describedby="emailHelp"
                                   required>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputFirstName" class="form-label">First name</label>
                            <input class="form-control"
                                   name="first_name"
                                   value="{{old('first_name')}}"
                                   type="text"
                                   id="inputFirstName"
                                   required>
                            @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input class="form-control"
                                   name="address"
                                   value="{{old('address')}}"
                                   type="text"
                                   id="inputAddress">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputPhone" class="form-label">Phone</label>
                            <input class="form-control"
                                   name="phone"
                                   value="{{old('phone')}}"
                                   type="text"
                                   id="inputPhone">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputComment" class="form-label">Add Comment</label>
                            <textarea type="text"
                                      name="comment"
                                      class="form-control"
                                      id="inputComment"
                                      rows="10"
                                      placeholder="Add Comment">{{old( 'comment' )}}</textarea>
                            @error('comment')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label">Select Department</label>
                            <select class="form-control"
                                    id="inputDepartment"
                                    name="department_id"
                                    required>
                                <option value="">Select</option>

                                @foreach($departments as $department)
                                    <option @if($department->id == old('department_id')) selected @endif value="{{ $department->id }}">
                                        {{ $department->title }}
                                    </option>
                                @endforeach

                            </select>
                            @error('department_id')
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
