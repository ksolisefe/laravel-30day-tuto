<x-mail::message>
# Job Posted

    Congratulations! Your job has been posted and is now live on the job board.

<x-mail::button :url="'/jobs/' . $job->id">
View Job
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>