When you project need change namespace, or skeleton change namespace, you can edit file by file with ide, but if you project have thousands files ? this lib provider a console command for change all files namespace, use namespaces, and more...
#### How use
```
composer require marcosadantas/expressive-namespace
```

#### How this works
After install with composer, service manager try insert it on configs providers, if cannot put:
```
ExpressiveNamespace\ConfigProvider
```

After configuration, on console:

`namespace:change current newNamespace debugMode`

Usage:

`namespace:change App\ ApiBase\ true`


##### Description
This command load composer.json and go to path, change file by file all used and namespace files.