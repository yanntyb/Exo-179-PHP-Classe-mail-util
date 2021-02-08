<?php


class Mail
{
    public string $to;
    public string $subject;
    public string $message;

    /**
     * Mail constructor.
     * @param string $to
     * @param string $subject
     * @param string $message
     */
    public function __construct(string $to,string $subject, string $message)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function send(){
        return mail($this->to,$this->subject,$this->message);
    }


}