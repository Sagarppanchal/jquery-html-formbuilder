<form method="post" action="" id="invite" autocomplete="off" novalidate="novalidate">
    <fieldset class="admin__fieldset">
        <legend class="admin__legend">
            <span>Welcome, please sign in</span>
        </legend>
        <br>
        <input name="form_key" type="hidden" value="2QP22RHERC6rxk2q">
        <div class="admin__field _required field-username">
            <label for="username" class="admin__field-label">
                <span>Username</span>
            </label>
            <div class="admin__field-control">
                <input id="email" class="admin__control-text" type="text" name="email" autofocus="" value="" data-validate="{required:true}" placeholder="user name" autocomplete="off">
            </div>
        </div>
        <div class="admin__field _required field-password">
            <label for="login" class="admin__field-label">
                <span>Password</span>
            </label>
            <div class="admin__field-control">
                <input id="login" class="admin__control-text" type="password" name="login[password]" data-validate="{required:true}" value="" placeholder="password" autocomplete="new-password">
            </div>
        </div>
        <div class="form-actions">
            <div class="actions">
                <input type="submit" value="Sign In">
            </div>
            <div class="links">
                <a class="action-forgotpassword" href="https://uat.i-serve.me/lavotel/admin/admin/auth/forgotpassword/">Forgot your password?</a>
            </div>
        </div>
    </fieldset>
</form>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
	$('#invite').validate({
	    rules: {
	        email: {
	            required: true,
	            //email: true,
	            remote: {
	                url: 'http://192.168.0.55/m1/index.php/example/index/validateEmail',
	                type: 'POST',
	                dataType: 'json',
	                data: {
	                    email: function(data) {
	                    	return $('#email').val();
	                    }
	                },
	                complete: function(data){
	                	console.log(data);
	                    if( data == 'false' ) {
	                        alert("Free");
	                        return false;
	                    }
	                 }
	            }
	        }
	    },
	    messages: {
	        email: {
                required: "This field is required",
                email: "Please enter a valid email address",
                remote: 'not valid'
            },
	    },
	    onkeyup: false
	});
</script>