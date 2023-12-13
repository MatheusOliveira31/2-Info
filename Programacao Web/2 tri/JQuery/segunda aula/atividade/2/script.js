$("input").change(function(){
    if($('#numero').val() < 18){
        $('#p').show()
    }
    else{
        $("#p").hide()
    }
})