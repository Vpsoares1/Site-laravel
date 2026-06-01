$(document).ready(function () {

    $("#btn_cadastrar2").click(function () {


        $.ajax({
            type: "POST",
            url: "api/salvar_roupa",
            data: {
                nome_roupa: $("#nome_roupa").val(),
                descricao_roupa: $("#descricao_roupa").val(),
                preco_roupa: $("#preco_roupa").val(),
                estoque_roupa: $("#estoque_roupa").val(),
                tamanho_roupa: $("#tamanho_roupa").val(),
                peca_roupa: $("#peca_roupa").val()
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                if (data.erro == 'n') {
                    Swal.fire({
                        title: "Sabe muito!",
                        text: "Roupa cadastrada com sucesso",
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
        ''
   
    });

});