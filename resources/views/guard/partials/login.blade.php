
<form id="login-form" action="{{route('login')}}" method="post" role="form" style="display: block;">
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" name="email" id="loginEmail"  class="b-color form-control" placeholder="email">
        <span class="emailInput error-color"></span>
    </div>
    <div class="form-group">
        <input type="password" name="password" id="loginPassword"  class="form-control" placeholder="Password">
        <span class="passwordInput error-color"></span>
    </div>
    <div class="form-group text-center">
        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
        <label for="remember"> Remember Me</label>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <button type="submit" name="login-submit" id="btnLoginSubmit" class="form-control btn btn-login">Login</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</form>

   <script type="text/javascript">
        //validation one by one
        $(document).on('focusout','#email',function(){
            var email = $("#loginEmail").val();
            if(email == ""){
                $('.emailInput').text('Requried');
                $('#loginEmail').addClass('b-color');
            }
            if(email != ""){
                $('.emailInput').text('');
                $('#loginEmail').removeClass('b-color');
            }
        });
        //valdiate emial address
        $(document).on('focusout','#loginEmail',function(){
          var email = $("#loginEmail").val();
        
          if(!isValidEmailAddress(email))
          {
            $('.emailInput').text('Email formate required.');
              $('#loginEmail').addClass('b-color');
          }
          if(isValidEmailAddress(email))
          {
            $('.emailInput').text('');
              $('#loginEmail').removeClass('b-color');
          }

          });
        $(document).on('focusout','#loginPassword',function(){
            var password = $("#loginPassword").val();
            if(password == ""){
                $('.passwordInput').text('Requried');
                $('#loginPassword').addClass('b-color');
            }
            if(password != ""){
                $('.passwordInput').text('');
                $('#loginPassword').removeClass('b-color');
            }
        });
        //validate Email formate
        function isValidEmailAddress(email) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(email)  ;
        };
        //final validation on button click
        $(document).on('click','#btnLoginSubmit',function(){
            alert(122);
            validateInputs();
        });
        function validateInputs(){
            var email = $("#loginEmail").val();
            var password = $("#loginPassword").val();
            if(email == "" || password == "" || (!isValidEmailAddress(email)))
            {
               event.preventDefault();

                if(email == ""){
                    $('.emailInput').text('Requried');
                    $('#loginEmail').addClass('b-color');
                }
                if(email != ""){
                    $('.emailInput').text('');
                    $('#loginEmail').removeClass('b-color');
                }
                 if(!isValidEmailAddress(email))
                  {
                    $('.emailInput').text('Email formate required.');
                    $('#loginEmail').addClass('b-color');
                  }
                  if(isValidEmailAddress(email))
                  {
                    $('.emailInput').text('');
                    $('#loginEmail').removeClass('b-color');
                  }
                if(password == ""){
                    $('.passwordInput').text('Requried');
                    $('#loginPassword').addClass('b-color');
                }
                if(password != ""){
                    $('.passwordInput').text('');
                    $('#loginPassword').removeClass('b-color');
                }

            }
            else{

                $("#login-form").submit();

            }

        }
    </script>
