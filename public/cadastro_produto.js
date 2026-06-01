$(document).ready(function () {

    $("#btn_cadastrar2").click(function () {

        $.ajax({
            type: "POST",
            url: "api/salvar_produto",
            data: {
                nome_produto: $("#nome_produto").val(),
                descricao_produto: $("#descricao_produto").val(),
                preco_produto: $("#preco_produto").val(),
                tipo_produto: $("#tipo_produto").val(),
                estoque_produto: $("#estoque_produto").val(),
                data_validade: $("#data_validade").val()
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                if (data.erro == 'n') {
                    Swal.fire({
                        title: "Sabe muito!",
                        text: "Produto cadastrado com sucesso",
                        icon: "success"
                    });
                } else {
                    Swal.fire({
                        title: "vish",
                        text: "deu ruim",
                        icon: "error"
                    });
                }
            }
        });

    });

});