alert('Olá pessoal. Sejam bem-vindos à aula de Programação Web II')
let per = parseInt(prompt('Qual numero:'))
let per1 = parseInt(prompt('Qual  o segundo numero:'))
let oper = prompt('Qual operação:')
if(oper == '+'){
    alert(per + per1)
}else if(oper == '-'){
    alert(per - per1)
}else if(oper == '*'){
    alert(per * per1)
}else if(oper == '/'){
    alert(per / per1)
}
else{
    alert('voce deseja sair')
}
