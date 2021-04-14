 <!-- Contact -->
 <section class="contacto center" id="contacto">
    <div class="container">
      <div class="contacto-container center clearfix">
        <br>
        <h1>CONTACTO</h1>
        <h5>Env&iacute;ame tus dudas y comentarios.</h5>
        <br>
        <div class="row">
          <div class="contacto-input col-lg-6">
            <p><span class="info">* Campos requeridos</span></p>
            <form method="POST" action="../mail.php" class="contacto-form clearfix">
              <input name="asunto" id="asunto" type="text" placeholder="* Asunto" required />
              <input name="nombre" id="nombre" type="text" placeholder="* Nombre" class="none-margin" required />
              <input name="email" id="email" type="email" placeholder="* Correo electrónico" required />
              <input name="telefono" id="telefono" type="text" placeholder="  Teléfono" class="none-margin" />
              <textarea name="message" id="message" rows="8" placeholder="* Escribe tu mensaje" required></textarea>
              <input type="submit" name="enviar" id="enviar" value="Enviar Mensaje" />
            </form>
          </div>
          <div class="col-lg-6 vertical-center contacto-info">
            <div>
              <h4>Direcci&oacute;n</h4>
              <p>
                Ingenieros #1430, Filadelfia, 35010 Gómez Palacio, Dgo.
              </p>
              <hr />
              <h4>Teléfono</h4>
              <p>+52 871 447 2165</p>
            </div>
          </div>
          <!--The div element for the map -->
          <div id="map" class="map"></div>
        </div>
        <br />
      </div>
    </div>
  </section>
  <!-- End Contact -->