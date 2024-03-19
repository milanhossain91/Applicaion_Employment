<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    use HasFactory;
    protected $table = 'tbl_eaeducation';
    protected $primaryKey = 'id';

    protected $fillable = [
        // List all the attributes that can be mass-assigned
        'master_id',
        'degree_title',
        'name_of_institution',
        'year_of_passing',
        'group',
        'gpa',
        'achievements',
        'created_at',
        'updated_at',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'master_id');
    }
}
