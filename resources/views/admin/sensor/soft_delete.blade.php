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
                    <h3>Soft Delete
                        <a href="{{ url('admin/index') }}" class="btn btn-sm text-white btn-danger float-end">Kembali</a>
                    </h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('admin/sensor/softDelete'.$sensor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                            <div class="mb-3">
                                <label>Sensor</label>
                                <input type="text" name="sensor" value="{{ $sensor->sensor }}" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Sensor Name</label>
                                <input type="text" name="sensor_name" value="{{ $sensor->sensor_name }}" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Unit</label>
                                <input type="text" name="unit" value="{{ $sensor->unit }}" class="form-control" />
                            </div>
                            <div class="mb-3 float-end">
                                <button type="submit" class="btn btn-danger text-white">Soft Delete</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
