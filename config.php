<?php

$apiKey = 'fyGOYrHksFJjyyZduJaV20Cwkoxcrw8E7bt5DQ4sSggBA4p';          // Ключ доступа к API
$offer_id = 4434;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = 'ZxRcm3aG';     // id потока
$landKey = 'd4e5c7aa11f2e8eaa348d0c180cff6b1';

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"21783":{"price":"1990","name":"NEOLINE X-COP 9000C - \u0432\u0438\u0434\u0435\u043e\u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0430\u0442\u043e\u0440 \u0441 \u0440\u0430\u0434\u0430\u0440-\u0434\u0435\u0442\u0435\u043a\u0442\u043e\u0440\u043e\u043c","country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"id":21783,"currency":{"code":"RUB","name":"\u0440\u0443\u0431"},"price2":"8650"}}';
$dataOffer = '{"price":"1990","name":"NEOLINE X-COP 9000C - \u0432\u0438\u0434\u0435\u043e\u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0430\u0442\u043e\u0440 \u0441 \u0440\u0430\u0434\u0430\u0440-\u0434\u0435\u0442\u0435\u043a\u0442\u043e\u0440\u043e\u043c","country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"id":21783,"currency":{"code":"RUB","name":"\u0440\u0443\u0431"},"price2":"8650"}';
$is_geo_detect = '';
$productName = 'NEOLINE X-COP 9000C - видеорегистратор с радар-детектором';
$invoice = 'index.php';
$push_link = '';
$language = 'ru';
$companyInfo = array('address' => '115093, г. Москва, Партийный переулок, д. 1, к. 58, офис 11', 'detail' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ПРАЙМ ТРЕЙД" ОГРН: 5187746026969 ИНН: 9725001008 КПП: 772501001');
$companyInfoEN = array('address' => '129090, Moscow, pereulok Zhivarev, house 8, stroenie 3, flat 16 email: ostrov.prodazh@mail.com Skype: ostrov.prodazh@mail.com', 'detail' => 'OOO "OSTROV PRODAZH" OGRN: 1197746695530 VAT: 7708365555');

$_debug = False; // установите True для вывода дополнительной информации для отладки и поиска ошибок
$pixels = [
    'fb_pixel', 'google_pixel', 'google_adw_pixel', 'tiktok_pixel', 'topmail_pixel', 'vk_pixel', 'yandex_metrika'
];

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
