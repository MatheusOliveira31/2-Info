/*
let itens = []


const adicionarItem = (e) => {
    e.preventDefault()


    //recuperar o input
    const input = document.getElementById('item')


    //pegar o texto que esta no input
    const texto = input.value


    const existe = itens.some(i => i.toUpperCase() === texto.toUpperCase())


    //adicionar o texto no vetor itens
    if(texto !== " " ) itens.push(texto)


    //atualizar a lista
    atualizaLista()


    //limpar o input
    input.value = ""
}


const atualizaLista = () => {
    const ul = document.getElementById('lista')
    ul.innerHTML = ""
    itens.forEach((item)=>{
        // criar uma LI
        const li = document.createElement('LI')
        li.addEventListener('clicl', () => removerItem(item))
        //adicionar o conteudo
        li.innerHTML = item
        //adicionar o LI como filho do UL
        ul.appendChild(li)
    })
    const removerItem = (item) => {
        itens = itens.filter(i => i !== item)
    }
}
const form = document.getElementById('form')
form.addEventListener('submit', adicionarItem)
   */
let itens = []

const adicionarItem = (e) => {
    e.preventDefault()
    // recuperar o input 
    const input = document.getElementById('item')

    // pegar o texto que está no input
    const texto = input.value

    const existe = itens.some(i => i.toUpperCase() === texto.toUpperCase())

    // adicionar o texto no vetor itens
    if (texto !== "" && !existe) itens.push(texto)

    //atualizar a lista
    atualizaLista()

    // limpar o input
    input.value = ""
}

const atualizaLista = () => {
    const ul = document.getElementById('lista')
    ul.innerHTML = ""
    itens.forEach((item)=>{
        // criar uma LI
        const li = document.createElement('LI')
        li.addEventListener('click', () => removerItem(item))
        // adicionar o conteúdo
        li.innerHTML = item
        // adicionar LI como filho do UL
        ul.appendChild(li)
    })
}

const removerItem = (item) => {
    itens = itens.filter(i => i !== item)
    atualizaLista()
}

const form = document.getElementById('form')
form.addEventListener('submit', adicionarItem)


