@extends('layouts.app')



@section('mainContent')
    <div class="container ">
        <div class="row y-5">
            <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th>##</th>
                    <th>Title</th>
                    <th>Has user</th>
                </tr>
                </thead>
                <tbody>
                @foreach($departments as $department)
                    <tr>
                        <td>{{$department->id}}</td>
                        <td>
                            <a href="{{route('departments.show', $department)}}" >{{$department->title}}</a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Has {{$department->users_count}} users
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach($department->users as $user)
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{route('users.show', $user)}}">
                                            {{$user->first_name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
