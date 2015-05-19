$(document).ready(function(){
    //alert($(location).attr('pathname'));
    //alert($('#contratoasignacion').attr('href'));

    $('.item-menu-bar').each(function(){
        var myHref= $(this).attr('href');
        var url =$(location).attr('pathname');
        alert(url+' '+myHref);
        if( url == myHref) {
            $(this).addClass("active");
        }
    });
});
