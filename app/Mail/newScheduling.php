<?php

namespace App\Mail;

use App\Models\Scheduling;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newScheduling extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $scheduling;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $scheduling)
    {
        $this->user = $user;
        $this->scheduling = $scheduling;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("Neway - Agendamento Aprovado ");
        $this->to($this->user->email, $this->user->name);
        return $this->view('mails.newscheduling', [
            'user' => $this->user,
            'scheduling' => $this->scheduling
        ]);
    }
}
