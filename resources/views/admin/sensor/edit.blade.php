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
                    <h3>Edit Sensor
                        <a href="{{ url('admin/index') }}" class="btn btn-sm text-white btn-danger float-end">Kembali</a>
                    </h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('admin/sensor/'.$sensor->id) }}" method="POST">
                        @csrf
                        @method('PUT')

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
                                <button type="submit" class="btn btn-success text-white">Simpan</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
