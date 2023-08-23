<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sensor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SensorFormRequest;

class SensorController extends Controller
{
    public function index()
    {
        $sensor = Sensor::all();
        return view('admin.sensor.index', compact('sensor'));
    }

    public function create()
    {
        return view('admin.sensor.create');
    }

    public function store(SensorFormRequest $request)
    {
        $validatedData = $request->validated();

        $sensor = Sensor::create([
            'sensor' => $validatedData['sensor'],
            'sensor_name' => $validatedData['sensor_name'],
            'unit' => $validatedData['unit'],
            'created_by' => auth()->user()->id,
        ]);

        return redirect('admin/sensor')->with('message', 'Sensor berhasil ditambahkan');
    }

    public function edit(Sensor $sensor)
    {
        return view('admin.sensor.edit', compact('sensor'));
    }

    public function update(SensorFormRequest $request, $sensor)
    {
        $validated = $request->validate([
            'sensor' => ['required', 'string', 'max:2'],
            'sensor_name' => ['required', 'string', 'max:50'],
            'unit' => ['required', 'string', 'max:10'],
            'created_by' => ['bigint'],
        ]);

        Sensor::findOrFail($sensor)->update([
            'sensor' => $request->sensor,
            'sensor_name' => $request->sensor_name,
            'unit' => $request->unit,
            'created_by' => auth()->user()->id,
        ]);

        return redirect('/admin/sensor')->with('message', 'Sensor berhasil diperbarui');
    }

    public function delete($sensor)
    {
        $this->sensor = $sensor;
    }

    public function destroy(Sensor $sensor)
    {
        $sensor = Sensor::findOrFail($sensor);
        $sensor->delete();
        return redirect('/admin/sensor')->with('message', 'Sensor berhasil dihapus');
    }
}
