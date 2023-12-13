const criarTabuleiro = (max = 16) => {
    if (max % 2 == 1) {
        console.log("O número tem que ser par!")
        return;
    }
    const tab = []

    let k = 0
    while (k < max) {
        const n = Math.ceil(Math.random() * (max / 2) )
        if (tab.filter(x => x === n).length >= 2) continue
    
        tab.push(n)
        k++
    }
    return tab
}


const jogadores = ['Jogador 1', 'Jogador 2']
const spans = []
let jogador = 0 
let jogadas = []

const divJ = document.getElementById('jogadores')
jogadores.forEach(j => {
    const span = document.createElement('span')
    span.innerHTML = j
    divJ.appendChild(span)
    spans.push(span)
})


spans[jogador].style.border= 'solid 1px green'


const tab = criarTabuleiro()
const div = document.getElementById('tabuleiro')
tab.forEach(n => {
    const btn = document.createElement('button')
    btn.setAttribute('type', 'button')
    btn.addEventListener('click', () => {
        btn.innerHTML = n    
        jogadas.push(btn)
        
        if (jogadas.length === 2) { 

            if (jogadas[0].innerHTML === jogadas[1].innerHTML){
                console.log('Você acertou!')
                jogadas = []
            }else{    
                console.log('Você errou!')
                jogador = (jogador + 1) % jogadores.length
                spans.forEach(s => s.style.borderWidth = '0')
                spans[jogador].style.border= 'solid 1px green'
                setTimeout(() => {
                    jogadas.forEach(b => b.innerHTML = "")
                    jogadas = []
                }, 1000)
            }
            
        }
    })
    div.appendChild(btn)
})
