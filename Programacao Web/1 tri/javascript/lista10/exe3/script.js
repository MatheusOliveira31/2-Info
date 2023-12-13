
const nome = document.getElementById('nome')
const idade = document.getElementById('idade')
const email = document.getElementById('email')
const senha = document.getElementById('senha')
const confirm_senha = document.getElementById('confirm_senha')
const inputs = [nome,idade,email,senha,confirm_senha]


const verificar = () => {
    for(let n = 0; n < inputs.length; n++) {
        if (inputs[n].value.length == 0) {
            inputs[n].style.backgroundColor = 'red'
            return false
        }
        else {
            inputs[n].style.backgroundColor = 'green'
        }
    };
    if (senha.value == confirm_senha.value) {
        senha.style.backgroundColor = 'green'
        confirm_senha.style.backgroundColor = 'green'
    }
    else {
        senha.style.backgroundColor = 'red'
        confirm_senha.style.backgroundColor = 'red'
        alert('Senhas diferentes!')
        return false
    }
    return true
}
