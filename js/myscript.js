function sendAjaxFormA(result_form, ajax_form, url) {
  if ( checkLoginA() ===false){
    $(result_form).html("Укажите Логин"); 
  }else{
    if ( checkPassA() ===false){
      $(result_form).html("Укажите Пароль"); 
    }else{
      var data=getDataAsJSON_A();
      $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        data: data,
        success: function(data) { //Данные отправлены успешно
          $(result_form).html(data); 
        },
        error: function(res) { // Данные не отправлены
          $(result_form).html("Ошибка. Данные не отправлены."); 
        }
      });
    }
  }
}
//собирает данные из формы
function getDataAsJSON_A(){
  var result = {};
  $('#f_auth input').each(function(){
    result[$(this).attr('name')] = $(this).val();
  })
  return result;
} 
//проверка ФИО на заполненность
function checkLoginA(){
  var login = $('#f_auth input[name="login"]').val();
  var result = true;
  if (login.length===0){
      result = false;
    };
  return result
}
function checkPassA(){
  var pass = $('#f_auth input[name="password"]').val();
  var result = true;
  if (pass.length===0){
      result = false;
    };
  return result
}
/**/
function sendAjaxFormR(result_form, ajax_form, url) {
  if ( checkFIO() ===false){
    $(result_form).html("Представьтесь, пожалуйста!"); 
  }else{
      if ( checkLoginR() ===false){
        $(result_form).html("Укажите Логин"); 
      }else{
        if ( checkPassR() ===false){
          $(result_form).html("Укажите Пароль"); 
        }else{
          if ( checkMAIL() ===false){
            $(result_form).html("Укажите Ваш email"); 
          }else{
            var data=getDataAsJSON_R();
            $.ajax({
              url:     url, //url страницы (action_ajax_form.php)
              type:     "POST", //метод отправки
              data: data,
              success: function(data) { //Данные отправлены успешно
                $(result_form).html(data); 
            },
            error: function(res) { // Данные не отправлены
                $(result_form).html("Ошибка. Данные не отправлены."); 
              }
            });
          }
        }
      }
    }
  }
}
//собирает данные из формы
function getDataAsJSON_R(){
  var result = {};
  $('#f_reg input').each(function(){
    result[$(this).attr('name')] = $(this).val();
  })
  //result['message'] = $('#f_reg textarea[name="message"]').val();
  return result;
} 
//проверка ФИО на заполненность
function checkLoginR(){
  var login = $('#f_reg input[name="login"]').val();
  var result = true;
  if (login.length===0){
      result = false;
    };
  return result
}
//проверка ФИО на заполненность
function checkFIO(){
  var fio = $('#f_reg input[name="fio"]').val();
  var result = true;
  if (fio.length===0){
      result = false;
    };
  return result
}
function checkMAIL(){
  var mail = $('#f_reg input[name="email"]').val();
  var result = true;
  if (mail.length===0){
      result = false;
    };
  return result
}
function checkPassR(){
  var pass = $('#f_reg input[name="password"]').val();
  var result = true;
  if (pass.length===0){
      result = false;
    };
  return result
}
/**/
function sendAjaxFormS(result_form, ajax_form, url) {
  var data=getDataAsJSON_S();
    $.ajax({
      url:     url, //url страницы (action_ajax_form.php)
      type:     "POST", //метод отправки
      data: data,
      success: function(data) { //Данные отправлены успешно
        $(result_form).html(data); 
      },
      error: function(res) { // Данные не отправлены
        $(result_form).html("Ошибка. Данные не отправлены."); 
      }
    });
}
//собирает данные из формы
function getDataAsJSON_S(){
  var result = {};
/*  $('#f_reg input').each(function(){
    result[$(this).attr('name')] = $(this).val();
  })*/
  result['message'] = $('#f_mess textarea[name="message"]').val();
  return result;
}

$( document ).ready(function() {
    $("#btnr").click(
    function(){
      sendAjaxFormR('#result_form', 'f_reg', 'http:/localhost/my_bootstrap/register.php');
      return false; 
    });
    $("#btna").click(
    function(){
      sendAjaxFormA('#auth_form', 'f_auth', 'http:/localhost/my_bootstrap/authoriz.php');
      return false; 
    });

    $("#btns").click(
    function(){
      sendAjaxFormS('#mess_form', 'f_mess', 'http:/localhost/my_bootstrap/index_auth.php');
      return false; 
    });
 

    };
});
/**/
