// funcion colores
const checkbox1 = document.getElementsByName("yes")[0];
const checkbox2 = document.getElementsByName("no")[0];

checkbox1.addEventListener("change", () => {
  if (checkbox1.checked) {
    checkbox2.checked = false;
    checkbox2.nextElementSibling.style.border = "none";
    checkbox1.nextElementSibling.style.border = "5px solid blue"; // Añadir estilo solo al checkbox seleccionado
  } else {
    checkbox1.nextElementSibling.style.border = "none";
  }
});

checkbox2.addEventListener("change", () => {
  if (checkbox2.checked) {
    checkbox1.checked = false;
    checkbox1.nextElementSibling.style.border = "none";
    checkbox2.nextElementSibling.style.border = "5px solid blue"; // Añadir estilo solo al checkbox seleccionado
  } else {
    checkbox2.nextElementSibling.style.border = "none";
  }
});
// Fin funcion colores

// ___________________________________________________________________________________________________________________

// funcion obtener token
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// enviar hdcashir form
$(document).ready(function() {
    $("#btnenv").click(function (send) {
        send.preventDefault();

        var name = $("#name").val();
        var last_name = $("#last_name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var city = $("#city").val();
        var theyre_new = $('#theyre_new').prop('checked');
        var url = $('meta[name="url"]').attr("content");
        

      $.ajax({
        type: 'post',
        url: url+'/send-hdcashierform',
        data: {
          name: name,
          last_name: last_name,
          email: email,
          phone: phone,
          city: city,
          theyre_new: theyre_new,
        },
 
        success: function (response) {
          if (response.errors) {
            $.each(response.errors, function(key, value) {
                $('#' + key)
                    .addClass('is-invalid')
                    .closest('.form-group')
                    .append('<span class="invalid-feedback">' + value + '</span>');
            });
          } 
                  
          else {
            var popup = '<p>¡Gracias por enviar tus datos!</p><p>¡Nos pondremos en contacto contigo!</p>';
            $("#popup").removeAttr("hidden");
            $('#popup').html(popup).addClass('success').fadeIn();
            setTimeout(function() {
            $('#popup').fadeOut().addClass('hidden');
            }, 3000);
        
            // Limpiar el formulario
            $('#hdcashierform')[0].reset();
          }

          
  
        },
        
        error: function (response){
          console.log(response);
        
        }
      });
    });
});
// ___________________________________________________________________________________________________________________