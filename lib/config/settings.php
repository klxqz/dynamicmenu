<?php

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
    
    
    
    
);
