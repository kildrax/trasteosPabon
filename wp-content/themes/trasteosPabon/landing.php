<?php /*Template Name: Landing*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main>
            <section class="global__section glass">
                <div class="global__section_personalInfo animate__animated animate__fadeInUpBig animate__delay-2s">
                    <div class="global__section_personalInfo__leftContainer">
                        <div class="global__section_personalInfo__leftContainer--info">
                            <h2>Mudanzas Pabón</h2>
                            <p>Con más de 10 años de experiencia en las mudanzas y acarreos, Mudanzas Pabón cumple con rigurosidad y puntualidad su trabajo.</p>
                            <a href="tel:+573162219464">316 221 9464</a>
                        </div>
                        <div class="global__section_personalInfo__leftContainer--whatBtn">
                            <a href="tel:+573162219464">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png" alt="whatsapp contacto">
                            </a>
                        </div>
                    </div>
                    <div class="global__section_personalInfo__rightContainer">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testImg.jpg" alt="Imagen conductor">
                        </figure>
                    </div>
                </div>
                <div class="global__section_specsInfo animate__animated animate__fadeInUpBig animate__delay-3s">
                    <div class="global__section_specsInfo--card">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/settings.png" alt="Especificaciones del carro">
                        </figure>
                        <h3>Especificaciones Técnicas</h3>
                        <p>1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets con</p>
                    </div>
                    <div class="global__section_specsInfo--card">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/experience.png" alt="Experiencia">
                        </figure>
                        <h3>Experiencia</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="global__section_specsInfo--card">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/medical-mask.png" alt="Funcionamiento en Pandemia">
                        </figure>
                        <h3>Mudanzas en Pandemia</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    </div>
                </div>
                <div class="global__section_quotation animate__animated animate__fadeInUpBig animate__delay-4s">
                    <?php echo do_shortcode( '[contact-form-7 id="8" title="Trasteos Pabon"]' ); ?>
                </div>
            </section>
        </main>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <?php get_footer(); ?>
    <?php endwhile; ?>
<?php endif; ?>