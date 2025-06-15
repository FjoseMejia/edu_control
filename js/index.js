$(function(){	
	if(error== 1){
		$(".input").addClass("input-error");		
	}
		
	$(".input").on("input", function(){
		let currentEmail= $("#email").val();
		let currentPassword= $("#password").val();
		
		if(currentEmail== failedEmail){
			$(".input").addClass("input-error");
			
			if(currentPassword== failedPassword){
				$(".input").addClass("input-error");
			}else{
				$(".input").removeClass("input-error");
			}
		}else{
			$(".input").removeClass("input-error");
		}
	});	
});
