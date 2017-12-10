<?php
namespace ExpressiveNamespace;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'commands' => [
                NamespaceCommand::class
            ]
        ];
    }
}
