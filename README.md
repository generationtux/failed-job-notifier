# Failed Job Notifier
Notification service provider for failed Laravel Queue Jobs

## Install
Install `failed-job-notifier` using Composer
```
composer require generationtux/failed-job-notifier
```

Next up, the service provider must be registered:
```
// config/app.php
'providers' => [
    ...
    GenTux\FailedJobNotifier\FailedJobNotifierService::class,
	...
];
```