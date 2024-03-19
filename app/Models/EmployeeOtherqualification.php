<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeOtherqualification extends Model
{
    use HasFactory;
    protected $table = 'tbl_eaotherqualifications';
    protected $primaryKey = 'id';

    protected $fillable = [
        // List all the attributes that can be mass-assigned
        'master_id',
        'certificate',
        'institution',
        'country',
        'year',
        'duration',
        'created_at',
        'updated_at',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'master_id');
    }
}
