let btn = document.getElementById("btn")
let btn2 = document.getElementById("btn2")
let html = document.querySelector("html")
let conteudo = document.getElementsByClassName('conteudo')

btn.addEventListener('click', function(){
    var h1 = document.querySelector('h1')
    h1.classList.add('titulo')
    h1.innerHTML = "hello word"
    alert(html.getAttribute('lang'))
})
btn2.addEventListener('click', function(){
    var h1 = document.querySelector('h1')
    h1.classList.remove('titulo')
    var paragrafo = document.createElement('p')
    paragrafo.innerText = 'Nícolas'
    conteudo.appendChild(paragrafo)
})
/*
btn2.addEventListener('mouseover', function);
*/