$(document).ready(function(){
    $("#select_all_companies").change(function(){
        $(".companies_checkbox").prop('checked', $(this).prop("checked"));
    });
});

$(document).ready(function(){
	$('.companies_checkbox').change(function(){
		if(false == $(this).prop("checked")){
	        $("#select_all_companies").prop('checked', false);
	    }
    	checkboxSelect("#select_all_companies",".companies_checkbox");
    });
});


$(document).ready(function(){
    $("#select_all_categories").change(function(){
        $(".categories_checkbox").prop('checked', $(this).prop("checked"));
    });
});

$(document).ready(function(){
	$('.categories_checkbox').change(function(){
		if(false == $(this).prop("checked")){
	        $("#select_all_categories").prop('checked', false);
	    }
    	checkboxSelect("#select_all_categories",".categories_checkbox");
    });
});

function checkboxSelect(id, cls) {
    var item = $(cls+':checked').length;
    var all = $(cls).length;
    if (item == all){
        $(id).prop('checked', true);
    }
}

$(document).ready(function(){
    $("#registered_customer_section").show();
    $("#guest_customer_section").hide();
    $(".another_address_section").hide();
});
$(document).ready(function(){
    $("#registered_radio").click(function () {
        if ($("#registered_radio").is(':checked')) {
            $("#login_section").show();
            $("#registered_customer_section").show();
            $("#guest_customer_section").hide();
        }
    });
});
$(document).ready(function(){
    $("#guest_radio").click(function () {
        if ($("#guest_radio").is(':checked')) {
            $("#login_section").hide();
            $("#registered_customer_section").hide();
            $("#guest_customer_section").show();
        }
    });
});

$(document).ready(function(){
    $("#existing_address_radio").click(function () {
        if ($("#existing_address_radio").is(':checked')) {
            $(".another_address_section").hide();
        }
    });
});
$(document).ready(function(){
    $("#another_address_radio").click(function () {
        if ($("#another_address_radio").is(':checked')) {
            $(".another_address_section").show();
        }
    });
});

$(document).ready(function(){
    $("#quantity").change(function () {
        var m = $("#quantity").val() * 1200;
        $("#total_price").text(m);
    });
});