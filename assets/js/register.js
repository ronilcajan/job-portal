$(document).ready(function(){
    $('#role').change(function(){
        var role = $(this).val();
        
        if(role=='worker'){
            $('#employer').hide();
            $('#worker').show();
        }else{
            $('#worker').hide();
            $('#employer').show();
        }
    });


    $('#proceed').click(function(){
        var role = $('#role').val();
        var name = $('#name-form').val();
        var email = $('#email-form').val();
        var pass = $('#pass-form').val();

        var validaDate = validateEmail(email);
        if(name.trim() == ''){
            toastr.warning("Please enter your fullname!");
            $('#name-form').focus();

        }else if(email.trim() == '' || !validaDate){
            toastr.warning("Please enter a valid email address!");
            $('#email-form').focus();

        }else if(pass.length < 8){
            toastr.warning("Enter 8 or more characters for your password!");
            $('#pass-form').focus();
        }else{            
            if(role=='worker'){
                $('#employer-req').hide();
                $('#worker-req').show();
            }else{
                $('#worker-req').hide();
                $('#employer-req').show();
            }

            $('#extraReq').modal('show'); 

            $('#user').val(role);
            $('#name').val(name);
            $('#email1').val(email);
            $('#pass').val(pass);
        }

    });

    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
    });
})

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}