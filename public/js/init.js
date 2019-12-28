(function ($) {
    $(function () {

        $('.sidenav').sidenav();

        $('.tooltipped').tooltip();


        $('.show-pass').on('click', function () {
            $(this).hide();
            $(this).parent().find('.hide-pass').show();
            $(this).parent().find('.list-pass').attr('type', 'text');
        });

        $('.hide-pass').on('click', function () {
            $(this).hide();
            $(this).parent().find('.show-pass').show();
            $(this).parent().find('.list-pass').attr('type', 'password');
        });



    }); // end of document ready
})(jQuery); // end of jQuery name space


function deleteItem(t,e) {
    e.preventDefault();
    var state = confirm("are you sure?");

    if(state){
        $(t).parent().find('.delete-form').submit();
    }
}