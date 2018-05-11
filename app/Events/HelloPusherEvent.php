<?php

namespace App\Events;

use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use PhpParser\Node\Stmt\TraitUseAdaptation\Precedence;

/**
 * Just implement the ShouldBroadcast interface and Laravel will automatically
 * send it to Pusher once we fire it
 **/
class HelloPusherEvent  implements ShouldBroadcast
{
    use SerializesModels;

    /**
     * Only (!) Public members will be serialized to JSON and sent to Pusher
     **/
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('my-channel');
    }
}