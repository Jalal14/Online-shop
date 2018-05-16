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