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
                        <td>{{$department->id}}</td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$department->title}}</td>
                    </tr>
                    <tr>
                        <td>Has count users</td>
                        <td>{{$department->users_count}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>




@endsection

