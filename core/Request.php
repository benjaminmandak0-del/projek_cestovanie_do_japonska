<?php

namespace Core;

final class Request
{
    public function __construct(
        public readonly array $get = [],
        public readonly array $post = [],
        public readonly array $files = [],
        public readonly array $server = []
    ) {}

    public static function fromGlobals(): self
    {
        return new self($_GET, $_POST, $_FILES, $_SERVER);
    }

    public function getString(string $key, ?string $default = null): ?string
    {
        $v = $this->get[$key] ?? null;
        if ($v === null) {
            return $default;
        }
        return is_string($v) ? $v : (string)$v;
    }

    public function postString(string $key, ?string $default = null): ?string
    {
        $v = $this->post[$key] ?? null;
        if ($v === null) {
            return $default;
        }
        return is_string($v) ? $v : (string)$v;
    }

    public function hasPost(string $key): bool
    {
        return array_key_exists($key, $this->post);
    }

    public function getServer(string $key, ?string $default = null): ?string
    {
        $v = $this->server[$key] ?? null;
        return $v === null ? $default : (string)$v;
    }
}

