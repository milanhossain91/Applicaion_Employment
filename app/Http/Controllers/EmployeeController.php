<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeEducation;
use App\Models\EmployeeOtherqualification;
use App\Models\EmployeePreviousemployment;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('careerform.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
            $employees = new Employee();
            $employees->position = $request->position;
            $employees->name = $request->name;
            $employees->staff_id = $request->staff_id;
            $employees->fname = $request->fname;
            $employees->mname = $request->mname;
            $employees->present_address = $request->present_address;
            $employees->permanent_address = $request->permanent_address;
            $employees->emergency_contact_person = $request->emergency_contact_person;
            $employees->emergency_contact_no = $request->emergency_contact_no;
            $employees->emergency_contact_relation = $request->emergency_contact_relation;
            $employees->job_before = $request->job_before;
            $employees->job_before_when = $request->job_before_when;
            $employees->relative_working = $request->relative_working;
            $employees->relative_working_name = $request->relative_working_name;
            $employees->relative_working_designation = $request->relative_working_designation;
            $employees->relative_working_placeofwork = $request->relative_working_placeofwork;
            $employees->relative_working_telephone = $request->relative_working_telephone;
            $employees->nationality = $request->nationality;
            $employees->placeofbirth = $request->placeofbirth;
            $employees->dateofbirth = $request->dateofbirth;
            $employees->religion = $request->religion;
            $employees->blood_group = $request->blood_group;
            $employees->national_id_no = $request->national_id_no;
            $employees->passport_no = $request->passport_no;
            $employees->license = $request->license;
            $employees->maritial_status = $request->maritial_status;
            $employees->name_of_spouse = $request->name_of_spouse;
            $employees->no_of_children = $request->no_of_children;
            $employees->other_dependents = $request->other_dependents;
            $employees->other_income = $request->other_income;
            $employees->other_income_brief = $request->other_income_brief;
            $employees->category_of_membership = $request->category_of_membership;
            $employees->political_organization = $request->political_organization;
            $employees->political_organization_details = $request->political_organization_details;
            $employees->hobbies = $request->hobbies;
            $employees->other_expertises = $request->other_expertises;
            $employees->references_one_name = $request->references_one_name;
            $employees->references_one_occupation = $request->references_one_occupation;
            $employees->references_one_address = $request->references_one_address;
            $employees->references_one_contactno = $request->references_one_contactno;
            $employees->references_one_relation = $request->references_one_relation;
            $employees->references_two_name = $request->references_two_name;
            $employees->references_two_occupation = $request->references_two_occupation;
            $employees->references_two_address = $request->references_two_address;
            $employees->references_two_contactno = $request->references_two_contactno;
            $employees->references_two_relation = $request->references_two_relation;
            $employees->declaration_name = $request->declaration_name;
            $employees->declaration_date = $request->declaration_date;
            $employees->declaration_signature = $request->declaration_signature;
            $employees->status  = 1;
            $employees->created_at  = now();
            $employees->updated_at  = now();
            $employees->save();

            $lastInsertedId = $employees->id;
            if ($request->has('education') && is_array($request->education)) {
                $educationData = [];
                foreach ($request->education as $education) {
                    $educationData[] = array_merge($education, [
                        'master_id' => $lastInsertedId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
                EmployeeEducation::insert($educationData);
            }
            if ($request->has('other_qualifications') && is_array($request->other_qualifications)) {
                $qualificationData = [];
                foreach ($request->other_qualifications as $qualification) {
                    $qualificationData[] = array_merge($qualification, [
                        'master_id' => $lastInsertedId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
                EmployeeOtherqualification::insert($qualificationData);
            }


            if ($request->has('previous_employments') && is_array($request->previous_employments)) {
                $employmentData = [];
                foreach ($request->previous_employments as $employment) {
                    $employmentData[] = array_merge($employment, [
                        'master_id' => $lastInsertedId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
                EmployeePreviousemployment::insert($employmentData);
            }

            return response()->json(['message' => 'The employee information saved successfully.'], 401);

    }



    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        $masterId = $request->id;
        $employee = Employee::find($masterId);
        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }
        $educationData = EmployeeEducation::where('master_id', $masterId)->get();
        $qualificationData = EmployeeOtherqualification::where('master_id', $masterId)->get();
        $employmentData = EmployeePreviousemployment::where('master_id', $masterId)->get();
        $responseData = [
            'employee' => $employee,
            'education' => $educationData,
            'other_qualifications' => $qualificationData,
            'previous_employments' => $employmentData,
        ];
        return response()->json($responseData);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $masterId = $request->id;
        $employee = Employee::find($masterId);
        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }
        $employee->update($request->all());

        if ($request->has('education')) {
            $employee->education()->delete();
            $employee->education()->createMany($request->education);
        }

        if ($request->has('other_qualifications')) {
            $employee->otherQualifications()->delete();
            $employee->otherQualifications()->createMany($request->other_qualifications);
        }
        if ($request->has('previous_employments')) {
            $employee->previousEmployments()->delete();
            $employee->previousEmployments()->createMany($request->previous_employments);
        }
        return response()->json(['message' => 'Employee data updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request)
    {
        $masterId = $request->id;
        $employee = Employee::where('id', $masterId)->first();

        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }
        $employee->education()->delete();
        $employee->otherQualifications()->delete();
        $employee->previousEmployments()->delete();
        $employee->delete();
        return response()->json(['message' => 'Employee data deleted successfully'], 200);
    }

}
