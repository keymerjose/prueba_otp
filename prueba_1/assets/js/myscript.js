const urlController = '../prueba_1/assets/controller/controller.php';

const guardar = () => {
    let valid = validar_campos();
    console.log(valid);
    if(valid == 0){
        $.ajax({
            url: urlController,
            type: 'post',
            data: $('#formRegistrar').serialize(),
            dataType: "html",
            beforeSend: function(){
                
            },
            success: function (e) {
                let obj = JSON.parse(e);

                if(obj.data){
                    $.alert({
                        title: 'Registro',
                        content: 'Registro con éxito',
                        buttons: {
                            buttonOk: {
                                text: 'OK',
                                btnClass: 'btn-primary',
                                action: function () {
                                    location.reload();
                                }
                            }
                        }
                    });
                }
            }
        });
    }
}

const validar_campos = () => {
    let a = 0;
    $('#formRegistrar .form-control').each(function(){
        if($(this).val() == ''){
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
            a++;
        }else{
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
        }
    });
    return a;
}

const buscar_cedula = (valor) => {
    $.ajax({
        url: urlController,
        type: 'post',
        data: {
            valor: valor,
            type: 'buscar_cedula'
        },
        dataType: "html",
        beforeSend: () => {
            
        },
        success: function (e) {
            let obj = JSON.parse(e);
            if(obj.status == 1){
                $('#formRegistrar small').removeClass('d-none');
                $('#btnEnviar').addClass('disabled');
            }else{
                $('#formRegistrar small').addClass('d-none');
                $('#btnEnviar').removeClass('disabled');
            }
        }
    });
}