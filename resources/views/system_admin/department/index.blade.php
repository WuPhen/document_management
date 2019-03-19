@extends('layouts.admin.master')
@section('title')
    Quản lý phòng ban
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('department.create') }}" class="btn btn-primary">Thêm</a>
    @include('common.errors')
    <br />
    <br />
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách phòng ban</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên bộ phận</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên bộ phận</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($departments as $department)
                        <tr>
                            <td>{{ $department->id }}</td>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->created_at }}</td>
                            <td><span class="badge badge-pill badge-warning">Warning</span></td>
                            <td>
                                <ul class="d-flex justify-content-center">
                                    <li class="mr-3"><a href="{{ route('department.edit', $department->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                    <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
