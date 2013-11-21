<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Динамическое меню',
    'description' => 'Выпадающее многоуровневое динамическое меню',
    'vendor' => '985310',
    'version' => '1.0.0',
    'img' => 'img/dynamicmenu.png',
    'frontend' => true,
    'handlers' => array(
        'frontend_nav' => 'frontendNav',
    ),
);
//EOF
