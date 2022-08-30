@extends('layouts.app')



@section('mainContent')

    <div class="container">
        <div>
            <div class="bg-light p-5 rounded">
                <div class="col-sm-8 mx-auto">
                    <h3>Add new user</h3>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input class="form-control"
                                   name="email"
                                   type="email"
                                   id="inputEmail"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="inputFirstName" class="form-label">First name</label>
                            <input class="form-control"
                                   name="first_name"
                                   type="text"
                                   id="inputFirstName">
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input class="form-control"
                                   name="address"
                                   type="text"
                                   id="inputAddress">
                        </div>
                        <div class="mb-3">
                            <label for="inputPhone" class="form-label">Phone</label>
                            <input class="form-control"
                                   name="phone"
                                   type="text"
                                   id="inputPhone">
                        </div>
                        <div class="mb-3">
                            <label for="inputComment" class="form-label">Comment</label>
                            <input name="comment"
                                   type="text"
                                   class="form-control"
                                   id="inputComment">
                        </div>
                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label">Select Department</label>
                            <input name="comment"
                                   type="text"
                                   class="form-control"
                                   id="inputDepartment">
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
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
