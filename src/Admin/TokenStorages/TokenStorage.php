<?php

namespace NTI\KeycloakClient\Admin\TokenStorages;

interface TokenStorage
{
    /**
     * @return array|null
     */
    public function getToken();

    /**
     * @param array $token
     */
    public function saveToken(array $token);
}