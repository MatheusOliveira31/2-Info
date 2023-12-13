function trocaCor() {
    const curso = document.getElementById("curso")
    curso.style.color = "#0000ff"
    curso.value = curso.value.toUpperCase()
    return false
}