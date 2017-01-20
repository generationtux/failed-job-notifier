<?php namespace GenTux\FailedJobNotifier;

use Illuminate\Support\ServiceProvider;

/**
 * Notify when queue jobs fail
 *
 * @package GenTux\FailedJobNotifier
 */
class FailedJobNotifierService extends ServiceProvider
{
	/**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
	
	public function boot()
	{
		Queue::failing(function($connection, $job, $data) {
			$pusher = new \Pusher(
				getenv('PUSHER_KEY'),
                getenv('PUSHER_SECRET'),
                getenv('PUSHER_APP_ID')
			);
			$pusher->trigger('failed-jobs', 'new-failed-job', []);
		});
		
		if (getenv('APP_ENV') == 'production') {
            Mail::send('healthz.emails.failed-job', [], function ($message) {
                $message->from(getenv('FAILED_JOBS_EMAIL_SENDER'), getenv('FAILED_JOBS_EMAIL_SENDER_NAME'));
                $message->to(getenv('FAILED_JOBS_EMAIL_RECIPIENTS'));
                $message->subject(getenv('FAILED_JOBS_EMAIL_SUBJECT'));
            });
        }
	}
	
	public function register() {}
}