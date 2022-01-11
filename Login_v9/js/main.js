
(function ($) {
    "use strict";

    /*==================================================================
    [ Validate after type ]*/
    $('.validate-input .input100').each(function () {
        $(this).on('blur', function () {
            if (validate(this) == false) {
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
            $(this).parent().removeClass('true-validate');
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');

        $(thisAlert).append('<span class="btn-hide-validate">&#xf135;</span>')
        $('.btn-hide-validate').each(function () {
            $(this).on('click', function () {
                hideValidate(this);
            });
        });
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
        $(thisAlert).find('.btn-hide-validate').remove();
    }



})(jQuery);

function showPassword(input) {
    document.getElementById(input).setAttribute("type", document.getElementById(input).getAttribute("type") == "text" ? "password" : "text");


}




function ValidatePassword(input1, input2, input3, input4) {
    var password = document.getElementById('input1');
    var confirm_password = document.getElementById('input2');

   
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Dados não correspondem")
    } 
 
    else if (document.getElementById("input3").value == "" || document.getElementById("input4").value == "" || document.getElementById("input1").value == "" || document.getElementById("input2").value == ""){
    confirm_password.setCustomValidity("Preencha os campos");

    }
 
   

    else {

        document.getElementById("FormCadastro").submit();
       
    }
}
function cadastrar(){
    document.getElementById("FormCadastro2").submit();

}
function modalToggle(){
    const modal = document.getElementById('modal');
    modal.classList.toggle('active')
}

function limitarTextArea(campo){
    var string = campo.value;
    var novastring = "";
    var linhas = new Array();
    var trocarLinha = false;
    linhas = string.split("\n");
    var contador = linhas.length;

    for (x in linhas){
        if(linhas[x].length > campo.cols-2){
            linhas[x] = linhas[x].substring(0, campo.cols);
            trocarLinha=true;
        }
        if(x < campo.rows){
            novastring += linhas[x] + "\n";
        }
    }

    if (contador > campo.rows || trocarLinha) {
        campo.value = novastring.substring(0, novastring.length-1);
    }
    return contador <= campo.rows;
}

