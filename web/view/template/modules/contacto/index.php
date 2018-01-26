<!-- CONTACT-->
<section class="module">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="module-header text-center">
          <h1>Contacto</h1>
          <p class="divider-line"></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <form id="contactForm" name="contactForm" action="<?php echo URL_WEB.'sendformContacto'; ?>" method="post" novalidate>
          <div class="row">
            <div class="col-sm-6 form-group">
              <input type="text" name="nombre" id="nombre" placeholder="Nombre" required="" class="form-control">
              <p class="help-block text-danger"></p>
            </div>
            <div class="col-sm-6 form-group">
              <input type="text" name="apellido" id="apellido" placeholder="Apellido" required="" class="form-control">
              <p class="help-block text-danger"></p>
            </div>
            <div class="col-sm-12 form-group">
              <input type="email" name="email" id="email" placeholder="E-mail" required="" class="form-control">
              <p class="help-block text-danger"></p>
            </div>
            <div class="col-sm-12 form-group">
              <textarea name="consulta" id="consulta" placeholder="Tu mensaje..." rows="7" required="" class="form-control"></textarea>
            </div>
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn btn-brand">Enviar</button>
            </div>
          </div>
        </form>
        <!-- Ajax response-->
        <div id="contact-response" class="ajax-response text-center"></div>
      </div>
    </div>
  </div>
</section>
<!-- END CONTACT-->
<!-- MAP-->
<section class="module p-0">
  <div class="maps-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.27291370238!2d-68.9109047851949!3d-33.02293968308361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967ddfffc8384555%3A0xcf0f167238ae7766!2sGuardia+Vieja+1040%2C+Mendoza!5e0!3m2!1ses-419!2sar!4v1516045551730" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>
<!-- END MAP-->



















<script type="text/javascript">
<!--//
$(document).ready(function() {
  $('#contactForm').submit(function() {
    var user_name       = $('#nombre').val();
    var user_email      = $('#email').val();
    var user_phone      = $('#asunto').val();
    var user_message    = $('#consulta').val();
    
    var output = '<div class="error color-danger text-center">Complete los campos obligatorios!</div>';

    var proceed = true;    

    if(user_name == '') {
      $('#nombre').focus();     
      $("#result").hide().html(output).slideDown();
      proceed = false;
      return false;
    }
    if(user_email == '') {
      $('#email').focus();     
      $("#result").hide().html(output).slideDown();
      proceed = false;
      return false;
    }
    if(user_phone == '') {
      $('#asunto').focus();     
      $("#result").hide().html(output).slideDown();
      proceed = false;
      return false;
    }    
    if(user_message == '') {
      $('#consulta').focus();     
      $("#result").hide().html(output).slideDown();
      proceed = false;
      return false;
    }

    if(proceed) {
      $.ajax({
        type: 'POST',
        url: "<?php echo URL_WEB.'sendformContacto'; ?>",
        data: $(this).serialize(),
        success: function(response) {
          var isJson = true;        
          var clean = true; 

          try {
            data = $.parseJSON(response); 
          } catch(e) {
            isJson = false;
            output = '<div class="error color-danger text-center">No se pudo enviar el correo. Por favor, int&eacute;ntelo m&aacute;s tarde!</div>';
          }       
          if(isJson) {
            if(data.type == 'error') {
              output = '<div class="error">'+data.text+'</div>';
              clean = false;
            } else {
              output = '<div class="success">'+data.text+'</div>';
            }
          }
          if(clean) {
            $('input').val('');    
            $('textarea').val('');          
          }
          $("#result").hide().html(output).slideDown();
        }
      });     
    }
    return false;
  });

  $('#contactForm input, #contactForm textarea').keyup(function() {
    $('#contactForm input, #contactForm textarea').css('border-color','');
    if($('#result').is(':visible')) $('#result').slideUp();
  });
});
//-->
</script>