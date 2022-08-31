@extends('layouts.app')



@section('mainContent')
            <div class="container ">
                <div class="row y-5">
                    <table class="table table-success table-striped">
                        <thead>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    <a class="text-decoration-none "
                                        href="{{route('users.show', $user)}}" >
                                        {{$user->first_name}}
                                    </a>
                                </td>
                                <td>{{$user->email}} </td>
                                <td>{{$user->department->title}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>


@endsection
