$(document).ready(function(){
	var input = document.getElementById('searchTextField');
	new google.maps.places.Autocomplete(input);

	$(window).keydown(function(event){
		if(event.keyCode == 13) {
			event.preventDefault();
			return false;
		}
	});
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
		$('#department').val($(this).data('department'));
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
				// Update button data-attr .action-update
				$('.action-update').data('name', name);
				$('.action-update').data('designation', designation);
				$('.action-update').data('email', email);
				$('.action-update').data('phonenumber', phonenumber);
			}
		});
	});
	$('#datepicker').datepicker({
	    format: 'mm/dd/yyyy',
	    todayBtn : 'linked'
	});

	$('#tags input').on('focusout', function(){    
		var txt= this.value.replace(/[^a-zA-Z0-9\+\-\.\#]/g,'');
		var textArray = [
		    'primary',
		    'success',
		    'default',
		    'warning',
		    'info',
		    'danger'
		];
		var randomNumber = Math.floor(Math.random()*textArray.length);
		if(txt) $(this).before('<h3 style="display: inline;"><span class="label label-'+textArray[randomNumber]+' tag">'+ txt +'</span></h3>');
			this.value="";
		}).on('keyup',function( e ){
		
		if(/(188|13)/.test(e.which)) 
			$(this).focusout();
		});

		$('#tags').on('click','.tag',function(){
			if( confirm("Delete this Skill?") ) 
				$(this).remove(); 
	});
});
