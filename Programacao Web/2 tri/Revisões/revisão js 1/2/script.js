let pri = parseInt(prompt("qual sua nota"))
let seg = parseInt(prompt("qual sua nota"))
let ter = parseInt(prompt("qual sua nota"))
let soma = pri + seg + ter
let med = (pri + seg + ter)/3
if(med<7){
    alert((5- (0.6 * soma)/0.4))
}