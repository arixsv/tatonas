@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Sensor
                        <a href="{{ url('admin/sensor/create') }}" class="btn btn-sm text-white btn-primary float-end">Tambah Sensor</a>
                    </h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Sensor</th>
                                <th>Sensor Name</th>
                                <th>Unit</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sensor as $sensor)
                            <tr>
                                <td class="text-center">{{ $sensor->sensor }}</td>
                                <td class="text-center">{{ $sensor->sensor_name }}</td>
                                <td class="text-center">{{ $sensor->unit }}</td>
                                <td class="text-center">{{ $sensor->created_by }}</td>
                                <td class="text-center">
                                    <a href="{{ url('admin/sensor/'.$sensor->id.'/edit') }}" class="btn btn-success text-white">Edit</a>
                                    <a href="{{ url('admin/sensor/'.$sensor->id.'/delete') }}" onclick="return confirm('Yakin ingin menghapus ini?')" class="btn btn-danger text-white">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
