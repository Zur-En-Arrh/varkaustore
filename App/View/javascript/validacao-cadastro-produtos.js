$(document).ready(function(){
    $("#form-sale").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            preco: {
                number: true,
                required: true,
                min: 1
            },
            genero: {
                required: true
            },
            publicadora: {
                required: true
            },
            qtde: {
                digits: true,
                required: true,
                min: 1
            },
            foto: {
                required: true,
                extension: "jpe?g|png"
            }

        },
        messages: {
            nome: {
                required: "Por favor, insira um nome.",
                minlength: "O mínimo de caracteres é 3."
            },
            preco: {
                number: "O preço precisa ser numérico.",
                required: "Por favor, insira um preço",
                min: "O valor mínimo é de R$1,00"
            },
            genero: {
                required: "Por favor, escolha um gênero."
            },
            publicadora: {
                required: "Por favor, insira uma publicadora."
            },
            qtde: {
                digits: "A quantidade deve ser um valor inteiro.",
                required: "Por favor, insira uma quantidade.",
                min: "A quantidade mínima é de 1 produto"
            },
            foto: {
                required: "Por favor, insira uma foto",
                extension: "Aceitamos apenas imagens do tipo .jpg ou .png."
            }
        }
    });
});