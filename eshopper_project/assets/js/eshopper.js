$("document").ready(function(){
	$(".cat").click(function(obj){
		obj.preventDefault()
		id=$(this).attr("for")
		// alert(id);
		 // alert(basepath+"filter_cat")
		$.ajax({
			type:"post",
			data:"catid="+id,
			url:basepath+"filter_cat",
			success:function(res){
				$(".padding-right").html(res)
			}
		})
	})

	// ##############################################
	$(".br").click(function(obj){
		obj.preventDefault()
		id=$(this).attr("for")
		// alert(id);
		 // alert(basepath+"filter_cat")
		$.ajax({
			type:"post",
			data:"brid="+id,
			url:basepath+"Filter_br",
			success:function(res){
				$(".padding-right").html(res)
			}
		})
	})

	// ####################################
	$(".add-to-cart").click(function(obj){
		obj.preventDefault()
		id=$(this).attr("for")
		 // alert(id);
		 // alert(basepath+"filter_cat")
		$.ajax({
			type:"post",
			data:"proid="+id,
			url:basepath+"cart_action",
			success:function(res){
				// $(".padding-right").html(res)
				alert(res);
			}
		})
	})

	// #####################################################
	$(".delete-to-cart").click(function(obj){
		curr=$(this);
		obj.preventDefault()
		id=$(this).attr("for")
		 // alert(id);
		 // alert(basepath+"filter_cat")
		$.ajax({
			type:"post",
			data:"proid="+id,
			url:basepath+"delete_cart_action",
			success:function(res){
				// $(".padding-right").html(res)
				// alert(res);
				curr.parent().parent().parent().parent().remove();
			}
		})
	})


	// ####################################
	$(".register").click(function(obj){
		obj.preventDefault();
		// id=$(this).attr("for")
		 // alert(id);
		 // alert(basepath+"filter_cat")
		$.ajax({
			type:"post",
			data:$("#register").serialize(),
			url:basepath+"register_action",
			success:function(res){
				$('.register_error').html(res);
			}
		});
	});

	// ####################################
	$(".login").click(function(obj){
		obj.preventDefault();
		// id=$(this).attr("for")
		 // alert(id);
		 // alert(basepath+"filter_cat")
		$.ajax({
			type:"post",
			data:$("#login").serialize(),
			url:basepath+"login_action",
			success:function(res){
				
				if(res==1){
					window.location.href="http://localhost/rohit/ci/";
				}
				else{
					$('.login_error').html(res);
				}
			}
		});
	});



})

