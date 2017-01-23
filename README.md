# Failed Job Notifier
Notification service provider for failed Laravel Queue Jobs

## Install
Install `failed-job-notifier` using Composer
```
composer require generationtux/failed-job-notifier
```

Next, setup the required ENV variables:
```
PUSHER_KEY // Your Pusher Key
PUSHER_SECRET					// Your Pusher Secret
PUSHER_APP_ID					// Your Pusher App ID

FAILED_JOBS_SERVICE		 		// Service name
FAILED_JOBS_URL		 			// Service url
FAILED_JOBS_EMAIL_SENDER		// Email to send from
FAILED_JOBS_EMAIL_SENDER_NAME	// Sender Name
FAILED_JOBS_EMAIL_RECIPIENTS	// Who gets the emails
FAILED_JOBS_EMAIL_SUBJECT		// Subject of failed job emails
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
