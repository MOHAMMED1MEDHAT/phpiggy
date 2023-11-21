<?php

declare(strict_types=1);

namespace Framework;

class App
{
    public function run(): void
    {
        echo "Application is running on port 80";
    }

    public function kill(): void
    {
        echo "Application is terminated";
    }
}
