$(document).ready(function(){
    $("#registered_customer_section").show();
    $("#guest_customer_section").hide();
    $(".another_address_section").hide();

    $("#select_all_companies").change(function(){
        $(".companies_checkbox").prop('checked', $(this).prop("checked"));
    });

	$('.companies_checkbox').change(function(){
		if(false == $(this).prop("checked")){
	        $("#select_all_companies").prop('checked', false);
	    }
    	checkboxSelect("#select_all_companies",".companies_checkbox");
    });

    $("#select_all_categories").change(function(){
        $(".categories_checkbox").prop('checked', $(this).prop("checked"));
    });

	$('.categories_checkbox').change(function(){
		if(false == $(this).prop("checked")){
	        $("#select_all_categories").prop('checked', false);
	    }
    	checkboxSelect("#select_all_categories",".categories_checkbox");
    });

    $("#registered_radio").click(function () {
        if ($("#registered_radio").is(':checked')) {
            $("#login_section").show();
            $("#registered_customer_section").show();
            $("#guest_customer_section").hide();
        }
    });

    $("#guest_radio").click(function () {
        if ($("#guest_radio").is(':checked')) {
            $("#login_section").hide();
            $("#registered_customer_section").hide();
            $("#guest_customer_section").show();
        }
    });

    $("#existing_address_radio").click(function () {
        if ($("#existing_address_radio").is(':checked')) {
            $(".another_address_section").hide();
        }
    });

    $("#another_address_radio").click(function () {
        if ($("#another_address_radio").is(':checked')) {
            $(".another_address_section").show();
        }
    });

    $("#quantity").change(function () {
        var m = $("#quantity").val() * $('#unit_price').val();
        $("#total_price").html(m);
    });
});

function checkboxSelect(id, cls) {
    var item = $(cls+':checked').length;
    var all = $(cls).length;
    if (item == all){
        $(id).prop('checked', true);
    }
}