const DIAS = ['DOMINGO','SEGUNDA','TERCA','QUARTA','QUINTA','SEXTA','SABADO']

const periodos = [
    {inicio: '08:00', termino: '12:00', dias: ['SEGUNDA','TERCA','QUARTA','QUINTA','SEXTA', 'SABADO']},
    {inicio: '13:30', termino: '17:30', dias: ['SEGUNDA','TERCA','QUARTA','QUINTA','SEXTA']}
];

//const x = DIAS.map(dia => ({dia: dia}))
const x = DIAS.map(dia => ({
    dia,
     periodos: periodos.filter(o => o.dia.includes(dia)).map}))
console.log(DIAS, x)

const y = x.map(o => o.dia)

const ul = document

console.log(y)


const resposta = [
    {dia: 'DOMINGO', periodos: []},
    {dia: 'SEGUNDA', periodos: [{inicio:'08:00', termino: '12:00'}, {inicio:'13:30', termino: '17:30'}]},
    {dia: 'SABADO', periodos: [{inicio:'08:00', termino: '12:00'}]}
]

// Domingo - fechado
// Segundas - 08:00 - 12:00 e 13:30 - 17:30
// Terças - 08:00 - 12:00 e 13:30 - 17:30
// Quartas - 08:00 - 12:00 e 13:30 - 17:30
// Quintas - 08:00 - 12:00 e 13:30 - 17:30
// Sextas - 08:00 - 12:00 e 13:30 - 17:30
// Sábados - 08:00 - 12:00