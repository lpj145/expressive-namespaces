<?php
namespace ExpressiveNamespace;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'commands' => [
                'namespace:change' => NamespaceCommand::class
            ]
        ];
    }
}
