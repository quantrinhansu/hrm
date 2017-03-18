@extends('layouts.app')

@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Employee</h1>
            </div>
            <!-- /.col-lg-12 -->
            <a href="#" class="btn btn-primary btn_add">Add new</a>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Email</th>   
                        <th>Phone Number</th>
                        <th>Direct Message</th>
                        <th>Action</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($employee as $value)
                    <tr class="odd gradeX" align="center" id="tr{{ $value->id }}">
                        <td>{{$value->name}}</td>
                        <td>{{$value->job_type}}</td>
                        <td>{{$value->departments['name']}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phone_number}}</td>
                        <td><a class="btn btn-info btn-xs" href=""><i class="fa fa-comments" aria-hidden="true"></i> Message</a></td>
                        <td><a class="btn btn-primary btn-xs" href="profile/{{$value->id}}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></td>
                        <td class="center"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span> Edit</button></p></td>
                        <td class="center"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span> Delete</button></p></td>
             
                    </tr>
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
		   <div class="form-group">
		    	<label>Name</label>
		    	<input class="form-control " type="text" placeholder="Enter a name">
		    </div>
		    <div class="form-group">
		    	<label>Designation</label>
		    	<input class="form-control " type="text" placeholder="Irshad">
		    </div>
		    <div class="form-group">
		    	<label>Department</label>
		    	<input class="form-control " type="text" placeholder="Irshad">
		    </div>
		    <div class="form-group">
		    	<label>Email</label>
		    	<input class="form-control " type="text" placeholder="Irshad">
		    </div>
		    <div class="form-group">
		    	<label>Phone Number</label>
		    	<input class="form-control " type="text" placeholder="Irshad">
		    </div>
		</div>
		<div class="modal-footer ">
		    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
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
        <button type="button" class="btn btn-success" id="delete" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
{{-- end modal confirm --}}
</div>
<!-- /#page-wrapper -->
<div class="paginate" align="center">
			 {!!$employee->render()!!}
</div>
@endsection

