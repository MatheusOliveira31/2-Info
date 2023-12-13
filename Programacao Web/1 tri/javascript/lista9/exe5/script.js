const verific = () => {
    const nome = document.getElementById('nome')
    const idade = document.getElementById('idade')
    const sexo = document.getElementsByName('sexo')
    var select = document.getElementById ('cidades')
    var valor_select = select.option [select.selectedIndex].value
    var interesse = document.querySelectorAll('[name == interesse]:checked')
    const observacao = document.getElementById('obv')
    const nums = [0,1,2,3,4,5,6,7,8,9]
    let tem_nums = false
    nums.forEach(n => {
    let cont_idx_n = 0
    while(cont_idx_n != nome.value.lengt){
    if(nome.value[cont_idx_n] == n){
    tem_nums = true
    }
    cont_idx_n++
    }
    })
    for (i = 0; i < sexo.length ; i++){
    if(sexo[i].checked) var sexo_val = sexo[i].value
    }
    if(nome.value.length == 0 || nome.value.length <= 4){
    alert("Nome Inválido")
    nome.focus()
    return false
    }
    else if(idade.value > 18){
    alert("idade inválida")
    idade.focus()
    return false
    }
    if(tem_nums){
    alert ('Nome com números : inválido!')
    return false
    }
    if(sexo_val == undefined){
    alert ('Sexo não selecionado')
    return false
    }
    
    if(valor_select == -1){
    alert ('Sexo não selecionado')
    select.focus ()
    return false
    }if(interesse.length == 0){
    alert('Área de interesse não preenchida')
    return false
    }if(observacao.value.length == 0){
    alert('Nenhuma observação preenchida')
    observacao.focus()
    return false
    }
    return true
}