<?php

namespace App\Services;

use Google\Client;
use Google\Service\Forms;

class GoogleFormsService
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName('Laravel Google Forms');
        $this->client->setScopes([
            'https://www.googleapis.com/auth/forms.body',
            'https://www.googleapis.com/auth/forms.responses',
        ]);
        $this->client->setAuthConfig(env('GOOGLE_CREDENTIALS_PATH'));
        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');
        $this->client->setRedirectUri(url('api/auth/google/callback'));

        $this->service = new Forms($this->client);
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getService()
    {
        return $this->service;
    }

    public function createForm($title)
    {
        $form = new \Google\Service\Forms\Form();
        $form->setInfo(new \Google\Service\Forms\Info([
            'title' => $title,
        ]));

        return $this->service->forms->create($form);
    }

    public function getFormResponses($formId)
    {
        return $this->service->forms->responses->listFormsResponses($formId);
    }
}
