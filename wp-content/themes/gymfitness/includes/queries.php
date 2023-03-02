<?php
    function gymfitness_instructores(){
        ?>
        <ul class="listado-grid instructores">
            <?php
                $args = array(
                    'post_type' => 'instructores',
                    'posts_per_page' => 4
                );

                $instructores = new WP_Query($args);

                while($instructores->have_posts()) {
                    $instructores->the_post();
            ?>
                    <li class="instructor">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="contenido text-center">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                            <div class="especialidad">
                                <?php
                                    $esp = get_field('especialidad');

                                    foreach($esp as $e) { ?>
                                        <span class="etiqueta">
                                            <?php echo esc_html($e); ?>
                                        </span>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </li>
                <?php
                }
                    wp_reset_postdata();
                ?>
        </ul>
        <?php
    }

function gymfitness_testimoniales() {
    ?>
    <ul class="listado-testimoniales swiper-wrapper">
            <?php
                $args = array(
                    'post_type' => 'testimoniales'
                );

                $testimoniales = new WP_Query($args);

                while($testimoniales->have_posts()) {
                    $testimoniales->the_post();
            ?>
                    <li class="testimonial text-center swiper-slide">
                        <blockquote>
                            <?php the_content(); ?>
                        </blockquote>
                        
                        <foooter class="testimonial-footer">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </footer>
                    </li>
                <?php
                }
                    wp_reset_postdata();
                ?>
        </ul>
        <?php
    }