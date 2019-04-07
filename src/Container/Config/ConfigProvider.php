<?php

declare(strict_types=1);

namespace Antidot\Aura\Router\Container\Config;

use Antidot\Application\Http\RouteFactory;
use Antidot\Application\Http\Router;
use Antidot\Aura\Router\AuraRouteFactory;
use Antidot\Aura\Router\AuraRouter;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                'invokables' => [
                    Router::class => AuraRouter::class,
                    RouteFactory::class => AuraRouteFactory::class,
                ]
            ]
        ];
    }
}
