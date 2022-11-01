var input = document.getElementById("input")
var output = document.getElementById("output")
var select = document.getElementById("select")

input.addEventListener("input", calcular)
select.addEventListener("change", calcular)

function calcular(){
	var inputValue = Number(input.value)
	var valorDolar = inputValue / 5.18
	var valorEuro = inputValue / 5.13
	switch(select.value){
		case "dolar":
			output.value = formatar(valorDolar,"USD")
			output.placeholder = "Dolar"
			break
		case "euro":
			output.value = formatar(valorEuro,"EUR")
			output.placeholder = "Euro"
	}
}

function formatar(numero,currency){
	numero = Number(numero)
	return numero.toLocaleString('en', { style: 'currency', currency: currency })
}