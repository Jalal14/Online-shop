$(document).ready(function(){
    $("#account-dropdown").hover(            
        function() {
            $('.account-dropdown-menu', this).not('.in .account-dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.account-dropdown-menu', this).not('.in .account-dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

$(document).ready(function() {
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });
});

$(document).ready(function () {
    $('.add-details-button').click(function () {
        $('#details-area').clone().attr('id', 'details-area'+$(this).index()).insertAfter('#details-area');
    });
    $('.add-specification-button').click(function () {
        $('#specification-area').clone().attr('id', 'specification-area'+$(this).index()).insertAfter('#specification-area');
    });
});

$(document).ready(function() {
    $(function () {
        $("#dob").datepicker({
            dateFormat: "yy-mm-dd",
            appendText: "yyyy-mm-dd",
            maxDate: "-216M",
            changeMonth: true,
            changeYear: true
        });
    });
});