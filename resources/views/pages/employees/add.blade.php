@extends('layouts.app')

@section('content')

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
{{-- end test --}}
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Employees
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                <form action="" method="POST">
                	<div class="form-group">
                    <label>First name</label>
                    <input class="form-control" name="first_name" placeholder="Please Enter Name" />
	                </div>
	             	<div class="form-group">
	                    <label>Last Name</label>
	                    <input class="form-control" name="last_name" placeholder="Please Enter Name" />
	                </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
	                    <label>Gender</label>
	                    <label class="radio-inline">
	                        <input name="gender" value="1" type="radio">Male
	                    </label>
	                    <label class="radio-inline">
	                        <input name="gender" value="0" type="radio">Female
	                    </label>
                	</div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Please Enter Email" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirm" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control">
                            <option value="0">Please Choose Category</option>
                            <option value="">Tin Tức</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Permanent address</label>
                        <input class="form-control" name="permanent_address" placeholder="Please Enter Permanent Address" />
                    </div>
                    <div class="form-group">
                        <label>Present address</label>
                        <input class="form-control" name="permanent_address" placeholder="Please Enter Present Address" />
                    </div>
                    <div class="form-group">           
                        <label>Date of birth</label>
						<input class="form-control" name="joining_date" placeholder="Please Enter Present Address" />
                    </div>
                    <div class="form-group">
                        <label>Joining Date</label>
                        {{-- Date picker --}}
							<input class="form-control" name="joining_date" placeholder="Please Enter Present Address" />
                        {{-- end date picker --}}
                    </div>
                    <div class="form-group">
                        <label>Maritial Status</label>
                        <label class="radio-inline">
                            <input name="maritial_status" value="1" checked="" type="radio">Married
                        </label>
                        <label class="radio-inline">
                            <input name="maritial_status" value="2" type="radio">Single
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Job position</label>
                        <input class="form-control" name="job_position" placeholder="Please Enter Job position" />
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control">
                            <option value="0">Please Choose Category</option>
                            <option value="">Tin Tức</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Team</label>
                        <select class="form-control">
                            <option value="0">Please Choose Category</option>
                            <option value="">Tin Tức</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Job Type</label>
                        <select class="form-control">
                            <option value="0">Please Choose Category</option>
                            <option value="">Tin Tức</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Noted</label>
                        <textarea class="form-control" rows="3" name="noted"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <label>@include('pages/paritials/nationaly')</label>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <label class="radio-inline">
                            <input name="active" value="1" checked="" type="radio">Active
                        </label>
                        <label class="radio-inline">
                            <input name="active" value="0" type="radio">Inactive
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Category Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
            <div class="col-lg-5">
            	<div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" name="phone_number" placeholder="Please Enter Phone Number" />
                </div>
                <div class="form-group">
                    <label>Bank Account Name</label>
                    <input class="form-control" name="bank_account_name" placeholder="Please Enter  Bank Account Name" />
                </div>
                <div class="form-group">
                    <label>Bank Name</label>
                    <input class="form-control" name="bank_name" placeholder="Please Enter  Bank Name" />
                </div>
                <div class="form-group">
                    <label>Insurance code</label>
                    <input class="form-control" name="insurance_code" placeholder="Please Enter  Insurance code" />
                </div>
                <div class="form-group">
                    <label>Tax code</label>
                    <input class="form-control" name="tax_code" placeholder="Please Enter Tax Code" />
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection