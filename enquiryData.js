
$("#enquiry").click(function(e){
    e.preventDefault();
	var name  = $("#t1").val().trim();
	var email = $("#t2").val().trim();
        var cc    = $("#t5").val().trim();
    var subject   = $("#t3").val().trim();
	var message = $("#t4").val().trim();
	
	var key = /^[A-Za-z' ]{2,50}$/;
       
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if(name == "")
	{
           
		$("#t1").focus();
		$("#t1").css("border-color","red");
                 removeError();
                 removetextareaError();
		$("#nerror").html("please fill First Name");
		
		
	}
	
        else if(name.length<2)
        {
            $("#t1").focus();
		$("#t1").css("border-color","red");
        removeError();
        removetextareaError();
		$("#nerror").html("Please enter minimum 2 characters.");
        }
        
        
		else if(!name.match(key))
	{
          
		$("#t1").focus();
		$("#t1").css("border-color","red");
        removeError();
        removetextareaError();
		$("#nerror").html("please enter character's only.");
		
		
	}
	
	
	else if(name == null)
	{
		$("#t1").focus();
		$("#t1").css("border-color","red");
		$("#nerror").html("please fill First Name");
		removeError();
                removetextareaError();
		
	}
	
		else if(email == "")
	{
		$("#t2").focus();
		$("#t2").css("border-color","red");
		$("#eerror").html("please fill email");
		removeError();
                removetextareaError();
		
	}
        
        	else if(!filter.test(email))
	{
		$("#t2").focus();
		$("#t2").css("border-color","red");
		$("#eerror").html("please enter valid email");
		removeError();
                removetextareaError();
		
	}
	
		else if(email == null)
	{
		$("#t2").focus();
		$("#t2").css("border-color","red");
		$("#eerror").html("please fill email");
		removeError();
                removetextareaError();
		
	}
        
//        else if(cc == "")
//	{
//		$("#t5").focus();
//		$("#t5").css("border-color","red");
//		$("#Cerror").html("please fill email");
//		removeError();
//                removetextareaError();
//		
//	}
//        
//        	else if(!filter.test(cc))
//	{
//		$("#t5").focus();
//		$("#t5").css("border-color","red");
//		$("#Cerror").html("please enter valid email");
//		removeError();
//                removetextareaError();
//		
//	}
	
//		else if(cc == null)
//	{
//		$("#t5").focus();
//		$("#t5").css("border-color","red");
//		$("#Cerror").html("please fill email");
//		removeError();
//                removetextareaError();
//		
//	}
	
	
	
		else if(subject == "")
	{
		$("#t3").focus();
		$("#t3").css("border-color","red");
		$("#serror").html("please fill subject");
		removeError();
		removetextareaError();
	}
	
        else if(subject.length<2)
        {
                $("#t3").focus();
		$("#t3").css("border-color","red");
                 removeError();
                 removetextareaError();
		$("#serror").html("Please enter minimum 2 characters.");
        }
		
	
		else if(subject == null)
	{
		$("#t3").focus();
		$("#t3").css("border-color","red");
		$("#serror").html("please fill subject");
		removeError();
                removetextareaError();
		
	}
	
		else if(message =="")
	{
		$("#t4").focus();
		$("#t4").css("border-color","red");
		$("#merror").html("please fill message");
		removeError();
		removetextareaError();
		
	}
	
		else if(message == null)
	{
		$("#t4").focus();
		$("#t4").css("border-color","red");
		$("#merror").html("please fill message");
		removeError();
		removetextareaError();
		
	}
	
        
           else if(message.length<2)
        {
                $("#t4").focus();
		$("#t4").css("border-color","red");
                 removeError();
		$("#merror").html("Please enter minimum 2 characters.");
        
        
    }
        else{
            a = "";
		  $("#success").css("display","block");
		$.ajax({
			
			url: 'sendEmail.php',
			method: 'POST',
			
			data:
			{
				postname:name, postemail:email, postsubject:subject, postcc:cc, postmessage:message
			},
			success:function(data)
			{
                            $("#success").html(data);
//                          
//                             setInterval(function(){
//                             location.reload(true);
//                              
//                          },3000);
			}
		});
                
                           
        }
	
	
	
});

function removeAll()
{
	z = "";
	
	$("#nerror").text(z);
	$("#eerror").text(z);
	$("#serror").text(z);
	$("#merror").text(z);
	
	
	$("input").css("border","1px solid lightgrey");
	$("textarea").css("border","1px solid lightgrey");
}

removeAll();


function removeError()
{
	i = "";
	$("input").keypress(function(){
	
	$("#nerror").text(i);
	$("#eerror").text(i);
	$("#serror").text(i);
	$("#merror").text(i);
	
	$("input").css("border","1px solid lightgrey");
	$("textarea").css("border","1px solid lightgrey");
	
	
	});
	
}

removeError();	


function removetextareaError()
{
j = "";
	$("textarea").keypress(function(){
	
	$("#nerror").text(i);
	$("#eerror").text(i);
	$("#serror").text(i);
	$("#merror").text(i);
	
	$("input").css("border","1px solid lightgrey");
	$("textarea").css("border","1px solid lightgrey");
	
	});
	
	}
	
	removetextareaError();