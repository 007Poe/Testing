$(document).ready(function(){

	$(".addtocart").click(function(){
		var pid = $(this).data('id');

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});
		// alert(pid);
		$.ajax({
			type:"POST",
			url:"/product/addtocart/"+pid,
			dataType:'json',        
			data:{pid:pid},
			success:function(data){
				if(!data.msg){
					alert("Sorry, Out of quantity for this item!");
				}
				$('.my-cart-badge').text(data.totalQty);
			}
		});

	});

	wishList();
	function wishList(){
		$.ajax({
			type:"GET",
			url:"/wishlist",
			dataType:'json',
			data:{},
			success:function(data){
				$('.my-wishlist-badge').text(data.count);
			}
		});
	}

	$("body").delegate(".add-wishlist","click",function(event){
    event.preventDefault();
    var pid = $(this).data('id');
    $(this).removeClass('fa-heart-o').addClass('fa-heart');
    $(this).removeClass('add-wishlist').addClass('remove-wishlist');
    $(this).closest('a').css('background','#2196f5').attr('title','Remove from wishlist');

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });

    $.ajax({
      type:"POST",
      url:"/product/addtowishlist/"+pid,
      dataType:'json',        
      data:{},
      success:function(data){
        wishList();
      }
    });

  });

 	$("body").delegate(".remove-wishlist","click",function(event){
	  event.preventDefault();
    var pid = $(this).data('id');
    $(this).removeClass('fa-heart').addClass('fa-heart-o');
    $(this).removeClass('remove-wishlist').addClass('add-wishlist');
    $(this).closest('a').css('background','#171717').attr('title','Added to wishlist');

    $.ajaxSetup({
    	headers: {
    		'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    	}
    });

    $.ajax({
    	type:"GET",
    	url:"/product/removewishlist/"+pid,
    	dataType:'json',        
    	data:{},
    	success:function(data){
    		wishList();
    	}
    });

});

});
