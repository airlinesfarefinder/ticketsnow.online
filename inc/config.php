<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 497-2660',
        'email_id' => 'info@ticketsnow.online',
        'address' => '23 Hawkins Street Boston, MA 02114',
        'domain_name' => 'ticketsnow.online',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
