$(document).ready(function () {
    $('.userRow').on('click', function () {
        let checkBox = $(this).find('.userCheckbox');
        if((checkBox).prop('checked') === true){
            checkBox.prop('checked', false);
            $(this).removeClass('selected');
        } else {
            checkBox.prop('checked', true);
            $(this).addClass('selected');
        }
    })

    $('.userCheckbox').on('click', function (event) {
        event.stopPropagation();
        if($(this).prop('checked') === true){
            $(this).parents('.userRow').addClass('selected');
        } else {
            $(this).parents('.userRow').removeClass('selected');
        }
    })

    $('.toggleMenu').on('click', function (event) {
        event.stopPropagation();
        $(this).parent('.input-group-prepend').find('.dropdown-menu').toggle();
    })

    $('.dropdown-item').on('click', function(event){
        event.stopPropagation();
        let link = $(this).getAttribute('href');
    })

    $('.dropdown-menu').on('mouseout', function (event) {
        $(this).toggle('display');
    })

});