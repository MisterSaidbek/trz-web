<?php

namespace App\Http\Controllers;

class Store{
	
	public static $modern=[
		'1'=>[
			'id'=>'1',
			'img'=>'zavods/6.png',
			'title'=>[
				'uz'=>'ToshElMash',
				'oz'=>'ТошЕлМ',
				'ru'=>'ТЭМ1'
			],
			'short_content'=>[
				'uz'=>'some title',
				'oz'=>'some title',
				'ru'=>'some title'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		],
		'2'=>[
			'id'=>'2',
			'img'=>'zavods/6.png',
			'title'=>[
				'uz'=>'TEM2',
				'oz'=>'TEM2',
				'ru'=>'TEM2'
			],
			'short_content'=>[
				'uz'=>'some title',
				'oz'=>'some title',
				'ru'=>'some title'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		]
	];
	public static $structures=[
		'1'=>[
			'id'=>'1',
			'img'=>'zavods/6.png',
			'title'=>[
				'uz'=>'1-Bo`lim',
				'oz'=>'1-Булим',
				'ru'=>'Отдел 1'
			],
			'short_content'=>[
				'uz'=>'Отдел 1',
				'oz'=>'Отдел 1',
				'ru'=>'Отдел 1'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		],
		'2'=>[
			'id'=>'2',
			'img'=>'zavods/6.png',
			'title'=>[
				'uz'=>'Отдел 2',
				'oz'=>'Отдел 2',
				'ru'=>'Отдел 2'
			],
			'short_content'=>[
				'uz'=>'Отдел 2',
				'oz'=>'Отдел 2',
				'ru'=>'Отдел 2'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		]
	];
	public static $zavods=[
		'1'=>[
			'id'=>'1',
			'title'=>[
				'uz'=>'some title',
				'oz'=>'some title',
				'ru'=>'some title'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		],
		'2'=>[
			'id'=>'2',
			'title'=>[
				'uz'=>'some title2',
				'oz'=>'some title',
				'ru'=>'some title'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		]
	];
	public static $history=[
		'1'=>[
			'id'=>'1',
			'title'=>[
				'uz'=>'some title',
				'oz'=>'some title',
				'ru'=>'some title'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		],
		'2'=>[
			'id'=>'2',
			'title'=>[
				'uz'=>'some title2',
				'oz'=>'some title',
				'ru'=>'some title'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		]
	];
	public static $manufactures=[
		'1'=>[
			'id'=>'1',
			'title'=>[
				'uz'=>'some title',
				'oz'=>'some title',
				'ru'=>'ЛОКОМОТИВНО-СБОРОЧНЫЙ ЦЕХ'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		],
		'2'=>[
			'id'=>'2',
			'title'=>[
				'uz'=>'some title2',
				'oz'=>'some title',
				'ru'=>'some title'
			],
			'content'=>[
				'uz'=>'some content',
				'oz'=>'some content',
				'ru'=>'some content'
			],
			'images'=>[
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png',
				'zavods/6.png'
			]
		]
	];
	public static $price_list = [
	    'title'=>[
	        'uz'=>'Narxlar jadvali',
            'oz'=>'Нархлар',
            'ru'=>'ПРАЙС-ЛИСТ'
        ],
        'content1'=>[
            'uz'=>'"O`ztemiryo`lmashta`mir" UK da teplovoz va elektrovozni ta`mirlash',
            'oz'=>'Таьмирлаш',
            'ru'=>'Прайс-лист на ремонт тепловозов и электровоз
в УП "Oztemiryolmashtamir"'
        ]

    ];
    public static $komitets_page= [
        'title'=>[
            'ru'=>'Комитеты',
            'uz'=>'Komitetlar',
            'oz'=>'Комитетлар'
        ],
    ];
	public static $home_page = [
	    'title'=>[
            'ru'=>'Унитарное предприятие',
	        'uz'=>'Unitar korxona',
	        'oz'=>'Унитар корхона',

        ],
	    'main_content'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'interactive'=>[
	        'uz'=>'interaktiv xizmatlar',
	        'oz'=>'интерактив хизматлар',
	        'ru'=>'ИНТЕРАКТИВНЫЕ УСЛУГИ'
        ],
	    'last_news'=>[
	        'uz'=>'So`nggi yangiliklar',
	        'oz'=>'Сўнгги хабарлар',
	        'ru'=>'Последние новости'
        ],
	    'gallery'=>[
	        'uz'=>'Galereya',
	        'oz'=>'Галерея',
	        'ru'=>'Галерея'
        ],
	    'useful_links'=>[
	        'uz'=>'Foydali havolalar',
	        'oz'=>'Фойдали Ҳаволалар',
	        'ru'=>'ПОЛЕЗНЫЕ ССЫЛКИ'
        ],
	    'statistics'=>[
	        'uz'=>'Statistika',
	        'oz'=>'Статистика',
	        'ru'=>'CТАТИСТИКА'
        ],
	    'partners'=>[
	        'uz'=>'Hamkorlarimiz',
	        'oz'=>'Ҳамкорларимиз',
	        'ru'=>'НАШИ ПАРТНЕРЫ'
        ],
	    'contacts'=>[
	        'uz'=>'Kontaktlar',
	        'oz'=>'Контактлар',
	        'ru'=>'КОНТАКТЫ'
        ],
	    'page_pres'=>[
	        'uz'=>'Prezident qarori',
	        'oz'=>'Президент қарори',
	        'ru'=>'Страница президента'
        ],
	    'open_source'=>[
	        'uz'=>'Ochiq ma`lumotlar',
	        'oz'=>'ОчиҚ маьлумотлар',
	        'ru'=>'Открытые данные'
        ],
	    'sertificate'=>[
	        'uz'=>'Sertifikatlar',
	        'oz'=>'Сертификатлар',
	        'ru'=>'Сертификаты'
        ],
	    'send_message'=>[
	        'uz'=>'Murojatlar yuborish',
	        'oz'=>'Мурожатлар юбориш',
	        'ru'=>'Отправить обращение'
        ],
	    'tenders'=>[
	        'uz'=>'Tenderlar',
	        'oz'=>'Тендерлар',
	        'ru'=>'тендеры'
        ],
	    'check'=>[
	        'uz'=>'Murojaatlarni tekshirish',
	        'oz'=>'Мурожаатларни текшириш',
	        'ru'=>'Проверить статус обращение'
        ],
	    'yubiley'=>[
	        'uz'=>'120 yil',
	        'oz'=>'120 йил',
	        'ru'=>'120 лет'
        ],
	    'all_news'=>[
	        'uz'=>'Xabarlar',
	        'oz'=>'Хабарлар',
	        'ru'=>'Все новости'
        ],
	    'auksion'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'government'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'lex'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'active_agency'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'palata'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'railway'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'uzkabel'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'kazygurt'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'talko'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'osookg'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'di_electric'=>[
	        'uz'=>'',
	        'oz'=>'',
	        'ru'=>''
        ],
	    'address'=>[
	        'uz'=>'		        O`zbekiston Respublikasi
								Toshkent sh. 100005 
								Mehrjon ko`chasi - 64',
	        'oz'=>'		        Ўзбекистон Республикаси
								Toshkent sh. 100005 
								Mehrjon ko`chasi - 64',

	        'ru'=>'
				    			Республика Узбекистан 
								100005, г. Ташкент ул. 
								Мехржон - 64'
        ]
    ];





}


?>