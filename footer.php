<footer class="page-footer orange">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12 xl12 center-align">
                <a href="index" class="brand-logo"><img src="" alt="Logo vecy" class=" btn-large black"></a> 
                <p class="grey-text text-lighten-4"></p>
              </div>

              <div class="col s12 m5 l5 xl5">
                <h5 class="white-text">Legal</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="terminos">Terminos</a></li>
                  <li><a class="grey-text text-lighten-3" href="privacidad">Privacidad</a></li>
                </ul>
              </div>

              <div class="col s12 m5 l5 xl5">
                <h5 class="white-text">Conoce más</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="vecy">Qué es Vecy?</a></li>
                  <li><a class="grey-text text-lighten-3" href="propuesta">Nuestra propuesta</a></li>
                  <!-- <li><a class="grey-text text-lighten-3" href="#!">Cómo funciona?</a></li> -->
                  <li><a class="grey-text text-lighten-3" href="negocios">Quiero que mi negocio este aquí!</a></li>
                  <!-- <li><a class="grey-text text-lighten-3" href="contacto">Contacto</a></li> -->
                </ul>
              </div> 

              <div class="col s12 m2 l2 xl2 center-align">
                <ul>
                  <li><a class="orange-text btn-floating pulse grey lighten-2" href="tel:+573192919978"><i class="fas fa-phone fa-2x fa-flip-horizontal"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/Vecy-Oficial"><i class="fab fa-facebook fa-2x"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/vecyoficial"><i class="fab fa-instagram fa-2x"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.twitter.com/vecyoficial"><i class="fab fa-twitter fa-2x"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCW0gQkrspccCy1mOCFAXgUA"><i class="fab fa-youtube fa-2x"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://pinterest.com/vecyoficial"><i class="fab fa-pinterest fa-2x"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="mailto:vecyoficial@gmail.com"><i class="far fa-envelope fa-2x"></i></a></li>
                </ul>               
              </div>

              <div class="col l4 offset-l2 s12">
                
              </div>
            </div>
          </div>
          <div class="footer-copyright orange">
            <div class="container center-align">
              2019 Vecy            
            </div>
          </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

         $('.carousel.carousel-slider').carousel({fullWidth: true});

         $(document).ready(function(){
            $('.materialboxed').materialbox();
          });
                 
        
        $('#textarea1').val('New Text');
        $('#textarea1').trigger('autoresize')
        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        //$('.collapsible').collapsible();
        $(document).ready(function(){
          // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
          $('.modal').modal();
        });
        $(document).ready(function(){
          $('.scrollspy').scrollSpy();
        });
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
          }
        );
        $(document).ready(function(){
          $('.collapsible').collapsible();
        });
        $(document).ready(function() {
          $('select').material_select();
        });
    </script>
    </body>
  </html>



    
</body>
</html>
