@extends('layouts.app')



@section('mainContent')
    <div class="container ">
        <div class="row y-5">

            <div class="m-2">
                <a class="btn btn-primary btn-sm" href="{{ route('departments.create') }}" title="Create">
                   Create new department <i class="fa-solid fa-plus"></i>
                </a>

            </div>

            <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th>##</th>
                    <th>Title</th>
                    <th>Has user</th>
                    <th>Settings</th>
                </tr>
                </thead>
                <tbody>
                @foreach($departments as $department)
                    <tr>
                        <td>{{$department->id}}</td>
                        <td>
                            <a class="text-decoration-none "
                                href="{{route('departments.show', $department)}}">
                                {{$department->title}}
                            </a>
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
                        <td>
                            <a href="{{ route('departments.edit', $department) }}" title="Edit">
                                <i class="fa-solid fa-pencil"></i>
                            </a>

                            <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                               data-attr="{{ route ('department.modal.ajax.delete', $department) }}"
                               data-id="{{$department->id}}"
                               title="Delete">
                                <i class="fas fa-trash text-danger"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="justify-content-center">Підтвердити </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- Полученый ответ Ajax -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
