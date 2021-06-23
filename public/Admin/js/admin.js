$(document).ready(function(){
	$('#add_specific').click(function(){
		var row = $('#add_row').val();
		if (row>0 && row<20) {
			//alert($('.bts').length);
			for (var i = 0; i < row; i++) {
				$('.specification').append("<div class='row bts mb-3'><div class='col-1' id='spec_no'><b>"+(($('.bts').length)+1)+"."+"</b></div><div class='col-4' id='spec_label'><input type='text' name='specific_label[]' class='form-control' placeholder='Specific Label"+(($('.bts').length)+1)+"' ></div><div class='col-6 ml-2' id='spec_value'><input type='text' name='specific_value[]' class='form-control' placeholder='Specific Value"+(($('.bts').length)+1)+"' ></div></div>");
			}
		}else{
			alert('invalid number');
		}

	});

	$('.category_specific').change(function(){
		var id = $(this).val();
		$('.specification').html('');

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});

		$.ajax({
			type:"POST",
			url:"/product_category/specific/"+id,
			dataType:'json',        
			data:{id:id},
			success:function(data){
				if(data.specific_label.length < 1){
					$('.specification').append("<div class='row bts mb-3'><div class='col-1' id='spec_no'><b>1.</b></div><div class='col-4' id='spec_label'><input type='text' name='specific_label[]' class='form-control' value='Specific Label' ></div><div class='col-6 ml-2' id='spec_value'><input type='text' name='specific_value[]' class='form-control' value='Specific Value' ></div></div>");
				}
				$.each(data.specific_label,function(key,value){
					$('.specification').append("<div class='row bts mb-3'><div class='col-1' id='spec_no'><b>"+(($('.bts').length)+1)+"."+"</b></div><div class='col-4' id='spec_label'><input type='text' name='specific_label[]' class='form-control' value='"+data.specific_label[key]+"' ></div><div class='col-6 ml-2' id='spec_value'><input type='text' name='specific_value[]' class='form-control' value='"+data.specific_value[key]+"' ></div></div>");
                    //alert(data.specific_label[key]+'::'+data.specific_value[key]);
                });
			},
			error:function(data){
				$('.specification').append("<div class='row bts mb-3'><div class='col-1' id='spec_no'><b>1.</b></div><div class='col-4' id='spec_label'><input type='text' name='specific_label[]' class='form-control' value='Specific Label' ></div><div class='col-6 ml-2' id='spec_value'><input type='text' name='specific_value[]' class='form-control' value='Specific Value' ></div></div>");
			}
		});

	});

	$('body').delegate('#remove_spec','click',function(event){
		event.preventDefault();
		$(this).parent().remove();

	});

	$("body").delegate("#order_status_link","click",function(event){
    event.preventDefault();

		var id = $(this).data("id");

		$(this).parent('td').html('<span>delivered</span>');
		
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});

		$.ajax({
			type:"post",
			url:"/orders/"+id+"/update",
			dataType:'json',        
			data:{},
			success:function(data){

			}
		});

	});

});