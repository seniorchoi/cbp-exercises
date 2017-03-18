<?php

class delivery
{
    protected $address = null;
    protected $is_sent  = false;
    protected $sent_at = null;
    protected $is_delivered = false;
    protected $delivered_at = null;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function getPrice()
    {
        // ternary operator
        return $this->address->isLocal() ? 0 : 8.99;

        // also fine
        if($this->address->isLocal())
        {
            return 0;
        }
        else
        {
            return 8.99;
        }
    }

    public function send()
    {
        $this->is_sent = true;
        $this->sent_at = date('Y-m-d H:i:s');
    }

    public function delivered($datetime)
    {
        $this->is_delivered = true;
        $this->delivered_at = $datetime;
    }
}