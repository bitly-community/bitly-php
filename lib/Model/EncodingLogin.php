<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class EncodingLogin extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<string>
     */
    protected $encodingLogin;

    /**
     * @return list<string>
     */
    public function getEncodingLogin(): array
    {
        return $this->encodingLogin;
    }

    /**
     * @param list<string> $encodingLogin
     */
    public function setEncodingLogin(array $encodingLogin): self
    {
        $this->initialized['encodingLogin'] = true;
        $this->encodingLogin = $encodingLogin;

        return $this;
    }
}
