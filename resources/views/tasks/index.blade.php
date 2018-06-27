@extends('layouts.master')

@section('title','練習程式')

@section('content')
        <div class="container">

            <div class="col-sm-offset-2 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Build Task
                    </div>

                    <div class="panel-body">
                        <div class="alert alert-danger">
                            <strong>Please Check Input Data</strong>
                            <br><br>
                            <ul>
                                <li>Error Message 1</li>
                                <li>Error Message 2</li>
                                <li>Error Message 3</li>
                            </ul>
                        </div>

                        <form action="" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i>Build Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="panel-heading">
                       All Task Lists
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <tread>
                                <tr>
                                    <th>Task</th>
                                    <th width="200"> </th>
                                </tr>
                            </tread>
                            <tbody>
                                <tr>
                                    <td class="table-text">
                                        <div class="">Task 2</div>
                                    </td>
                                    <td>
                                        <form action="" method="post" class="form-inline">
                                            <button type="submit" class="btn btn-success"></button>
                                            <i class="fa fa-check"></i>完成
                                        </form>
                                        <form action="" method="post" class="form-inline">
                                            <button type="submit" class="btn btn-danger"></button>
                                            <i class="fa fa-trash"></i>刪除
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-text">
                                        <div class="">Task 1</div>
                                    </td>
                                    <td>
                                        <form action="" method="post" class="form-inline">
                                            <button type="submit" class="btn btn-success"></button>
                                            <i class="fa fa-check"></i>完成
                                        </form>
                                        <form action="" method="post" class="form-inline">
                                            <button type="submit" class="btn btn-danger"></button>
                                            <i class="fa fa-trash"></i>刪除
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
