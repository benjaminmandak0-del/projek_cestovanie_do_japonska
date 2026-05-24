<?php

namespace Core;

final class View
{
    public function __construct(
        private readonly string $templateDir
    ) {}

    public static function fromProjectRoot(): self
    {
        $templateDir = dirname(__DIR__) . '/templates';
        return new self($templateDir);
    }

    public function renderHeader(): void
    {
        $headerPath = $this->templateDir . '/header.php';
        if (!is_file($headerPath)) {
            throw new \RuntimeException('Missing header template: ' . $headerPath);
        }
        include $headerPath;
    }

    public function renderFooter(): void
    {
        $footerPath = $this->templateDir . '/footer.php';
        if (!is_file($footerPath)) {
            throw new \RuntimeException('Missing footer template: ' . $footerPath);
        }
        include $footerPath;
    }
}

