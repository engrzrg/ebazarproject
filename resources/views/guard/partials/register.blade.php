<form id="register-form" name="register" action="{{route('register')}}" method="post" role="form" style="display: none;">
   {{csrf_field()}}
    <div class="form-group " >
        <input id="firstName" type="text"   class="form-control" placeholder="First Name" name="first_name" autofocus>
        <span class="input1 error-color"></span>
    </div>
    <div class="form-group ">
        <input id="lastName" type="text" class="form-control" placeholder="Last Name" name="last_name"  autofocus>
        <span class="input2 error-color"></span>
    </div>
    <div class="form-group">
        <input id="Email" type="text" class="form-control" placeholder="Email Address" name="email" autofocus>
        <span class="input3 error-color"></span>
    </div>
    <div class="form-group">
        <input id="Password" type="password" class="form-control" name="password" placeholder="Password" >
        <span class="input4 error-color"></span>
    </div>
    <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password " name="password_confirmation" >
        <span class="input5 error-color"></span>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
        //validation one by one
        $(document).on('focusout','#firstName',function(){
            var firstName = $("#firstName").val();
            if(firstName == ""){
                $('.input1').text('Requried');
                $('#firstName').addClass('b-color');
            }
            if(firstName != ""){
                $('.input1').text('');
                $('#firstName').removeClass('b-color');
            }
        });
        $(document).on('focusout','#lastName',function(){
            var lastName = $("#lastName").val();
            if(lastName == ""){
                $('.input2').text('Requried');
                $('#lastName').addClass('b-color');
            }
            if(lastName != ""){
                $('.input2').text('');
                $('#lastName').removeClass('b-color');
            }
        });
        $(document).on('focusout','#Email',function(){
            var email = $("#Email").val();
            if(email == ""){
                $('.input3').text('Requried');
                $('#Email').addClass('b-color');
            }
            if(email != ""){
                $('.input3').text('');
                $('#Email').removeClass('b-color');
            }
        });
        $(document).on('focusout','#Email',function(){
          var email = $("#Email").val();
        
          if(!isValidEmailAddress(email))
          {
            $('.input3').text('Email formate required.');
              $('#Email').addClass('b-color');
          }
          if(isValidEmailAddress(email))
          {
            $('.input3').text('');
              $('#Email').removeClass('b-color');
          }

          });
        $(document).on('focusout','#Password',function(){
            var password = $("#Password").val();
            if(password == ""){
                $('.input4').text('Requried');
                $('#Password').addClass('b-color');
            }
            if(password != ""){
                $('.input4').text('');
                $('#Password').removeClass('b-color');
            }
        });
        $(document).on('focusout','#password-confirm',function(){
            var passwordConfirm = $("#password-confirm").val();
            var password = $("#Password").val();
            if(passwordConfirm == ""){
                $('.input5').text('Requried');
                $('#password-confirm').addClass('b-color');
            }
            if(passwordConfirm != ""){
                $('.input5').text('');
                $('#password-confirm').removeClass('b-color');
            }
            //match confirm password
            if(password != passwordConfirm){
                $('.input5').text('password not matched.');
                $('#password-confirm').addClass('b-color');
            }
            if(password == passwordConfirm){
                $('.input5').text('');
                $('#password-confirm').removeClass('b-color');
            }
        });

        //validate Email formate
        function isValidEmailAddress(email) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(email)  ;
        };
        //final validation on button click
        $(document).on('click','#register-submit',function(){
            validate();
        });
        function validate(){
            var firstName = $("#firstName").val();
            var lastName = $("#lastName").val();
            var email = $("#Email").val();
            var password = $("#Password").val();
            var passwordConfirm = $("#password-confirm").val();
            if(firstName == "" || lastName == "" || email == "" || password == "" || passwordConfirm == "" || !isValidEmailAddress(email) || (password != password-confirm))
            {
                event.preventDefault();
                if(firstName == ""){
                $('.input1').text('Requried');
                $('#firstName').addClass('b-color');
                }
                if(firstName != ""){
                    $('.input1').text('');
                    $('#firstName').removeClass('b-color');
                }
                if(lastName == ""){
                $('.input2').text('Requried');
                $('#lastName').addClass('b-color');
                }
                if(lastName != ""){
                    $('.input2').text('');
                    $('#lastName').removeClass('b-color');
                }
                if(email == ""){
                $('.input3').text('Requried');
                $('#Email').addClass('b-color');
                }
                if(email != ""){
                    $('.input3').text('');
                    $('#Email').removeClass('b-color');
                }
                if(!isValidEmailAddress(email))
                {
                    $('.input3').text('Email formate required.');
                    $('#Email').addClass('b-color');
                }
                if(isValidEmailAddress(email))
                {
                    $('.input3').text('');
                    $('#Email').removeClass('b-color');
                }
                if(password == ""){
                    $('.input4').text('Requried');
                    $('#Password').addClass('b-color');
                }
                if(password != ""){
                    $('.input4').text('');
                    $('#Password').removeClass('b-color');
                }
                if(passwordConfirm == ""){
                    $('.input5').text('Requried');
                    $('#password-confirm').addClass('b-color');
                }
                if(passwordConfirm != ""){
                    $('.input5').text('');
                    $('#password-confirm').removeClass('b-color');
                }
                //match confirm password
                if(password != passwordConfirm){
                    $('.input5').text('password not matched.');
                    $('#password-confirm').addClass('b-color');
                }
                if(password == passwordConfirm){
                    $('.input5').text('');
                    $('#password-confirm').removeClass('b-color');
                }

            }
            if(firstName != "" && lastName != "" && email != "" && password != "" && passwordConfirm != "" && isValidEmailAddress(email) && (password == passwordConfirm)){
                $("#register-form").submit();

            }

        }
    </script>
