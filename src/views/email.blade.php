<h2>There is a new failed job in the {{ getenv('FAILED_JOBS_SERVICE') }} service.</h2>
<p>To investigate further click the link below:</p>
<p>
    <a href="{{ getenv('FAILED_JOBS_URL') }}/healthz/failed-jobs">{{ getenv('FAILED_JOBS_URL') }}/healthz/failed-jobs</a>
</p>