<?php

namespace Capybash\MagicRead;

use Flarum\Extend;

return [
    new Extend\Locales(__DIR__ . '/resources/locale'),

    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/resources/less/forum.less')
        ->js(__DIR__ . '/js/dist/forum.js'),

    (new Extend\Frontend('admin'))
        ->css(__DIR__ . '/resources/less/admin.less')
        ->js(__DIR__ . '/js/dist/admin.js'),

    (new Extend\Settings())
        ->default('capybash-magicread.enable_counter', '1')
        ->default('capybash-magicread.enable_pagination', '1')
        ->default('capybash-magicread.per_page', '20')
        ->serializeToForum('magicread_enable_counter', 'capybash-magicread.enable_counter', 'boolval')
        ->serializeToForum('magicread_enable_pagination', 'capybash-magicread.enable_pagination', 'boolval')
        ->serializeToForum('magicread_per_page', 'capybash-magicread.per_page', 'intval'),
];