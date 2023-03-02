<?php
    get_header();
?>
    <section class="bienvenida seccion contenedor text-center">
        <h2 class="text-primary">
            <?php the_field('encabezado_bienvenida'); ?>
        </h2>
        <p><?php the_field('texto_bienvenida'); ?></p>
    </section>

    <section class="areas">
        <div class="area">
            <?php
                $area1 = get_field('area_1');
                $imagen = $area1['imagen']['sizes']['medium_large'];
                $texto = $area1['texto'];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>

        <div class="area">
            <?php
                $area2 = get_field('area_2');
                $imagen = $area2['imagen']['sizes']['medium_large'];
                $texto = $area2['texto'];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>

        <div class="area">
            <?php
                $area3 = get_field('area_3');
                $imagen = $area3['imagen']['sizes']['medium_large'];
                $texto = $area3['texto'];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>

        <div class="area">
            <?php
                $area4 = get_field('area_4');
                $imagen = $area4['imagen']['sizes']['medium_large'];
                $texto = $area4['texto'];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>
    </section>

    <main class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestras Clases</h2>

        <ul class="listado-grid">
            <?php
                $args = array(
                    'post_type' => 'gymfitness_clases',
                    'posts_per_page' => 4
                );

                $clases = new WP_Query($args);

                while($clases->have_posts()) {
                    $clases->the_post();
            ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="contenido">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <?php
                                $hora_inicio = get_field('hora_inicio');
                                $hora_fin = get_field('hora_fin');
                            ?>

                            <p>
                                <?php the_field('dias_clase'); ?> - 
                                <?php echo $hora_inicio . " a " . $hora_fin; ?>                            
                            </p>
                        </div>
                    </li>
                <?php
                }
                    wp_reset_postdata();
                ?>
        </ul>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url(get_permalink(22)) ?>" class="boton boton-primario">
                Ver Todas las Clases
            </a>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestros Instructores</h2>
        <p class="text-center">Intructores Profesionales que te ayudarán a lograr tus objetivos</p>

        <?php gymfitness_instructores(); ?>
    </section>

    <section class="testimoniales">
    <h2 class="text-center text-blanco">Testimoniales</h2>
    <div class="contenedor-testimoniales swiper">
        <?php gymfitness_testimoniales(); ?>
    </div>
    </section>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestros Blog</h2>
        <p class="text-center">Aprende tips de nuestros expertos</p>

        <ul class="listado-grid">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog = new WP_Query($args);
                while($blog->have_posts()) {
                    $blog->the_post();

                    get_template_part('template-parts/blog');
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>
    
    <?php
        get_footer();
    ?>