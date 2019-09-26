$(document).ready(function(){
    

    $("#registerBtn").click(function(event){
        event.preventDefault();

        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var repassword = $("#repassword").val();

        $.ajax({
            method: "POST",
            url: "action.php",
            data: {
                registerBtn:1,
                name : name,
                email : email,
                password : password,
                repassword : repassword
            },
            success: function (response) {
                // alert(response);
                $("#registration_message").html(response);
            }
        });
    });



});