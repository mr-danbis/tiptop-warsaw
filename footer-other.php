<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__top">
            <div class="container">
                <div class="footer__top-wrapper">
                    <div class="footer__info">
                        <h2 class="footer__info-title">Kontact</h2>
                        <ul class="footer__info-list">
                            <li class="footer__info-item footer__info-tel">
                                <a class="footer__info-link" href="<?php echo get_option('phone'); ?>">
                                   <?php echo get_option('phone'); ?>
                                </a>
                            </li>
                            <li class="footer__info-item footer__info-mail">
                                <a class="footer__info-link" href="mailto:<?php echo get_option('email'); ?>">
                                    <?php echo get_option('email'); ?>
                                </a>
                            </li>
                            <li class="footer__info-item footer__info-time">
                                <?php echo get_option('work_time'); ?>
                            </li>
                        </ul>

                        <div class="footer__social">
                            <a class="footer__social-item" href="<?php echo get_option('facebook'); ?>"
                                target='_blank'>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/facebook.svg">
                            </a>
                            <a class="footer__social-item" href="<?php echo get_option('instagram'); ?>"
                                target='_blank'>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/instagram.svg">
                            </a>
                        </div>
                    </div>

                    <div class="footer__map">
                        <?php the_field('gugl_karta') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /.footer -->