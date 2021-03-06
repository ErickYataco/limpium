$(document).ready(function(){

    jQuery(function(){
        if ($('#formModalSuccess').length)$('#formModalSuccess').modal('show');
    });

    $( "#enterprise" ).autocomplete({
        source: '/find-empresa',
        minLength:3,
        dataType: 'json',
        focus: function( event, ui ) {
            return false;
        },
        select: function( event, ui ) {
            $( "#contact").val(ui.item.contact).addClass('dirty');
            $( "#mobile_phone").val(ui.item.mobile_phone).addClass('dirty');
            $( "#office_phone").val(ui.item.office_phone).addClass('dirty');
            $( "#email_contact").val(ui.item.email_contact).addClass('dirty');
            $("#enterprise_id").val(ui.item.id);

            $.getJSON('/find-local?data='+ui.item.id , function(opts){
                $("#workplaces").select2({
                    data: opts
                }).on("change", function(e) {
                    $("#workplace_id").val(e.val);
                });
            });
        }
    });



    $("#services").select2().on("change", function(e) {
        $("#service_id").val(e.val);
    });

    $( "#crearhorario").click(function(){
        alert(('#diainicio').select2());
        $('div.fc-content-skeleton .fc-event-container').each(function(index){

        });
    });

    $( "#crear").click(function(){
        var form=$('#formCreate');
        var valid = form.valid();
        if(!valid) {
            form.data('validator').focusInvalid();
            return false;
        }
    });

    $( "#btnAddTable").click(function(){

        var form=$('#formCreate');
        var valid = form.valid();
        if(!valid) {
            form.data('validator').focusInvalid();
            return false;
        }

        var number='<input readonly class="row-text-id" size="2" type="text" name="numberPersonsPost[]" value="'+$('#numberPersons').val()+'"></input>';

        var validity='<input readonly class="row-text" size="10" type="text" name="startContractPost[]" value="'+$('#startContract').val()+'"></input> - '+
                    '<input readonly class="row-text" size="10" type="text" name="endContractPost[]" value="'+$('#endContract').val()+'"></input>';

        var days=
            ($("#monday").is(':checked')?'<input readonly class="row-text-id" size="1" type="text" name="sunday[]" value="L"</input>':'') +
            ($("#tuesday").is(':checked')?'<input readonly class="row-text-id" size="2" type="text" name="tuesday[]" value="MA"</input>':'') +
            ($("#wednesday").is(':checked')?'<input readonly class="row-text-id" size="2" type="text" name="wednesday[]" value="MI"</input>':'') +
            ($("#thursday").is(':checked')?'<input readonly class="row-text-id" size="1" type="text" name="thursday[]" value="J"</input>':'') +
            ($("#friday").is(':checked')?'<input readonly class="row-text-id" size="1" type="text" name="friday[]" value="F"</input>':'') +
            ($("#saturday").is(':checked')?'<input readonly class="row-text-id" size="1" type="text" name="saturday[]" value="S"</input>':'') +
            ($("#sunday").is(':checked')?'<input readonly class="row-text-id" size="1" type="text" name="sunday[]" value="D"</input>':'') ;

        var shift='<input readonly class="row-text" size="8" type="text" name="startWorkPost[]" value="'+$('#startWork').val()+'"></input> - '+
                '<input readonly class="row-text" size="8" type="text" name="endWorkPost[]" value="'+$('#endWork').val()+'"></input>';

        var lunch='<input readonly class="row-text" size="8" type="text" name="startLunchPost[]" value="'+$('#startLunch').val()+'"></input> - '+
                '<input readonly class="row-text" size="8" type="text" name="endLunchPost[]" value="'+$('#endLunch').val()+'"></input>';

        var service='<input readonly class="row-text" type="text" name="service[]" value="'+$('#services').select2('data').text+'"></input>';

        var html='<tr><td>'+number+'</td>'+
                '<td>'+validity+'</td>'+
                '<td>'+days+'</td>'+
                '<td>'+shift+'</td>'+
                '<td>'+lunch+'</td>'+
                '<td>'+service+'</td>'+
                '<td><button type="button" class="btn btn-icon-toggle delete-row" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button></td><tr>';
        $('#requirements tbody:last').append(html);


    });
    $(".delete-row").live('click', function() {
        $(this).parent().parent().fadeTo(400, 0, function () {
            $(this).remove();
        });
        return false;
    });
});