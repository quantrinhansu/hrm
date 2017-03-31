@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Employees
                    <small>Add</small>
                </h1>
            </div>

            <form action="employee/add" method="POST" id="form_add">
            <div class="col-lg-12">
                @if(session('notification'))
                    <div class="alert alert-success">
                        {{session('notification')}}
                    </div>
                @endif
            </div>
             <input type="hidden" name="_token" value="{{csrf_token()}}">
                <!-- /.col-lg-12 -->
                <div class="col-lg-7">
                    	<div class="form-group">
                        <label>First name</label>
                        <input class="form-control" name="first_name" placeholder="Please Enter First Name" required />
    	                </div>
    	             	<div class="form-group">
    	                    <label>Last Name</label>
    	                    <input class="form-control" name="last_name" placeholder="Please Enter Last Name" required/>
    	                </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name" />
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter Email" />
                        </div>
                        @if ( $errors->any() )
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
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
                            <input class="form-control" name="role" placeholder="Please Enter Role" />
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
                          <label for="inputName">Date of birth</label>
                              <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                    <input type="text" class="form-control pull-right datepicker"  readonly name="date_of_birth">
                              </div>
                        </div>
                        <div class="form-group">
                            <label>Joining Date</label>
                            <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                    <input type="text" class="form-control pull-right datepicker"  readonly name="joining_date">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Job position</label>
                            <input class="form-control" name="job_position" placeholder="Please Enter Job position" />
                        </div>
                        <div class="form-group">
                            <label>Noted</label>
                            <textarea class="form-control" rows="3" name="noted"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn_employee">Add New</button>
                        <button type="reset" class="btn btn-success btn_employee">Reset</button>
                        <a href="employee" class="btn btn-success btn_employee">Back</a>
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
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="department">
                            <option value="0">Please Choose Department</option>
                            @foreach($department as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Team</label>
                        <input class="form-control" name="team" placeholder="Please Enter Team" />
                    </div>
                    <div class="form-group">
                        <label>Job Type</label>
                        <input class="form-control" name="job_type" placeholder="Please Enter Tax Code" />
                    </div>
                     <div class="form-group">
                        <label>Gender</label>
                        <label class="radio-inline">
                            <input name="gender" value="1" type="radio" checked="">Male
                        </label>
                        <label class="radio-inline">
                            <input name="gender" value="0" type="radio">Female
                        </label>
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
                        <label>Nationality</label>
                        <label>@include('pages/paritials/nationaly')</label>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection