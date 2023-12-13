let nome = prompt('Qual o seu nome:')
let idade = parseInt(prompt('Qual sua idade:'))
let texto = document.createElement('p')
const body = document.body
texto.innerHTML = nome
body.appendChild(texto)
if(idade >= 18){
    texto.style.backgroundColor = 'green'
}
else {
    texto.style.backgroundColor = 'red'
}