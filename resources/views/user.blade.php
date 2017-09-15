@extends('layouts.home.apphome')
@section('content')

    <section class="content">
            <!-- Content Header (Page header) -->
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>

                        <div class="box-tools">

                            <div class="input-group input-group-sm" style="width: 150px;">

                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                    Add User
                                </button>
                                <div class="modal fade" id="modal-default" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Add new user</h4>
                                            </div>


                                                    <!-- /.box-header -->
                                                    <!-- form start -->
                                                    <form class="form-horizontal"  method="POST" action="{{ route('user') }}">
                                                        {{ csrf_field() }}
                                                        <div class="box-body">
                                                            <div class="form-group">

                                                                <label for="inputname" class="col-sm-2 control-label">Name</label>

                                                                <div class="col-sm-10">
                                                                    <input type="name" class="form-control" id="inputname" value='name' placeholder="Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                                                <div class="col-sm-10">
                                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-2 col-sm-10">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>


                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <div class="input-group-btn">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">

                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>edit </th>

                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                            <a href="http://asd.local.lv/edit">
                                                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <a href="http://asd.local.lv/add">
                                            <button type="button" class="btn btn-default"><i class="fa fa-plus"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <section class="content">
                <div class="callout callout-info">

                </div>
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Default Modal</h4>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="vards" value="{{ $user->name }}"/>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal modal-primary fade" id="modal-primary">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Primary Modal</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </section>


            <!-- Main content -->
            <section class="content container-fluid">

                <!--------------------------
                  | Your Page Content Here |
                  -------------------------->

            </section>
            <!-- /.content -->

@endsection