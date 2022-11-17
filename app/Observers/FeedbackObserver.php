<?php

namespace App\Observers;

use App\Models\Feedback;
use App\Notifications\feedNotify;
use Illuminate\Support\Facades\Notification;

class FeedbackObserver
{
    /**
     * Handle the Feedback "created" event.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return void
     */
    public function created(Feedback $feedback)
    {
        //
        Notification::send($feedback->product->user,new feedNotify($feedback->product->user,$feedback->product));
    }

    /**
     * Handle the Feedback "updated" event.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return void
     */
    public function updated(Feedback $feedback)
    {
        //
    }

    /**
     * Handle the Feedback "deleted" event.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return void
     */
    public function deleted(Feedback $feedback)
    {
        //
    }

    /**
     * Handle the Feedback "restored" event.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return void
     */
    public function restored(Feedback $feedback)
    {
        //
    }

    /**
     * Handle the Feedback "force deleted" event.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return void
     */
    public function forceDeleted(Feedback $feedback)
    {
        //
    }
}
