$(document).ready(function(){

	$(".action-delete").click(function(){
		$('.isdelete').attr('id', $(this).data('id'));
		$('.id-delete').html($(this).data('id'));
	});

	$(".isdelete").on('click',function(){
		var id = $(this).attr('id');
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$.ajax({
			type: 'POST',
			url: '/employee/delete',
			dataType: 'text',
			data: {id: id},
			success:function(data){
				$('#tr' + id).fadeOut();
			}
		});
	});

	$('.action-update').click(function(){
		$('#id').val($(this).data('id'));
		$('#name').val($(this).data('name'));
		$('#designation').val($(this).data('designation'));
		$('#email').val($(this).data('email'));
		$('#phonenumber').val($(this).data('phonenumber'));
	});

	$('.btn-update-employee').click(function(){
		var id          = $('#id').val();
		var name        = $('#name').val();
		var designation = $('#designation').val();
		var email       = $('#email').val();
		var phonenumber = $('#phonenumber').val();
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		
		$.ajax({
			type: 'POST',
			url: '/employee/update',
			dataType: 'json',
			data: {
				id : id,
				name : name,
				designation : designation,
				email : email,
				phonenumber : phonenumber
			},
			success:function(data){
				$('#t_name_' + id).text(name);
				$('#t_jobtype_' + id).text(designation);
				$('#t_email_' + id).text(email);
				$('#t_phonenumber_' + id).text(phonenumber);
			}
		});
	});
});
