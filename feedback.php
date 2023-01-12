<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>How to send data to MySQL with AJAX + jQuery + PHP | Tutsmake.com</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
    </head>
    <body style="background-color: #ec8b5e;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h2><strong>jQuery Ajax Form Submit Example In PHP</strong></h2>
                        </div>
                        <div class="card-body">
                            <div id="show_message" class="alert alert-success" style="display: none">Success fully sent message </div>
	 
                            <div id="error" class="alert alert-danger" style="display: none"></div>

                            <form action="javascript:void(0)" method="post" id="ajax-form">
	 
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control" value="">
                                </div>
	         
                                <div class="form-group ">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="">
                                </div>
	         
                                <div class="form-group">
                                    <label>Comment</label>
                                    <input type="text" name="comment" id="comment" class="form-control" value="">
                                </div> 
	         
                                <div class="text-center">
                                    <input type="submit" class="btn btn-success btn-sm" name="submit" value="Save">
                                </div>
	                     
                            </form>  
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function($){
		 
            // hide messages 
            $("#error").hide();
            $("#show_message").hide();
		 
            // on submit...
            $('#ajax-form').submit(function(e){
		 
                e.preventDefault();
		 
                $("#error").hide();
		 
                //First name required
                var name = $("input#fname").val();
               if(name == ""){
                    $("#error").fadeIn().text("First Name Field required.");
                    $("input#fname").focus();
                    return false;
                }
		 
                // last name required
                var lname = $("input#lname").val();
                if(lname == ""){
                    $("#error").fadeIn().text("Last Name Field required");
                    $("input#lname").focus();
                    return false;
                }
		 
                // Comment number required
                var comment = $("input#comment").val();
                if(comment == ""){
                    $("#error").fadeIn().text("Comment Field required");
                    $("input#comment").focus();
                    return false;
                }
		 
                // ajax
                $.ajax({
                    type:"POST",
                    url: "/upload.php",
                    data: $(this).serialize(), // get all form field value in serialize form
                    success: function(){
                      $("#show_message").fadeIn();
                      //$("#ajax-form").fadeOut();
                    }
                });
            });  
		 
            return false;
        });
        </script>
    </body>
</html>