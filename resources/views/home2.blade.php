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

                                    <button type="button" class="btn btn-block btn-primary" data-toogle="modal" data-target="#modal-default" >Add User</button>


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
            <section class="content-header">


                @foreach($users as $user)
                    <form method="POST" action="home22">
                        <input type="hidden" name="token" value="">


                        <input type="text" name="vards" value="{{ $user->name }}">
                        {{ csrf_field() }}
                        <li>vards</li>

                        <button class="btn btn-app">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                    </form>
                    @endforeach


                    </h1>


            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <!--------------------------
                  | Your Page Content Here |
                  -------------------------->

            </section>
            <!-- /.content -->

@endsection