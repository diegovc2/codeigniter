</section>




<script  src="js/index.js"></script>


<script>

$(function() {
$("#regiones").on('change', function() {


    // re-initialize material-select
    //$('#comunas').material_select();
    $("#comunas").material_select();

    //$('select').material_select();

});
});

  $(document).ready(function() {
    $('select').material_select();
    $('.tooltipped').tooltip();

  });



function reloadCaptcha()

{
document.getElementById('cap').src='secureimage/secureimage_show.php';
}

  $(function() {

    var rut=document.getElementById('rut');
    $("input#rut").rut({
         formatOn: 'keyup',
        minimumLength: 7, // validar largo mínimo; default: 2
          validateOn: 'change' // si no se quiere validar, pasar null
        });


      $("input#rut").rut().on('rutValido', function(e, rut, dv) {

        this.setCustomValidity("");

      });

      $("input#rut").rut().on('rutInvalido', function(e) {

        rut.setCustomValidity("RUT Invalido");
});

  });


  $.noConflict();
   function reloadCaptcha()
   {
       jQuery('#siimage').prop('src', './securimage_show.php?sid=' + Math.random());
   }
   function processForm()
   {
       jQuery.ajax({
           url: '<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES) ?>',
           type: 'POST',
           data: jQuery('#contact_form').serialize(),
           dataType: 'json'
       }).done(function(data) {
           if (data.error === 0) {
               jQuery('#success_message').show();
               jQuery('#contact_form')[0].reset();
               reloadCaptcha();
               setTimeout("jQuery('#success_message').fadeOut()", 12000);
           } else {
               alert("There was an error with your submission.\n\n" + data.message);
               if (data.message.indexOf('Incorrect security code') >= 0) {
                   jQuery('#captcha_code').val('');
               }
           }
       });
       return false;
   }


</script>

</div>
</main>


<footer class="page-footer white">
  <div class="footer-copyright #f5f5f5 orange">
    <div class="container grey-text">
    </div>
  </div>
          <div class="container">


            <div class="row" style="padding-top:80px;">
              <div class="col l2 s2">
                <img style="height:64px;" src="imgs/atmspa-logo-r.svg">
                <ul>
                  <li>Luis Thayer Ojeda # 0115, Of. 1101 </li>
                  <li>Providencia - Santiago, Chile</li>
                  <li></li>
                  <li>(56 2) 2945 8900</li>
                  <li> info@atmsa.cl</li>

                </ul>
              </div>
            </div>


          </div>


        </footer>


      </body>


</html>

<?php
// The form processor PHP code
function process_si_contact_form()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
        // if the form has been submitted
        foreach($_POST as $key => $value) {
            if (!is_array($key)) {
                // sanitize the input data
                if ($key != 'ct_message') $value = strip_tags($value);
                $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
            }
        }
        $errors = array();  // initialize empty error array

        // Only try to validate the captcha if the form has no errors
        // This is especially important for ajax calls
        if (sizeof($errors) == 0) {
            require_once dirname(__FILE__) . '/securimage.php';
            $securimage = new Securimage();
            if ($securimage->check($captcha) == false) {
                $errors['captcha_error'] = 'Codigo incorrecto';
            }
        }
        if (sizeof($errors) == 0) {

            if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
                // send the message with mail()
            }
            $return = array('error' => 0, 'message' => 'OK');
            die(json_encode($return));
        } else {
            $errmsg = '';
            foreach($errors as $key => $error) {
                // set up error messages to display with each field
                $errmsg .= " - {$error}\n";
            }
            $return = array('error' => 1, 'message' => $errmsg);
            die(json_encode($return));
        }
    } // POST
} // function process_si_contact_form()
