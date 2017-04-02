@extends('layouts.app')

@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row main-row">
            <div class="col-lg-12">
                <h1 class="page-header">Contracts</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="row search-row">
                <div class="col-md-6">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" id="searchInput" onkeyup="myFunction()" placeholder="Search for name" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="employee/contract/add" class="btn btn-primary btn_add">Add new</a>
                </div>
            </div>
            <?php $arr_title = array('id', 'name');
            $arr_data = array('1', 'binh');
            view_list_table($arr_title, $arr_data, array('data-id=1', 'data-name="binh"')); ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
	
	{{-- Modal edit--}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		    <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
			    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
		  	</div>

		<div class="modal-body">
                <input type="hidden" id="id">
		   <div class="form-group">
		    	<label>Employee Name</label>
		    	<input class="form-control name" id="name" type="text" style="margin-left: 0px;">
		    </div>
		    <div class="form-group">
		    	<label>Contract Type</label>
		    	<input class="form-control" id="designation" type="text" >
		    </div>
		    <div class="form-group">
		    	<label>Contract Title</label>
		    	<input class="form-control" id="department" type="text">
		    </div>
		    <div class="form-group">
		    	<label>Contract Start Date</label>
		    	<input class="form-control" id="email" type="text" >
		    </div>
		    <div class="form-group">
		    	<label>Contract End Date</label>
		    	<input class="form-control" id="phonenumber" type="text" >
		    </div>
            <div class="form-group">
                <label>Contract Description</label>
                <input class="form-control" id="phonenumber" type="text" >
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input class="form-control" id="phonenumber" type="text" >
            </div>
		</div>
		<div class="modal-footer ">
		    <button type="button" class="btn btn-warning btn-lg btn-update-employee" data-dismiss="modal" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
		</div>

		</div>
		<!-- /.modal-content --> 
	</div>
	  <!-- /.modal-dialog --> 
</div>
	{{-- end modal edit--}}
    {{-- modal confirm --}}
   <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                <div class="modal-body">
                 
                 <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                 
               </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>
        <!-- /.modal-content --> 
      </div>
              <!-- /.modal-dialog --> 
    </div>
{{-- end modal confirm --}}
</div>

@endsection

