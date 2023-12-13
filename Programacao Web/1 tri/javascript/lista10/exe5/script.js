const media = () => {
    const n1 = document.getElementById('n1').value
    const n2 = document.getElementById('n2').value
    const n3 = document.getElementById('n3').value
    const soma = Number(n1)+Number(n2)+Number(n3)
    alert('A média dos números é: '+soma/3)
}
