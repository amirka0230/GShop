"use strict"

document.addEventListener('DOMContentLoaded', function () {
   const form_reg = document.getElementById('form_reg');
   form_reg.addEventListener('submit', formSend);

   async function formSend(e) {

       e.preventDefault();

       let error = formValidate(form_reg);

       let formData = new FormData(form_reg);

       if (error===0){
           form_reg.classList.add('_sending');

           let response = await fetch('sendmail.php', {
               method: 'POST',
               body: formData
           });
           if (response.ok){
               let result = await response.json();
               alert(result.message);
               form_reg.reset();
               form_reg.classList.remove('_sending');
           } else {
              alert("Ошибка отправки")
               form_reg.classList.remove('_sending');
           }
       } else {
           alert('Заполните обязательные поля');
       }
   }

    function formValidate(form_reg) {
       let error = 0;
       let formReq = document.querySelectorAll('._req');

       for (let index = 0; index < formReq.length; index++)
       {
           const input = formReq[index];
           formRemoveError(input);

           if (input.classList.contains('_email')) {
               if (emailTest(input)) {
                   formAddError(input);
                   error++;
               } else if(input.getAttribute("type") === "checkbox" && input.checked === false) {
                   formAddError(input);
                   error++;
               }else {
                   if (input.value === '') {
                       formAddError(input);
                       error++;
                   }
               }
           }
           return error;
       }
    }

    function  formAddError(input) {
       input.parentElement.classList.add('_error');
       input.classList.add('_error');
    }
    function  formRemoveError(input) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }

    //Функция проверки email

    function  emailTest(input) {
       return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }
});