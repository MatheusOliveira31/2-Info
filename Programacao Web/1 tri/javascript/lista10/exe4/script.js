let escritores = [
    ['Machado de Assis','Dom Casmurro','21/06/1890'],
    ['Miguel de Cervante','Dom Quixote','29/09/1547'],
    ['Fernando Pessoa','Livro do desassossego','13/06/1890'],
    ['William Shakespeare','Hamlet','23/04/1564'],
    ['Fiódor Dostoiévski','Os irmãos Karamazov','11/11/1821']
]
const div = document.getElementById('div')
const lista = () => {
    atualizaLista()
    let index_html = document.getElementById('lista_valor').value
    for (let index = 0; index < escritores.length; index++){
        if (index_html == '-1') {
            return false
        }
        if (index == index_html) {
            var nome_escritor = document.createElement('p')
            var nasc = document.createElement('p')
            var obra = document.createElement('p')
            nome_escritor.innerHTML = escritores[index][0]
            nasc.innerHTML = escritores[index][1]
            obra.innerHTML = escritores[index][2]
        }
    }
    div.appendChild(nome_escritor)
    div.appendChild(nasc)
    div.appendChild(obra)
    return false
}


const percorre_obj = (index) => {
    console.log(escritores[index][0])
}


const atualizaLista = () => {
    div.innerHTML = ''
}
