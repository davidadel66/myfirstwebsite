function openMenu() {
    document.getElementById("myMenu").style.height = "100%"
}

function closeMenu() {
    document.getElementById("myMenu").style.height = "0%"
}


$(function() {
    $(".form-control").on('focus', function(){
        $(this).parents(".form-group").addClass('focused');
    })

    $(".form-control").on('blur', function(){
        $(this).parents(".form-group").removeClass('focused');
    })
});




