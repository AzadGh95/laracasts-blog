<?php


namespace App\Services;


use MailchimpMarketing\ApiClient;
use MailchimpMarketing\Configuration;

class MailchimpNewsLetter implements Newsletter
{

    public function __construct(protected ApiClient $client)
    {

    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }


}