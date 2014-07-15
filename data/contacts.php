<?php

$contacts_title = 'Контакты';
$contacts_description = 'Вы можете связаться с нами, используя следующую контактную информацию :';

$work_schedule_title = 'Время работы :';
$work_schedule = 'Понедельник — пятница с 09:00 до 18:00. Суббота-воскресенье — выходной.
Все официальные праздники РБ — выходные.';

$qr_code_url = '/img/qr-code.png';

$contacts = [
    [
        'type' => 'email',
        'value_type' => 'email',
        'values' => [
            'fedor.silenkov@gmail.com',
        ],
        'image_url' => '/img/email.png',
    ],
    [
        'type' => 'phone',
        'value_type' => 'raw',
        'values' => [
            '+ 375 (29) 1407607',
        ],
        'image_url' => '/img/phone.png',
    ],
    [
        'type' => 'skype',
        'value_type' => 'skype',
        'values' => [
            'awesomeness.fs',
        ],
        'image_url' => '/img/skype.png',
    ],
    [
        'type' => 'vk',
        'value_type' => 'url',
        'values' => [
            'vk.com/dotline.design',
        ],
        'image_url' => '/img/vk.png',
    ],
];