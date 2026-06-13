<?php

namespace Core;

abstract class Page
{
    public function __construct(
        protected readonly Request $request,
        protected readonly View $view
    ) {}

    public function run(): void
    {
        $this->handle();
        $this->render();
    }

    protected function handle(): void
    {
        
    }

    abstract protected function render(): void;
}

