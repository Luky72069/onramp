<?php

return [
    [
        'name' => [
            'en' => 'collections',
        ],
        'description' => [
            'en' => 'A Laravel Collection is a convenient wrapper around arrays providing methods for manipulating the array data in useful ways.',
        ],
    ],
    [
        'name' => [
            'en' => 'HTML',
        ],
        'description' => [
            'en' => 'HTML (Hypertext Markup Language) is the primary language used to represent content on web pages. For example, it allows the the web browser to determine which parts of the content are headings, which parts are paragraph text and which parts should be formatted as tables.',
        ],
    ],
    [
        'name' => [
            'en' => 'CSS',
        ],
        'description' => [
            'en' => 'CSS (Cascading Style Sheet) is the primary language used in websites to describe the intended visual appearance of the site and its content. For example, it allows the the web browser to determine what size text should be, what color the background of a heading should be, or the spacing between two elements on the page.',
        ],
    ],
    [
        'name' => [
            'en' => 'Vagrant',
        ],
        'description' => [
            'en' => 'Vagrant is a software program used to manage and standardize development environments. It\s a Ruby-based configuration layer that makes it easy to provision and control hypervisors (VMWare, Parallels, HyperV, etc.) with simple configuration scripts.',
        ],
    ],
    [
        'name' => [
            'en' => 'Homestead',
        ],
        'description' => [
            'en' => 'Laravel Homestead is an official, pre-set Vagrant box that is pre-configured to serve Laravel applications and mirrors Laravel Forge almost exactly.',
        ],
    ],
    [
        'name' => [
            'en' => 'Valet',
        ],
        'description' => [
            'en' => 'Valet is a Laravel development environment for Mac minimalists. Using Homebrew and a few bundled applications, it serves your Laravel projects (and also those in WordPress, Statamic, and more) with almost no configuration on your end.',
        ],
    ],
    [
        'name' => [
            'en' => 'Request Lifecycle',
        ],
        'description' => [
            'en' => 'The request lifecycle describes what happens as a request (whether via HTTP or the console) comes into the Laravel application and generates a response, which is returned to the user. Every user request enters your Laravel application via the `public/index.php` file. This file loads Composer\'s `autoload.php`, importing packages and any other PHP files necessary, without having to call `include()` or `require()` manually. The `index.php` file also bootstraps an instance of the Laravel framework and generates an instance of a Request object that represents the incoming user request. This incoming request object is sent through the Laravel\'s HTTP kernel or console kernel, depending on the type of the request. This kernel is the heart of a Laravel application; all of the application\'s middlewares are registered there. The kernel is responsible for taking the user request, bootstrapping the full application, loading configuration files and environment variables, handling exceptions, registering facades, and registering all of the application\'s service providers. Once it finishes its work, the kernel passes the request to the router for dispatching. The router dispatches the request to a particular route or controller and runs it through any required middleware, such as the `auth` middleware. Finally, after the route or controller generates a response, the response is is sent back to the user (via HTTP or the console output).',
        ],
    ],
    [
        'name' => [
            'en' => 'Service Provider',
        ],
        'description' => [
            'en' => 'Service providers are the heart of every Laravel application. It is where all the relevant code bootstraps itself, where all bindings, event listeners, middleware, configurations, databases, routes and validations are registered. Service providers run at the beginning when the app is bootstrapping as Laravel goes through all service providers registered in `app/config/app.php`. Every new Laravel application already comes with a list of providers that run with every request, but we can create our own service providers either manually or by using `php artisan tinker` and running `php artisan make:provider CustomProvider` where `CustomProvider` is the name of our provider.',
        ],
    ],
    [
        'name' => [
            'en' => 'Service Container',
        ],
        'description' => [
            'en' => 'Laravel\'s service container, also known as the Inversion Of Control (IOC) container, Application container or Dependency Injection (DI) container, manages class dependencies and performs dependency injections. A dependency exists whenever one class uses (or depends on) another class or an interface, and it cannot do its work without them. The service container manages these dependencies and makes sure everything works as intended.',
        ],
    ],
    [
        'name' => [
            'en' => 'Helper methods',
        ],
        'description' => [
            'en' => 'Laravel provides a large number of helper methods that make some common tasks easier to perform. The list includes methods for working with strings, arrays, objects, URLs and other miscellaneous methods. For example, the helper method `Str::studly()` converts a given string to the StudlyCase.',
        ],
    ],
    [
        'name' => [
            'en' => 'CSRF Protection',
        ],
        'description' => [
            'en' => 'To protect your application from cross-site request forgery, which is a type of malicious exploit of a website, Laravel generates a CSRF token to verify the authenticated user. Simply add `@csrf` inside your `\<form\>` and Laravel will take care of the rest.',
        ],
    ],
    [
        'name' => [
            'en' => 'Blade',
        ],
        'description' => [
            'en' => 'Blade is a templating engine provided with Laravel. While we could use plain `PHP` inside `HTML` files, the markup up would quickly become messy and hard to read. With Blade we can still loop through data in our views using `@for`, `@foreach`, `@forelse` or `@while`, echo data by using the moustache syntax `{{}}` or display data conditionally by using clear syntax such as `@if`, `@elseif`, `@else` and `@unless`. Blade offers many more directives that make Blade a very powerful, yet easy to understand, templating language.',
        ],
    ],
    [
        'name' => [
            'en' => 'Localization',
        ],
        'description' => [
            'en' => 'Localization is a way to translate a website or web app to different languages, including local currencies and units of measurement. Laravel provides an easy way to retrieve strings in various languages by either using the `__` helper function or the `@lang` Blade directive. Laravel also supports pluralization for languages that have different pluralization rules.',
        ],
    ],
    [
        'name' => [
            'en' => 'VueJS',
        ],
        'description' => [
            'en' => 'VueJS is a progressive frontend JavaScript framework for creating user interfaces, the `view` layer of the application. Its ease of use and a smooth learning curve means that Vue is a popular choice when choosing a front-end framework, so much so that Laravel provides an easy way to install and setup Vue inside Laravel app by running `php artisan ui vue` or `php artisan ui vue --auth`.',
        ],
    ],
    [
        'name' => [
            'en' => 'Tinker',
        ],
        'description' => [
            'en' => 'Artisan Tinker is a REPL (Read, Evaluate, Print, Loop) interactive tool that is included with every Laravel installation. It can also be installed manually via Composer, if required. Tinker comes with a large list of commands that make it easy to do anything from creating models, controllers, migrating database tables or interacting with a database using the command line interface by using the `php artisan` command. In addition to the commands that are already provided, it is also possible to create custom commands by running `php artisan make:command MyCommand` where `MyCommand` is the name of the custom command.',
        ],
    ],
    [
        'name' => [
            'en' => 'Redis',
        ],
        'description' => [
            'en' => 'Redis (RemoteDictionaryServer) is an in-memory key-value store used as a database, cache, and a message broker. It is a no-SQL database, which means it does not use structures such like tables, rows or columns, and it does not use statements such as `SELECT`, `INSERT`, `UPDATE` or `DELETE`. Instead, it uses data structures like `strings`, `lists`, `sets`, `sorted sets`, `hashes`, `bitmaps` and others to store data. Because Redis is an in-memory database (with available persistence options), it is also very fast and therefore ideal for caching, real-time comment streams or queue jobs.',
        ],
    ],
    [
        'name' => [
            'en' => 'Cashier',
        ],
        'description' => [
            'en' => 'Laravel Cashier is a package that provides an easy to use and configurable interface to various billing services, such as Stripe, Paddle or Mollie.',
        ],
    ],
    [
        'name' => [
            'en' => 'Dusk',
        ],
        'description' => [
            'en' => 'Laravel Dusk is a browser automation and API testing package. With Dusk you can programmatically test your Laravel application or visit any website using a real Chrome browser. Dusk can automate repetitive tasks or scrape information from other websites and while Dusk uses a Chrome driver out of the box, you can use any other Selenium compatible drivers instead.',
        ],
    ],
    [
        'name' => [
            'en' => 'Envoy',
        ],
        'description' => [
            'en' => 'Laravel Envoy provides a clear and concise, Blade-like syntax to define common tasks run on remote servers.',
        ],
    ],
    [
        'name' => [
            'en' => 'Horizon',
        ],
        'description' => [
            'en' => 'Horizon is a dashboard and configuration package for Laravel-powered Redis queues. Redis (RemoteDictionaryServer) is an in-memory key-value store used as a database, cache, and a message broker and Horizon makes it easy to monitor key metrics, for example, the health, performance, failures or history of any queue system in your Laravel application.',
        ],
    ],
    [
        'name' => [
            'en' => 'Passport',
        ],
        'description' => [
            'en' => 'Laravel Passport is a package to authenticate APIs. Due to the unique nature of APIs as they typically use tokens to authenticate users and do not maintain session state between requests, authenticating APIs has not always been straightforward. Laravel Passport makes it possible by implementing an OAuth2 server inside your Laravel application.',
        ],
    ],
    [
        'name' => [
            'en' => 'Scout',
        ],
        'description' => [
            'en' => 'Laravel Scout is a full-text search package that uses an Algolia driver under the hood. However, it is possible to write a custom driver and extend Scout with your own search implementation, which makes Laravel Scout a great solution for any text-search related needs.',
        ],
    ],
    [
        'name' => [
            'en' => 'Socialite',
        ],
        'description' => [
            'en' => 'Laravel Socialite is a package that makes it easy to set up and use OAuth authentication in a Laravel application.',
        ],
    ],
    [
        'name' => [
            'en' => 'Telescope',
        ],
        'description' => [
            'en' => 'Laravel Telescope is a debug assistant package that allows to debug and monitor various aspects of Laravel application, such as exceptions, notifications, scheduled tasks, variable dumps and others.',
        ],
    ],
     [
         'name' => [
             'en' => 'Echo',
         ],
         'description' => [
             'en' => 'Laravel Echo is a JavaScript library for event broadcasting. It makes it easy to handle authentication, authorization and subscribing to channels and listen for event broadcasts. Because Laravel Echo is a Javascript library, it needs to be installed via NPM package manager.',
         ],
     ],
    [
        'name' => [
            'en' => 'Vapor',
        ],
        'description' => [
            'en' => 'Laravel Vapor is an auto-scaling, serverless deployment platform developed specifically for Laravel, powered by AWS Lambda.',
        ],
    ],
    [
        'name' => [
            'en' => 'Forge',
        ],
        'description' => [
            'en' => 'Laravel Forge is a server provisioning and management tool for PHP applications. Server provisioning is the process of setting up a server and making it ready to be used. This includes installing and configuring all necessary software and applications, connecting it to middleware, networks and storage and finally deploying the application. Laravel Forge makes this process as well as the management of the server easy and convenient.',
        ],
    ],
    [
        'name' => [
            'en' => 'Nova',
        ],
        'description' => [
            'en' => 'Laravel Nova is an administration dashboard that is known for its great design and the ability to administer the app\'s database records using Eloquent, the Laravel ORM (Object-Relational Mapping).',
        ],
    ],
    [
        'name' => [
            'en' => 'Lumen',
        ],
        'description' => [
            'en' => 'Lumen is a free, API-focused microframework built by Laravel. Its incredible speed makes it one of the fastest microframeworks on the market, and because it is powered by Laravel\'s components, it is very easy to upgrade your Lumen application to a full Laravel application.',
        ],
    ],
    [
        'name' => [
            'en' => 'Spark',
        ],
        'description' => [
            'en' => 'Spark is a software as a service (SaaS) application scaffolding. Using Spark in your application makes it easy to set up many common features of web applications such as subscriptions, invoices, team billing, user impersonation and many others.',
        ],
    ],
];
