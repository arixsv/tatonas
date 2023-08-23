<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sensor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'master_sensor';

    protected $primaryKey = 'id';
    protected $dates = 'deleted_at';

    protected $fillable = [
        'sensor',
        'sensor_name',
        'unit',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
