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
    $(document).on('click','.add-details',function(){
        var row = '<div class="form-group row details-area">';
        row = row + '<div class="col-sm-9">';
        row = row + '<input type="text" class="form-control details-text" name="details[]" placeholder="Product details">';
        row = row + '</div>';
        row = row + '<div class="col-sm-3">';
        row = row + '<input type="button" class="remove-details btn btn-danger" value="Remove">';
        row = row + '</div>';
        row = row + '</div>';
        $('.details-wrapper').append(row);
    });
    $(document).on('click','.remove-details',function(){
        var row = $('.remove-details').index(this);
        $('.details-area').eq(row).remove();
    });

    $(document).on('click','.add-specification',function(){
        var row = '<div class="form-group row specification-area">';
        row = row + '<div class="col-sm-3">';
        row = row + '<input type="text" class="form-control specification-text" name="specTitle[]" placeholder="Title">';
        row = row + '</div>';
        row = row + '<div class="col-sm-6">';
        row = row + '<input type="text" class="form-control specification-text" name="specDesc[]" placeholder="Description">';
        row = row + '</div>';
        row = row + '<div class="col-sm-3">';
        row = row + '<input type="button" class="remove-specification btn btn-danger" value="Remove">';
        row = row + '</div>';
        row = row + '</div>';
        $('.specification-wrapper').append(row);
    });
    $(document).on('click','.remove-specification',function(){
        var row = $('.remove-specification').index(this);
        $('.specification-area').eq(row).remove();
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
    $('#file-upload').change(function (event) {
        var output = document.getElementById('admin-photo');
        output.src = URL.createObjectURL(event.target.files[0]);
    });
});