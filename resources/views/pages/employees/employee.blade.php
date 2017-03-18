@extends('layouts.app')

@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row main-row">
            <div class="col-lg-12">
                <h1 class="page-header">Employee</h1>
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
                    <a href="#" class="btn btn-primary btn_add">Add new</a>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="employee-table">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Email</th>   
                        <th>Phone Number</th>
                        <th>Direct Message</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0; ?>
                @foreach($employee as $value)
                    <tr class="odd gradeX" align="center" id="tr{{ $value->id }}">
                        <td>#<?php echo $i; ?></td>
                        <td id="t_name_{{ $value->id }}" >{{$value->name}}</td>
                        <td id="t_jobtype_{{ $value->id }}" >{{$value->job_type}}</td>
                        <td>{{$value->departments['name']}}</td>
                        <td id="t_email_{{ $value->id }}">{{$value->email}}</td>
                        <td id="t_phonenumber_{{ $value->id }}">{{$value->phone_number}}</td>
                        <td><a class="btn btn-info btn-xs" href=""><i class="fa fa-comments" aria-hidden="true"></i> Message</a></td>
                        <td><a class="btn btn-primary btn-xs" href="profile/{{$value->id}}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></td>
                        <td class="center"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs action-update" data-id="{{ $value->id }}" data-name="{{$value->name}}" data-designation="{{$value->job_type}}" data-department="{{$value->departments['name']}}" data-email="{{$value->email}}" data-phonenumber="{{$value->phone_number}}" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span> Edit</button></p></td>
                        <td class="center"><p data-placement="top" data-toggle="tooltip" title="Delete"><button data-id="{{ $value->id }}" class="btn btn-danger btn-xs action-delete" data-title="Delete" data-toggle="modal" data-target="#edit-modal" ><span class="glyphicon glyphicon-trash"></span> Delete</button></p></td>
             
                    </tr>
                    <?php $i++; ?>
                @endforeach
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
<!-- /#page-wrapper -->
<div class="paginate" align="center">
			 {!!$employee->render()!!}
</div>
@endsection

<script type="text/javascript">
    function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("employee-table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>