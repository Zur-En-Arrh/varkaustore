$(document).ready(function(){
    $("#form-register").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            email: {
                email: true,
                required: true
            },
            username: {
                required: true,
                minlength: 3
            },
            senha: {
                required: true,
                minlength: 6
            }

        },
        messages: {
            nome: {
                required: "Por favor, insira um nome.",
                minlength: "O mínimo de caracteres é 3."
            },
            email: {
                email: "O email precisa ser válido.",
                required: "Por favor, insira um email."
            },
            username: {
                required: "Por favor, insira um username.",
                minlength: "O mínimo de caracteres é 3."
            },
            senha: {
                required: "Por favor, insira uma senha.",
                minlength: "O mínimo de caracteres é 6"
            }
        }
    });
});