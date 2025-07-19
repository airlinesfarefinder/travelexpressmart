<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(866) 337-7171',
        'email_id' => 'info@travelexpressmart.com',
        'address' => '12 Hawkins Street Boston, MA 02114',
        'domain_name' => 'travelexpressmart.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
