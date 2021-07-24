<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "TechnoBureau", // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'TechnoBureau - Dashboard'
            'description'  => 'We are here to share our knowledge through technical articles in a easiest way and also will provide DevOps Tools, Technology News and other debate about various technologies.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['TechnoBureau','techno','technology','tutorial','linux','open-source'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'A Technology Intelligence | TechnoBureau', // set false to total remove
            'description' => 'We are here to share our knowledge through technical articles in a easiest way and also will provide DevOps Tools, Technology News and other debate about various technologies.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'Organization',
            'site_name'   => 'TechnoBureau',
            'locality'       => 'TamilNadu',
            'country-name'   => 'India',
            'locale'        => 'en-US',
            'locale:alternate' => 'en-UK',
            'images'      => ['/img/apple-touch-icon-192x192.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'title'       => 'A Technology Intelligence | TechnoBureau',
            'description' => 'We are here to share our knowledge through technical articles in a easiest way and also will provide DevOps Tools, Technology News and other debate about various technologies.',
            'site'        => '@TechnoBureau',
            'creator'     => '@ganapathi_raja',
            'url'         => null,
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'A Technology Intelligence | TechnoBureau', // set false to total remove
            'description' => 'We are here to share our knowledge through technical articles in a easiest way and also will provide DevOps Tools, Technology News and other debate about various technologies.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['/img/apple-touch-icon-192x192.png'],
        ],
    ],
];
