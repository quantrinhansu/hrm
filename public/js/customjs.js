$(document).ready(function(){
	$("#delete").click(function(){
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
});