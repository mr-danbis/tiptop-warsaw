<footer class="footer" id="contact">
    <div class="footer__wrapper">
        <div class="footer__top">
            <div class="container">
                <div class="footer__top-wrapper">
                    <div class="footer__info">
                        <?php
                                    global $post;

                                    $myposts = get_posts([ 
                                        'category_name'    => 'сontacts'
                                    ]);

                                    if( $myposts ){
                                        foreach( $myposts as $post ){
                                            setup_postdata( $post );
                                            ?>
                        <h2 class="footer__info-title"><?php the_title(); ?></h2>
                        <?php 
                                        }
                                    } else {
                                        // Постов не найдено
                                    }

                                    wp_reset_postdata(); // Сбрасываем $post
                                ?>
                        <ul class="footer__info-list">
                            <li class="footer__info-item footer__info-tel">
                                <a class="footer__info-link" href="tel:<?php the_field('Номер телефона (ссылка)'); ?>">
                                    <?php the_field('Номер телефона (кнопка)'); ?>
                                </a>
                            </li>
                            <li class="footer__info-item footer__info-mail">
                                <a class="footer__info-link" href="mailto:<?php the_field('Почта'); ?>">
                                    <?php the_field('Почта'); ?>
                                </a>
                            </li>
                            <li class="footer__info-item footer__info-time">
                                <?php the_field('Режим работы'); ?>
                            </li>
                            <li class="footer__info-item footer__info-location">
								<a class="footer__info-link" target='_blank' href="https://www.google.com/maps/place/Ko%C5%9Bcielna+45,+60-538+Pozna%C5%84,+%D0%9F%D0%BE%D0%BB%D1%8C%D1%88%D0%B0/@52.417666,16.906089,16z/data=!4m5!3m4!1s0x470444b6ad229115:0x98bd80e69771257!8m2!3d52.417666!4d16.9060894?hl=ru">
									<?php the_field('Местоположение'); ?>
								</a>
                            </li>
                        </ul>

                        <div class="footer__social">
                            <?php
                                        global $post;

                                        $myposts = get_posts([ 
                                            'category_name'    => 'social_list'
                                        ]);

                                        if( $myposts ){
                                            foreach( $myposts as $post ){
                                                setup_postdata( $post );
                                                ?>
                            <a class="footer__social-item" href="<?php the_field('Ссылка на соцсеть'); ?>"
                                target='_blank'>
                                <img src="<?php the_field('Картинка соцсети'); ?>">
                            </a>
                            <?php 
                                            }
                                        } else {
                                            // Постов не найдено
                                        }

                                        wp_reset_postdata(); // Сбрасываем $post
                                    ?>
                        </div>
                    </div>
                    <div class="footer__map">
						<iframe 
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.393579428382!2d16.903900716499347!3d52.41766597979496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470444b6ad229115%3A0x98bd80e69771257!2zS2_Fm2NpZWxuYSA0NSwgNjAtNTM4IFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1672941424187!5m2!1sru!2sby" 
							style="border:0;" allowfullscreen="" loading="lazy" 
							referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            ©
            <?php 
                        echo date('Y') . ' ' . get_bloginfo('name');
                    ?>
        </div>
    </div>
</footer>
<!-- /.footer -->