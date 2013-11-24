<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'status' => array(
        'title' => 'Статус',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    'default_output' => array(
        'title' => 'Вывод в стандартном месте',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    'hideDefMenu' => array(
        'title' => 'Пытаться скрыть стандартное меню',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Нет',
            '1' => 'Да',
        )
    ),
    'typemenu' => array(
        'title' => 'Тип меню',
        'description' => '',
        'value' => 'vertical',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'vertical' => 'Вертикальное',
            'horizontal' => 'Горизонтальное',
            'navbar' => 'Навигационная панель',
        )
    ),
    'delay' => array(
        'title' => 'Задержка',
        'description' => 'Задержка в миллисекундах перед скрытием подменю после того как курсор будет убран',
        'value' => '800',
        'control_type' => waHtmlControl::INPUT,
    ),
    'speed' => array(
        'title' => 'Скорость анимации',
        'description' => '',
        'value' => 'normal',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'slow' => 'Медленно',
            'normal' => 'Средне',
            'fast' => 'Быстро',
        )
    ),
    'speedOut' => array(
        'title' => 'Скорость анимации при закрывание',
        'description' => '',
        'value' => 'fast',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'slow' => 'Медленно',
            'normal' => 'Средне',
            'fast' => 'Быстро',
        )
    ),
    'autoArrows' => array(
        'title' => 'Стрелка',
        'description' => 'Если Да, то стрелка указывающая наличие подменю будет показана',
        'value' => 'true',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'true' => 'Да',
            'false' => 'Нет',
        )
    ),
    'sfMenuLi' => array(
        'title' => 'Цвет фона',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#BDD2FF',
        'control_type' => waHtmlControl::INPUT,
    ),
    'sfMenuLiHover' => array(
        'title' => 'Цвет фона при наведение',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#FFFFFF',
        'control_type' => waHtmlControl::INPUT,
    ),
    'sfMenuA' => array(
        'title' => 'Цвет текста',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#1133AA',
        'control_type' => waHtmlControl::INPUT,
    ),
    'sfMenuAHover' => array(
        'title' => 'Цвет текста при наведении',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#1133AA',
        'control_type' => waHtmlControl::INPUT,
    ),
    'sfMenuABorderLeftWidth' => array(
        'title' => 'Ширина левого бордюра между элементами меню',
        'description' => 'Значение в пикселях',
        'value' => '1',
        'control_type' => waHtmlControl::INPUT,
    ),
    'sfMenuABorderLeftColor' => array(
        'title' => 'Цвет левого бордюра между элементами меню',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#FFFFFF',
        'control_type' => waHtmlControl::INPUT,
    ),
    'sfMenuABorderTopWidth' => array(
        'title' => 'Ширина верхнего бордюра между элементами меню',
        'description' => 'Значение в пикселях',
        'value' => '1',
        'control_type' => waHtmlControl::INPUT,
    ),
    'sfMenuABorderTopColor' => array(
        'title' => 'Цвет верхнего бордюра между элементами меню',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#FFFFFF',
        'control_type' => waHtmlControl::INPUT,
    ),
);
