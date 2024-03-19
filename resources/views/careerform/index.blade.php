@extends('layouts.app-master')

@section('content')
<div class="container-form">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="steps-content">
                    <h3 style="display: none">Step <span class="step-number">1</span></h3>
                    <p class="step-number-content active"></p>
                    <p class="step-number-content d-none"></p>
                    <p class="step-number-content d-none"></p>
                    <p class="step-number-content d-none"></p>
                    <p class="step-number-content d-none"></p>
                    <p class="step-number-content d-none"></p>
                </div>
                <ul class="progress-bar">
                    <li class="active">Personal Information</li>
                    <li>Education</li>
                    <li>Other Qualifications</li>
                    <li>Details of Previous Employment</li>
                    <li>References</li>
                    <li>Declaration</li>
                </ul>
            </div>
            <div class="right-side">
                <div class="main active" id="register">
                    <div class="text">
                        <h4>Personal Information</h4>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require id="user_name">
                            <span>Position Applied for</span>
                        </div>
                        <div class="input-div">
                            <input type="text" required require id="user_name">
                            <span>Staff ID</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require id="user_name">
                            <span>Fathers Name</span>
                        </div>
                        <div class="input-div">
                            <input type="text" required require id="user_name">
                            <span>Mothers Name</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <label for="exampleFormControlTextarea1" class="form-label">Address (Present)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1 user_name" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <label for="exampleFormControlTextarea1" class="form-label">Address (Permanent)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1 user_name" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="row" style="border: 1px solid #ced4da; padding-top: 10px; padding-bottom: 10px;">
                            <label>Emergency Contact</label>
                            <div class="col-sm-12">
                                <div class="input-div">
                                    <input type="text" class="form-control" id="motherName" required>
                                    <span>Contact Person</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="motherName1" class="form-label"></label>
                                <div class="input-div">
                                    <input type="text" class="form-control" id="motherName1" required>
                                    <span>Contact No</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="motherName2" class="form-label"></label>
                                <div class="input-div">
                                    <input type="text" class="form-control" id="motherName2" required>
                                    <span>Relation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="border: 1px solid #ced4da; padding-top: 10px; padding-bottom: 10px;">
                        <div class="col-md-8">
                                        <label>Have you applied to ACI for a job before?</label>
                                        <select class="form-control" name="marital_status" id="marital_status" onChange="is_appliedjobbefore(this.value)">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                        </div>
                        <div class="col-md-4 when" style="display:none;">
                                    <label>When</label>
                                    <input type="text" class="form-control" name="spouse_name" id="spouse_name" placeholder="When">
                        </div>
                    </div>

                    <div class="row" style="border: 1px solid #ced4da; padding-top: 10px; padding-bottom: 10px;">
                        <label>If you have any relative working in ACI</label>
                        <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Designation">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Place of work">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telephone No.">
                            </div>
                        </div>
                    </div>

                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require id="user_name" name="nationality" placeholder="Nationality">
                        </div>
                        <div class="input-div">
                            <input type="text" required require id="user_name" name="place_of_birth" placeholder="Place of Birth">
                        </div>
                    </div>

                    <div class="row input-div">
                        <div class="col-md-4">
                            <label>Date of Birth</label>
                            <div class="mb-3">
                                <input class="form-control" type="date" name="nationality" value="" placeholder="Nationality">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Religion</label>
                            <div class="mb-3">
                                <select id="Religion" name="Religion">
                                    <option value="">Select a Religion</option>
                                    <option value="1">Muslim</option>
                                    <option value="2">Hindu</option>
                                    <option value="3">Christian</option>
                                    <option value="4">Jain</option>
                                    <option value="5">Sikh</option>
                                    <option value="6">Buddhist</option>
                                    <option value="8">Jewish</option>
                                    <option value="9">No Religion</option>
                                    <option value="11">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Blood Group</label>
                            <div class="mb-3">
                                <select id="BloodGroup" name="BloodGroup">
                                    <option value="">Blood Group</option>
                                    <option value="1">A +ve</option>
                                    <option value="2">A -ve</option>
                                    <option value="3">B +ve</option>
                                    <option value="4">B -ve</option>
                                    <option value="5">O +ve</option>
                                    <option value="6">O -ve</option>
                                    <option value="7">AB +ve</option>
                                    <option value="8">AB -ve</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="border: 1px solid #ced4da; padding-top: 10px; padding-bottom: 10px;">
                        <label>Identification Number</label>
                        <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="National ID No.">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Passport No.(If any)">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="License (If any)">
                                </div>
                        </div>
                    </div>

                    <div class="row" style="border: 1px solid #ced4da; padding-top: 10px; padding-bottom: 10px;">
                        <label>Marital Status (Please tick)</label>
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <select class="form-control" name="marital_status" id="marital_status" onChange="is_married(this.value)">
                                        <option value="">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-12 spouse" style="display:none;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name of Spouse">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No. of Children">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Other Dependents">
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label>Do you have any other source of income?</label>
                                <div class="mb-3">
                                    <select class="form-control" name="marital_status" id="marital_status">
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="If yes please mention in brief">
                                </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h4>Education</h4>
                        <p>*Begin with most recent</p>
                    </div>
                    <table class="table table-bordered" id="education_info_table">
                        <thead>
                          <tr>
                            <th style="width:15%; font-size: 14px;">EXAM / Degree Title</th>
                            <th style="width:35%; font-size: 14px;">Name of Institution</th>
                            <th style="width:10%; font-size: 14px;">Year of Passing</th>
                            <th style="width:10%; font-size: 14px;">Major / Group / Concentration</th>
                            <th style="width:10%; font-size: 14px;">CGPA / GPA / Class</th>
                            <th style="width:10%; font-size: 14px;">Achievements (Academic, Scholarship, Distinctions, etc.)</th>
                            <th style="width:10%; font-size: 14px;"><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                          </tr>
                        </thead>

                         <tbody>
                           <tr id="row_1">
                             <td>
                                <input type="text" name="title[]" id="title_1" class="form-control">
                              <td>
                               <input type="text" name="name[]" id="name_1" class="form-control">
                             </td>
                             <td><input type="text" name="from[]" id="from_1" class="form-control"></td>

                              <td>
                                <input type="text" name="to[]" id="to_1" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="last_salary_drawn[]" id="last_salary_drawn_1" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="leaving_reason[]" id="leaving_reason_1" class="form-control">
                              </td>
                              <td><button type="button" class="btn btn-default" onclick="removeeducationRow('1')"><i class="fa fa-close"></i></button></td>
                           </tr>
                         </tbody>
                      </table>
                    <div class="buttons button_space">
                        <button class="back_button">Back</button>
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h4>Other Qualifications</h4>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width:40%; font-size: 14px;">Course attended, training received or certificate obtained</th>
                            <th style="width:15%; font-size: 14px;">Institution</th>
                            <th style="width:15%; font-size: 14px;">Country & Location</th>
                            <th style="width:15%; font-size: 14px;">Year</th>
                            <th style="width:15%; font-size: 14px;">Duration</th>
                          </tr>
                        </thead>

                         <tbody>
                           <tr>
                             <td>
                                <input type="text" name="title[]" id="title_1" class="form-control">
                              <td>
                               <input type="text" name="name[]" id="name_1" class="form-control">
                             </td>
                             <td><input type="text" name="from[]" id="from_1" class="form-control"></td>

                              <td>
                                <input type="text" name="to[]" id="to_1" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="last_salary_drawn[]" id="last_salary_drawn_1" class="form-control">
                              </td>
                           </tr>
                         </tbody>
                      </table>
                      <div class="row">
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Membership of Professional Association including category of Membership">
                                </div>
                        </div>
                      </div>
                      <div class="row" style="border: 1px solid #ced4da; padding-top: 10px; padding-bottom: 10px;">
                        <label>Are you directly of indirectly associated with any Political Organization?</label>
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <select class="form-control" name="marital_status" id="marital_status" onChange="is_anypoliticalorganization(this.value)">
                                        <option value="">Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-12 anypoliticalorganization" style="display:none;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Give deatils">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="INTERESTS/HOBBIES">
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="OTHER EXPERTISES">
                                </div>
                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button class="back_button">Back</button>
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h4>Details of previous employment</h4>
                        <p>*Begin with most recent</p>
                    </div>
                    <table class="table table-bordered" id="previousem_info_table">
                        <thead>
                          <tr>
                            <th style="width:15%; font-size: 14px;">Job Title</th>
                            <th style="width:35%; font-size: 14px;">Name & Address of Employer</th>
                            <th style="width:10%; font-size: 14px;">From</th>
                            <th style="width:10%; font-size: 14px;">To</th>
                            <th style="width:10%; font-size: 14px;">Last Salary Drawn</th>
                            <th style="width:10%; font-size: 14px;">Reason for leaving</th>
                            <th style="width:10%; font-size: 14px;"><button type="button" id="add_row_previous" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                          </tr>
                        </thead>

                         <tbody>
                           <tr id="row_1">
                             <td>
                                <input type="text" name="title[]" id="title_1" class="form-control">
                              <td>
                               <input type="text" name="name[]" id="name_1" class="form-control">
                             </td>
                             <td><input type="date" name="from[]" id="from_1" class="form-control"></td>

                              <td>
                                <input type="date" name="to[]" id="to_1" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="last_salary_drawn[]" id="last_salary_drawn_1" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="leaving_reason[]" id="leaving_reason_1" class="form-control">
                              </td>
                              <td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fa fa-close"></i></button></td>
                           </tr>
                         </tbody>
                      </table>
                      <div class="row">
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Notice period required by the currect employer">
                                </div>
                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button class="back_button">Back</button>
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h4>References</h4>
                        <p>We may approach your previous employers for references but not your present employer without your consent.Please give names and addresses of people whom references may be sought.</p>
                    </div>
                    <div class="row" style="border: 1px solid #ced4da; padding-top: 10px; padding-bottom: 10px;">

                        <div class="col-md-6">
                            <label>Reference(01)</label>
                            <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Occupation">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contact No">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="relation">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <label>Reference(02)</label>
                            <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Occupation">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contact No">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="relation">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons button_space" style="padding: 10px;">
                        <button class="back_button">Back</button>
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h2>Declaration</h2>
                    </div>
                    <div class="row">

                        <div class="col-md-12">

                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="I, .............................................................................................................................................................. hereby declare that">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">The particulars furnished in this application are accurate and complete to my knowledge and belief and I have not knowingly withheld any information, which,if disclosed, would affect my application unfavourably. </li>
                                <li class="list-group-item">I shall be deemed to have been guilty of gross default/misconduct, in the event of my appointment with ACI Limited, if at any decelaration as above is false or materially incomplete in any respect, and </li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Signature of the application">
                                        </div>
                                    </div>
                                </div>
                                </li>
                              </ul>

                        </div>

                    </div>
                    <div class="buttons button_space" style="padding: 10px;">
                        <button class="back_button">Back</button>
                        <button class="submit_button">Submit</button>
                    </div>
                </div>
                <div class="main">
                     <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                         <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>

                    <div class="text congrats">
                        <h2>Congratulations!</h2>
                        <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

