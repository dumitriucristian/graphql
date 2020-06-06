https://www.youtube.com/watch?v=4z3EMCc4bP4

###graphql
install graphql playground
https://www.electronjs.org/apps/graphql-playground

install lighthouse  
https://lighthouse-php.com/4.12/getting-started/installation.html

install with composer   
```composer require nuwave/lighthouse```

publish the default schema  
```
php artisan vendor:publish --provider="Nuwave\Lighthouse\LighthouseServiceProvider" --tag=schema
```

add configuration file
https://lighthouse-php.com/4.12/getting-started/configuration.html#cors     
```
php artisan vendor:publish --provider="Nuwave\Lighthouse\LighthouseServiceProvider" --tag=config
``````