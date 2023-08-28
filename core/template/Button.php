<?php

namespace template;

use SergiX44\Nutgram\Nutgram;

class Button
{
    const TextType = "text";
    const ButtonType = "button";
    const LinkType = "link";

    protected $text;
    protected $type;
    protected $data;
    protected $mailingId;

    protected $action;

    public function __construct($type, $action, $text)
    {
        $this->type = $type;
        $this->action = $action;
        $this->text = $text;
    }

    public function GetText()
    {
        return $this->text;
    }

    public function GetType()
    {
        return $this->type;
    }

    public function SetData($newData)
    {
        $this->data = $newData;
    }

    public function GetData()
    {
        return $this->data;
    }

    public function SetMailingId($newMailingId)
    {
        $this->mailingId = $newMailingId;
    }

    public function PrepareToSend(): array
    {
        $replyMarkup = [
            'text' => $this->text,
        ];

        switch ($this->type) {
            case self::LinkType:
                $replyMarkup["url"] = $this->data;
                break;
            case self::TextType:
                $replyMarkup["callback_data"] = "/usermailing_answer $this->mailingId $this->data";
                break;
            case self::ButtonType:
                $replyMarkup["callback_data"] = "$this->data";
                break;
        }

        return [$replyMarkup];
    }
}