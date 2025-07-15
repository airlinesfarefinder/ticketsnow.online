<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 497-2660',
        'email_id' => 'info@demo.com',
        'address' => 'demo, Boston, MA 02109, United States',
        'domain_name' => 'ticketsnow.online',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
