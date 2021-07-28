$(function () {

    $('.filtro').click(function () {
        $('.mostraFiltro').slideToggle();
        $(this).toggleClass('active');
        return false;
    });

    $('.mobmenu').click(function () {
        $('.menutopo').slideToggle();
        $(this).toggleClass('active');
        return false;
    });

    $('.senha').click(function () {
        $('.mostrasenha').slideToggle();
        $(this).toggleClass('active');
        return false;
    });

    $("#accordion").accordion({
        collapsible: true,
        autoHeight: false,
        active: false,
        heightStyle: "content"
    });

});

function excluir(obj) {
    var contato = $(obj).attr('data-entidade');
    var id = $(obj).attr('data-id');
    var nome = $(obj).attr('data-nome');

    Swal.fire({
        title: 'Excluir',
        text: "Deseja realmente Excluir o Contato " + nome + "?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Não'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: base_url + contato + "/excluir/" + id,
                success: function (response) {
                    Swal.fire(
                        'Sucesso!',
                        "Contato "+ nome +" excluído com sucesso!",
                        'success'
                    ).then((result) => {
                        location.reload();
                    });
                }
            });
        }
    })

    /*if (confirm('Deseja realmente excluir ?')) {
        window.location.href = base_url + contato + "/excluir/" + id;
    }*/
}

function fecharMsg(obj) {
    $(".msg").hide();
}
