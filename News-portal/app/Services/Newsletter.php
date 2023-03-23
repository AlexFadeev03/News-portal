<?php

namespace App\Services;

use Illuminate\Validation\ValidationException;
use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email, string $list = null)
    {
//        $list ??= config('services.mailchimp.lists.subscribers');
        $list = $list ?? 'c18b31fcc9';

        return $this->client()->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);

    }
    protected function client()
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);

    }

}
