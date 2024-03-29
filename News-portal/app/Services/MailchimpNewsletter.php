<?php

namespace App\Services;

use Illuminate\Validation\ValidationException;
use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client){
        //
    }
    public function subscribe(string $email, string $list = null)
    {
//        $list ??= config('services.mailchimp.lists.subscribers');
        $list = $list ?? 'c18b31fcc9';

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);

    }

}
