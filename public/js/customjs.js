$(document).ready(function(){
	var input = document.getElementById('searchTextField');
	new google.maps.places.Autocomplete(input);

	// Skill preload
	var InputSkill,
		tempSkill = [];
	if ($('#SettingInputSkill').attr('data-skill')) {
		InputSkill = $('#SettingInputSkill').attr('data-skill'),
		tempSkill = InputSkill.split(',');
	}
	

	var textArray = [
		    'primary',
		    'success',
		    'default',
		    'warning',
		    'info',
		    'danger'
		];
		var i = 0,
			InputSkillArr = [];
		if (tempSkill.length > 0) {
			tempSkill.forEach(function(item) {
			var randomNumber = Math.floor(Math.random()*textArray.length);
		    if (item.trim()) {
		    	$('#tags input').before('<h3 style="display: inline;" class="h3" ><span data-skill='+i+' class="label label-'+textArray[randomNumber]+' tag">'+ item +'</span></h3>');
		    	$('#aboutme').append('<h3 style="font-size: 15px; display: inline-block;padding: 2px" class="h3"><span class="label label-'+textArray[randomNumber]+' tag">'+ item +'</span></h3>');
		    	InputSkillArr.push(item);
		    }
				i++;
		});
		}
		
		$('#tags').attr('data-skill',i);
		$('#SettingInputSkill').attr('data-skill',InputSkillArr);
	// Skill end preload

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

	//Setting Update
	$('.button-setting-update').click(function(){
		var name      	  = $('#SettingInputName').val(),
			id            = $('#SettingInputId').val(),
			education     = $('#SettingInputEducation').val(),
			location      = $('#searchTextField').val(),
			email         = $('#SettingInputEmail').val(),
			date_of_birth = $('#SettingInputDateofbirth').val(),
			notes         = $('#SettingInputNotes').val(),
			skill         = $('#SettingInputSkill').attr('data-skill'),
			phonenumber   = $('#SettingInputPhonenumber').val();

			out_skill = [];
			temp_skill = skill.split(',');
			temp_skill.forEach(function(item) {
				if (item) {
					out_skill.push(item);
				}
		    }); 
		    skill = out_skill.toString();
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		if ($('#SettingInputRule').prop('checked')) {
		$.ajax({
			type: 'POST',
			url: '/employee/setting/update',
			dataType: 'json',
			data: {
				id : id,
				name : name,
				education : education,
				email : email,
				location : location,
				date_of_birth : date_of_birth,
				notes : notes,
				skill : skill,
				phonenumber : phonenumber
			},
			success:function(data){
				alert(data);
			}
		});
	}else{
		alert('Please check \"I agree to the terms and conditions\"');
	}
	});
	$('.datepicker').datepicker({
		    format: 'dd-mm-yyyy',
		    todayBtn : 'linked'
	});

	// validate form add
	$("#form_add").validate({
		rules:{
			first_name: "required",
			last_name: "required",
		},
		message:{
			first_name: "nhap ten",
			last_name: "nhap ho"
		},
		 submitHandler: function(form) {
		      form.submit();
		    }
	});
	// Skill Execute
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
		if(txt){
			$(this).before('<h3 style="display: inline;" class="h3"><span data-skill="'+parseInt($('#tags').attr('data-skill'))+'" class="label label-'+textArray[randomNumber]+' tag">'+ txt +'</span></h3>');
			this.value="";
			var str_skill,
				temp = [];
			if ($(this).attr('data-skill')) {
				str_skill = $(this).attr('data-skill');
				temp = str_skill.split(' ');
			}
			temp.push(txt);
			$('#tags').attr('data-skill',parseInt($('#tags').attr('data-skill')) + 1);
			$(this).attr('data-skill', temp);
		}

		}).on('keyup',function( e ){
		
		if(/(188|13)/.test(e.which)) 
			$(this).focusout();

		});

		$('#tags').on('click','.tag',function(){
			if( confirm("Delete this Skill?") ) 
				var del_arr = $('#SettingInputSkill').attr('data-skill');
				var temp = del_arr.split(',');
				console.log($(this).attr('data-skill'));
				temp[$(this).attr('data-skill')] = '';
				$('#SettingInputSkill').attr('data-skill', temp);
				$(this).parent('.h3').remove(); 
	});
});
