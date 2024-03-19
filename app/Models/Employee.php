<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'tbl_eamaster';
    protected $primaryKey = 'id';

    protected $fillable = [
        // List all the attributes that can be mass-assigned
        'position',
        'name',
        'staff_id',
        'fname',
        'mname',
        'present_address',
        'permanent_address',
        'emergency_contact_person',
        'emergency_contact_no',
        'emergency_contact_relation',
        'job_before',
        'job_before_when',
        'relative_working',
        'relative_working_name',
        'relative_working_designation',
        'relative_working_placeofwork',
        'relative_working_telephone',
        'nationality',
        'placeofbirth',
        'dateofbirth',
        'religion',
        'blood_group',
        'national_id_no',
        'passport_no',
        'license',
        'maritial_status',
        'name_of_spouse',
        'no_of_children',
        'other_dependents',
        'other_income',
        'other_income_brief',
        'category_of_membership',
        'political_organization',
        'political_organization_details',
        'hobbies',
        'other_expertises',
        'references_one_name',
        'references_one_occupation',
        'references_one_address',
        'references_one_contactno',
        'references_one_relation',
        'references_two_name',
        'references_two_occupation',
        'references_two_address',
        'references_two_contactno',
        'references_two_relation',
        'declaration_name',
        'declaration_date',
        'declaration_signature',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $guarded = [];
    public function education()
    {
        return $this->hasMany(EmployeeEducation::class, 'master_id');
    }
    public function otherQualifications()
    {
        return $this->hasMany(EmployeeOtherqualification::class, 'master_id');
    }
    public function previousEmployments()
    {
        return $this->hasMany(EmployeePreviousemployment::class, 'master_id');
    }
}
