<?php

namespace Pages;

use Core\Page;
use Core\Request;
use Core\View;

final class AddListingPage extends Page
{
    public function __construct(Request $request, View $view)
    {
        parent::__construct($request, $view);
    }

    protected function render(): void
    {
        $src = __DIR__ . '/../main/add-listing_content.php';
        if (!is_file($src)) {
            throw new \RuntimeException('Missing page content: ' . $src);
        }
        include $src;
    }
}



