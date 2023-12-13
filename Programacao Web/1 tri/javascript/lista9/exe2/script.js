function validaCampo(){
    const fNome = document.getElementById("nome")
    const fIdade = document.getElementById("idade")

    //Define constantes para as cores
    const REDCOLOR = "#F00"
    const WHITECOLOR = "#FFF"

    //Define uma formatação padrão paa os campos
    fNome.style.background = WHITECOLOR
    fIdade.style.background = WHITECOLOR

    if(fNome.value.length === 0){
        //não preeencheu nada do nome
        fNome.style.background = REDCOLOR
        alert('O nome esta vazio!')
        fNome.focus()
        return false
    }else if(fNome.value.length < 4){
            fNome.style.background = REDCOLOR
            alert('Tem que possuir mais de 4 letras')
            fNome.focus()
            return false
        }if(fIdade.value.length === 0){
            //não preeencheu nada do idade
            fIdade.style.background = REDCOLOR
            alert('A idade esta vazia!')
            fIdade.focus()
            return false
        }else if(fIdade.value.length >= 18){
            fIdade.style.background = REDCOLOR
            alert('O usuario é menor de idade')
            fIdade.focus()
            return false
        }
}
            

