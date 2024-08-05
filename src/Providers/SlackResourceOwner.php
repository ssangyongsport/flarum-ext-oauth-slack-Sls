<?php

/*
 * This file is part of blomstra/oauth-logto.
 *
 * Copyright (c) 2022 Team Blomstra.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Blomstra\OAuthSlack\Providers;

use Illuminate\Support\Arr;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class SlackResourceOwner implements ResourceOwnerInterface
{
    protected $response;

    public function __construct(array $response)
    {
        $this->response = $response;
    }

    public function getId(): ?string
    {
        return Arr::get($this->response, 'sub');
    }

    public function toArray()
    {
        return $this->response;
    }

    public function getName(): ?string
    {
        return Arr::get($this->response, 'name');
    }

    public function getFirstName(): ?string
    {
        return Arr::get($this->response, 'given_name');
    }

    public function getLastName(): ?string
    {
        return Arr::get($this->response, 'family_name');
    }

    public function getEmail(): ?string
    {
        return Arr::get($this->response, 'email');
    }

    public function getPicture(): ?string
    {
        return Arr::get($this->response, 'picture');
    }

    public function getUsername(): ?string
    {
        return Arr::get($this->response, 'username');
    }

    public function getPhoneNumber(): ?string
    {
        return Arr::get($this->response, 'phone_number');
    }

    public function getAddress(): ?array
    {
        return Arr::get($this->response, 'address');
    }

    public function getCustomData(): ?array
    {
        return Arr::get($this->response, 'custom_data');
    }

    public function getIdentities(): ?array
    {
        return Arr::get($this->response, 'identities');
    }
}
