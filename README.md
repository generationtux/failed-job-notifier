# Failed Job Notifier
Notification service provider for failed Laravel Queue Jobs

## Install
Install `failed-job-notifier` using Composer
```
composer require generationtux/failed-job-notifier
```

Next, setup the required ENV variables:
```
PUSHER_KEY
PUSHER_SECRET
PUSHER_APP_ID

FAILED_JOBS_EMAIL_SENDER
FAILED_JOBS_EMAIL_SENDER_NAME
FAILED_JOBS_EMAIL_RECIPIENTS
FAILED_JOBS_EMAIL_SUBJECT
```

Finally, register the service provider:
```
// config/app.php
'providers' => [
    ...
    GenTux\FailedJobNotifier\FailedJobNotifierService::class,
	...
];
```