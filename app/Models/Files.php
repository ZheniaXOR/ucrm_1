<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $table = 'files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;

    protected $fillable = [
        'file_path',
        'file_type',
        'size',
        'date_created',
        'hash',
        'employee_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}