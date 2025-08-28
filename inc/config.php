<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 497-2660',
        'email_id' => 'info@ticketsnow.online',
        'address' => 'P-3/20, DLF PHASE-II, GURUGRAM, GURUGRAM, Gurgaon, Haryana, 122002',
        'domain_name' => 'ticketsnow.online',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
