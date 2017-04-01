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
            <table class="table table-striped table-bordered table-hover" id="contract-table">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Contract Type</th>
                        <th>Contract Title</th>
                        <th>Contract Start Date</th>
                        <th>Contract End Date</th>      
                        <th>Contract Description</th>
                        <th>Salary</th>
                        <th>Employee Designation</th>
                        <th>Employee Type</th>
                        <th>Employee Category</th>
                        <th>Department</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
               		<tr>
               			<td>1</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
               			<td>Binh</td>
                        <td class="center"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs action-update"><span class="glyphicon glyphicon-pencil"></span> Edit</button></p></td>
                        <td class="center"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs action-delete"><span class="glyphicon glyphicon-trash"></span> Delete</button></p></td>
               		</tr>
                </tbody>
            </table>

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
		    	<label>Name</label>
		    	<input class="form-control name" id="name" type="text" style="margin-left: 0px;">
		    </div>
		    <div class="form-group">
		    	<label>Designation</label>
		    	<input class="form-control" id="designation" type="text" >
		    </div>
		    <div class="form-group">
		    	<label>Department</label>
		    	<input class="form-control" id="department" type="text" readonly>
		    </div>
		    <div class="form-group">
		    	<label>Email</label>
		    	<input class="form-control" id="email" type="text" >
		    </div>
		    <div class="form-group">
		    	<label>Phone Number</label>
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
    <div id="edit-modal" class="modal fade modal-confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body edit-content">
                    <h4>Are you sure to Delete this entry <i class="id-delete"></i></h4>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger isdelete" id="isDelete" data-dismiss="modal">Delete</button>
                    <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
{{-- end modal confirm --}}
</div>

@endsection

