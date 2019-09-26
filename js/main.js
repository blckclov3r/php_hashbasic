$(document).ready(function(){

    profile_information();

    $("#loginBtn").click(function(event){
        event.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        $.ajax({
            method: "POST",
            url: "action.php",
            data: {
                loginBtn:1,
                password:password,
                email:email
            },
            success: function(response){
                $("#login_message").html(response);
            }
        })
    });

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
                $("#registration_message").html(response);
            }
        });
    });

    function profile_information(){
        $.ajax({
            method: "POST",
            url: "action.php",
            data: {
                information:1
            },
            success: function(response){
                $("#information").html(response);
            }
        });
    }


    
});