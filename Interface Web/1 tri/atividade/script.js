let caixa = document.getElementById('caixa')
let mais = document.getElementById('mais')
let menos = document.getElementById('menos')
let n = 0
const MIN = 8
const MAX = 24

/*
function atualizar() {
    caixa.innerHTML = n
}*/

function atualizar(x) {
    n = x
    caixa.innerHTML = n
    menos.disabled = n === MIN
    mais.disabled = n === MAX

    const texto = document.getElementById('texto')
    texto.style.fontSize = `${n}px`
}
atualizar(0)

menos.addEventListener('click', () => {
   // n--
   if(n > MIN){
    atualizar(n - 1)
}})

mais.addEventListener('click', () => {
  //  n++
  
  if(n < MAX){
    atualizar(n + 1)
}})
atualizar(MIN)