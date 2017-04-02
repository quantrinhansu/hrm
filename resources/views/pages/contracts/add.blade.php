@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contract
                    <small>Add</small>
                </h1>
            </div>

            <form action="" method="POST" id="form_add">
            <div class="col-lg-12">
                @if(session('notification'))
                    <div class="alert alert-success">
                        {{session('notification')}}
                    </div>
                @endif

              @if ( $errors->any() )
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
            </div>
             <input type="hidden" name="_token" value="{{csrf_token()}}">
                <!-- /.col-lg-12 -->
                <div class="col-lg-7">
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" name="employee_name" placeholder="Please Enter Name" />
                    </div>	
                    <div class="form-group">
                        <label>Contract Type</label>
                        <select class="form-control" name="contract_title">
                            <option value="0">Please Choose Contract Title</option>
                            <option value="0">Hợp đồng thử việc 2.5 tháng</option>
                            <option value="0">Hợp đồng 1 năm</option>
                            <option value="0">Hợp đồng 2 năm</option>
                            <option value="0">Hợp đồng thử việc</option>
                            <option value="0">Hợp đồng 5 năm</option>
                            <option value="0">Hợp đồng ngắn hạn</option>
                            <option value="0">Hợp đồng không xác định thời hạn</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contract Title</label>
                        <input type="text" class="form-control" name="employee_name" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <input type="number" class="form-control" name="salary" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Contract Start Date</label>
                        <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                    <input type="text" class="form-control pull-right datepicker"  readonly name="contract_start_date">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label>Contract End Date</label>
                        <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                    <input type="text" class="form-control pull-right datepicker"  readonly name="contract_end_date">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label>Contract Description</label>
                        <div class="form-group">
                          <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div> 
                        <button type="submit" class="btn btn-success btn_employee">Add New</button>
                        <button type="reset" class="btn btn-success btn_employee">Reset</button>
                        <a href="employee/contract" class="btn btn-success btn_employee">Back</a>
                </div>
                <div class="col-lg-5">
                	<div class="form-group">
                        <label>Employee Designation</label>
                        <input type="number" class="form-control" name="phone_number" placeholder="Please Enter Phone Number" />
                    </div>
                    <div class="form-group">
                        <label>Employee Type</label>
                        <input class="form-control" name="bank_account_name" placeholder="Please Enter  Bank Account Name" />
                    </div>
                    <div class="form-group">
                        <label>Employee Category</label>
                        <input class="form-control" name="bank_name" placeholder="Please Enter  Bank Name" />
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input class="form-control" name="insurance_code" placeholder="Please Enter  Insurance code" />
                    </div>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection