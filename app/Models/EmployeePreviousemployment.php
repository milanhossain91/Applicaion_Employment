<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePreviousemployment extends Model
{
    use HasFactory;
    protected $table = 'tbl_eapreviousemployment';
    protected $primaryKey = 'id';

    protected $fillable = [
        // List all the attributes that can be mass-assigned
        'master_id',
        'job_title',
        'name',
        'form',
        'to',
        'last_salary_drawn',
        'reason_for_leaving',
        'created_at',
        'updated_at',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'master_id');
    }
}
