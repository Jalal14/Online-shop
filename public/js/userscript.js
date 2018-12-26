'use strict';

$(document).ready(function () {
    $(".loader").hide();
    $(".update-cart").hide();

    $('button[value=Login]').click(function() {
        $("#emailMsg").html('');
        $("#passwordMsg").html('');
        $("#errorMsg").html('');
        var email = $("input[name=email]").val();
        var pass = $("input[name=password]").val();
        if (email=="") {
            $("#emailMsg").html('Email required');
        }else if (pass=="") {
            $("#passwordMsg").html('Password required');
        }else{
            $.ajax({
                url		: 	'/ajax/login',
                method	: 	'GET',
                data	: {
                    email   	: 	email,
                    password	: 	pass
                },
                success	: function(response) {
                    if (response==1) {
                        location.reload();
                    }else{
                        $("#errorMsg").html('<h3>* Invalid username or password </h3>');
                    }
                },
                error	:function(data) {
                    $("#errorMsg").html('<h3>* Error occured, please try again</h3>');
                }
            });
        }
        return false;
    });

    $('button[value=Signup]').click(function() {
        $("#nameMsg").html('');
        $("#reg-emailMsg").html('');
        $("#phoneMsg").html('');
        $("#addressMsg").html('');
        $("#reg-passwordMsg").html('');
        $("#reg-con-passwordMsg").html('');

        var name = $("input[name=name]").val();
        var email = $("input[name=regEmail]").val();
        var phone = $("input[name=phone]").val();
        var address = $("input[name=address]").val();
        var password = $("input[name=regPassword]").val();
        var cPassword = $("input[name=regCPassword]").val();
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (name=='') {
            $("#nameMsg").html('Name cannot be empty');
        }else if (email=='') {
            $("#reg-emailMsg").html('Email cannot be empty');
        }else if (!email.match(mailformat)){
            $("#reg-emailMsg").html('Invalid email address');
        }else if (phone=='') {
            $("#phoneMsg").html('Phone number cannot be empty');
        }else if (address=='') {
            $("#addressMsg").html('Address cannot be empty');
        }else if (password=='') {
            $("#reg-passwordMsg").html('Password cannot be empty');
        }else if (password.length < 8) {
            $("#reg-passwordMsg").html('Password length should at least 8 characters');
        }else if (password != cPassword) {
            $("#reg-con-passwordMsg").html('Password does not match');
        }else{
            checkEmail();
        }
        return false;
    });
    $('.edit-cart').click(function () {
        var text = $(this).text().split(" ")[0];
        if (text != "Update"){
            var row = "<input type='text' name='quantity' value=" + text + "><button type='submit' id='update-cart-btn ' class='btn btn-success btn-sm pull-right'>Update</button>";
            $(this).html(row);
            $(this).removeAttr('class');
            $(this).attr('id', 'update-cart');
        }
    });
    function checkEmail() {
        $.ajax({
            url		: 	'/ajax/checkEmail',
            method	: 	'GET',
            data	: {
                email	: 	$("input[name=regEmail]").val()
            },
            success	: function(response) {
                if (response==0) {
                    register();
                }else{
                    $("#reg-emailMsg").html('* Email already used');
                }
            },
            error	:function(data) {
                $("#errorMsg").html('Error occured, please try again');
            }
        });
    }
    function register() {
        $.ajax({
            url		: 	'/ajax/store',
            method	: 	'GET',
            data	: {
                name 	: 	$("input[name=name]").val(),
                email	: 	$("input[name=regEmail]").val(),
                phone 	: 	$("input[name=phone]").val(),
                address	: 	$("input[name=address]").val(),
                password: 	$("input[name=regPassword]").val()
            },
            beforeSend	: function(){
                $(".loader").show();
            },
            success	: function(response) {
                $(".loader").hide();
                if (response==1) {
                    $("#errorMsg").removeClass("error");
                    $( "#errorMsg" ).addClass( "success" );
                    $("#errorMsg").html('<h3>*Successfully registered.<br>Mail has been sent, please verify your email.</h3>');
                }else{
                    $("#errorMsg").removeClass("success");
                    $( "#errorMsg" ).addClass( "error" );
                    $("#errorMsg").html('<h3>*Error occured, please try again</h3>');
                }
            },
            error	:function(data) {
                $(".loader").hide();
                $("#errorMsg").removeClass("success");
                $( "#errorMsg" ).addClass( "error" );
                $("#errorMsg").html('<h3>*Error occured, please try again</h3>');
            }
        });
    }
});