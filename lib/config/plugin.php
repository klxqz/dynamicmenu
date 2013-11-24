<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Динамическое меню SuperFish',
    'description' => 'Выпадающее многоуровневое динамическое меню',
    'vendor' => '985310',
    'version' => '1.0.0',
    'img' => 'img/superfish.png',
    'frontend' => true,
    'handlers' => array(
        'frontend_nav' => 'frontendNav',
    ),
);
//EOF
