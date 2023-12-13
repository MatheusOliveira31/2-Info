$("#nome").on("focus", function() {
    if($('#nome').val().length < 3){
        $('label')[0].innerHTML = ('Nome: (o nome deve conter no mínimo 3 caracteres)')
    }
});
$("#nome").on("blur", function() {
    $('label')[0].innerHTML = ('Nome:') 
});