<?php
if (!defined('ACCESS_ALLOWED')) {
    header('HTTP/1.1 403 Forbidden');
    exit;
}

return [
    [
        'id' => 'gold_ticket',
        'name' => '黄金券',
        'description' => '珍贵的黄金券，可用于兑换特殊奖励。',
        'price' => 10000,
        'category' => 'item',
        'rarity' => 'legendary',
        'image' => '../assets/img/gt.png'
    ]
];
?>
