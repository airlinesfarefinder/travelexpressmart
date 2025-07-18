<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(866) 337-7171',
        'email_id' => 'info@travelexpressmart.com',
        'address' => 'demo, Boston, MA 02109, United States',
        'domain_name' => 'travelexpressmart.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
