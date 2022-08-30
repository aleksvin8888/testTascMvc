@extends('layouts.app')



@section('mainContent')
    <div class="container ">
        <div class="card mb-4 col-12 strpied-tabled-with-hover rounded-0">
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="admin-tr-red">
                        <th>#</th>
                        <th>##</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Id</td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Nmae</td>
                        <td>{{ $user->first_name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>
                            <a href="{{route('departments.show', $user->department)}}" >{{ $user->department->title }}</a>

                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ $user->address }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <td>Verification status</td>
                        <td>@if($user->email_verified_at == null)
                                Unverified
                            @else
                                Verified
                            @endif</td>
                    </tr>
                    <tr>
                        <td>Registration Date</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td>{{ $user->comment }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>




@endsection
