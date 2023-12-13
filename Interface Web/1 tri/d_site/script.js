const form = document.getElementById('form')
const search = document.getElementById('search')
let itens = []
const lista = document.getElementById('lista_tarefas')
const nao_concluidas_botao = document.getElementById('tarefas_nao_concluidas')
const concluidas_botao = document.getElementById('tarefas_concluidas')
const botao_busca = document.getElementById('botao_busca')
const nome_busca = document.getElementById('nome_busca')

form.addEventListener('submit', (e) => {
    e.preventDefault() //cancela o envio dos dados ao servivor.
    console.log ('Dados enviados.')
    // recuperar o input
    const input = document.getElementById('tarefa')
    // pegar o texto que está no input
    const texto = input.value
    //!! .some em objeto não está dando certo !! 
    const existe = itens.some(i => i.texto.toUpperCase() === texto.toUpperCase())
    // adicionar o texto no vetor itens
    if (texto !== "" && !existe) {
        itens.push({texto, checkbox: false})
    }
    // atualizar a lista
    atualizaLista()
    // limpar o input
    input.value = ""
})

const atualizaLista = () => {
    lista.innerHTML = ""
    itens.forEach((tarefa, index) => {
        const div = document.createElement('div')
        div.setAttribute('data-index', index)
        div.addEventListener("dblclick", (event) => {
            event.stopPropagation()
            console.log('evento: '+event)
            const d = document.querySelector(`[data-index="${index}"]`);
            const el = itens[index].texto
            d.innerHTML = ""
            const input = document.createElement("input")
            input.value = el
            input.addEventListener('blur', () => {
                d.innerHTML = ""
                const span = document.createElement("span")
                itens[index].texto = input.value
                span.innerHTML = input.value
                tirarVazioVetor()
                d.appendChild(span)
                atualizaLista()
            })
            d.appendChild(input)
        });
        const span = document.createElement("span")
        span.innerHTML = tarefa.texto
        div.appendChild(span)
        
        // criando botão para excluir item
        
        const button = document.createElement('button')
        button.addEventListener ('click', () => {
            lista.removeChild(div)
            removerTarefa(span.innerHTML)
            atualizaLista()
        })
        button.classList.add("botao_excluir")
        button.innerHTML = '<i class="fa-regular fa-trash-can"></i>'
        div.appendChild(button)

        // criando checkbox
        const checkbox = document.createElement('input')
        checkbox.setAttribute('type', 'checkbox')
        checkbox.setAttribute('name', 'concluido_'+index)
        checkbox.classList.add("checkbox")
        //preciso percorrer o vetor e ver se a checkbox dos índices é true.
        // Se sim: checkbox.checked = true 
        // se não: checkbox.checked = false
        tarefa.checkbox ? checkbox.checked = true : checkbox.checked = false
        // evento de clicar na checkbox
        if (checkbox.checked) {
            tarefa.checkbox = true
            span.style.textDecoration = 'line-through green'
            button.disabled = true
            itens[index].checkbox = true
        }
        else {
            tarefa.checkbox = false
            span.style.textDecoration = 'none'
            button.disabled = false
        }
        checkbox.addEventListener('change', (e) => {
            e.stopPropagation()
            console.log(checkbox.checked)
            if (checkbox.checked) {
                tarefa.checkbox = true
                span.style.textDecoration = 'line-through green'
                button.disabled = true
                itens[index].checkbox = true
            }
            else {
                tarefa.checkbox = false
                span.style.textDecoration = 'none'
                button.disabled = false
            }
        })
        div.appendChild(checkbox)
        
        lista.appendChild(div)
    });
}

const removerTarefa = (tarefa) => {
    itens = itens.filter(i => i.texto !== tarefa)
}

const tirarVazioVetor = () => {
    itens = itens.filter(i => i.texto !== '')
}

nao_concluidas_botao.addEventListener ('click', () => {
    itens = itens.filter(i => !i.checkbox)
    atualizaLista()
})
concluidas_botao.addEventListener ('click', () => {
    itens = itens.filter(i => i.checkbox)
    atualizaLista()
})

search.addEventListener('submit', (e) => {
    e.preventDefault()
    let existe = itens.find(tarefa => tarefa.texto == nome_busca.value && !tarefa.checkbox)
    existe ? itens = itens.filter(nome => nome.texto == nome_busca.value) : alert('A tarefa buscada não existe ou está concluída')
    nome_busca.value = ''
    nome_busca.blur()
    atualizaLista()
})
