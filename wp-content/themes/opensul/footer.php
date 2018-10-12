<footer id="footer" class="footer wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.3640865513407!2d-51.16603818528139!3d-30.055096581878498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977e1800c96cb%3A0xbd4d7c842bdf200c!2sAv.+Ipiranga%2C+7464+-+Jardim+Bot%C3%A2nico%2C+Porto+Alegre+-+RS%2C+91530-000!5e0!3m2!1spt-BR!2sbr!4v1536620254644" frameborder="0" style="border:0" allowfullscreen></iframe>	
        </section>
        <section class="contact" data-speed="15">
            <div class="container">
                <div class="row p-tb-lg">
                    <div class="col-sm-4 text-center">
                        <div class="contact-box">
                            <i class="fas fa-phone fa-3x text-primary"></i>
                            <p class="no-margin">Telefone Fixo:</p>
                            <h3 class="no-margin">(51) 3269 7835</h3>
                        </div>
                    </div>
                    <hr class="hr-md visible-xs">
                    <div class="col-sm-4 text-center">
                        <div class="contact-box">
                            <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                            <p class="no-margin">Celular/Whatsapp:</p>
                            <h3 class="no-margin">(51) 99104 8171 - Pimentel</h3>
                        </div>
                    </div>
                    <hr class="hr-md visible-xs">
                    <div class="col-sm-4 text-center">
                        <div class="contact-box">
                            <i class="fab fa-skype fa-3x text-primary"></i>
                            <p class="no-margin">Skype:</p>
                            <h3 class="no-margin">opensul</h3>
                        </div>
                    </div>
                </div>
                <hr class="hr-md no-border hidden-xs">
                <div class="row p-b-lg">
                    <div class="col-sm-5 text-right text-center-sm">
                        <h2>Contato por E-mail:</h2>
                        <p>Preencha o formulário que entraremos em contato.</p>
                        <p>Respondemos em menos de 24h.</p>
                        <h4>Redes Sociais</h4>
                        <ul class="list-inline social-media">
                            <li>
                                <a href="https://www.facebook.com/OPENSUL/" target="_blank">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-7">
                        <p class="small">* Campos obrigatórios</p>
                        <?php echo do_shortcode( '[contact-form-7 id="121" title="Contato"]' ); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="copy p-tb-sm">
            <div class="container">
                <p class="text-center small no-margin">Open Sul &copy <?php echo date('Y'); ?> - Todos os direitos reservados.</p>
            </div>
        </section>
    </footer>
</body>
<?php wp_footer(); ?>
</html>