$(document).ready(function(){
    $("#form-update").validate({
        rules: {
            preco: {
                number: true,
                required: true,
                min: 1
            },
            quantidade: {
                digits: true,
                required: true,
                min: 1
            }

        },
        messages: {
            preco: {
                number: "O preço precisa ser numérico.",
                required: "Por favor, insira um preço.",
                min: "O valor mínimo é de R$1,00"
            },
            quantidade: {
                digits: "A quantidade deve ser um valor inteiro.",
                required: "Por favor, insira uma quantidade.",
                min: "A quantidade mínima é de 1 produto"
            }
        }
    });
});