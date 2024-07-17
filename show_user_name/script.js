aData={}
$( "#roll)number" ).autocomplete({
    source: function(request, response){
        $.ajax({
            url: 'http://localhost/my%20code/show_user_name/server.php',
            type: 'GET',
            dataType: 'json',
            success:function(data){
                // console.log(data)
                aData=$.map(data, function(value,key){
                    return {
                        id:value.id,
                        label:value.roll_number,
                        student_information:value.student_information
                    };
                });
                // console.log(aData)
                var results=$.ui.autocomplete.filter(aData, request.term);
                response(results);
            }            
        })
    },
    select:function(event, ui){
        console.log(ui.item.student_information);
        $('#student_information').text(ui.item.student_information);
    }
});