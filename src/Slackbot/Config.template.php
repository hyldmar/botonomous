<?php

namespace Slackbot;

class Config extends AbstractConfig
{
    protected static $configs = [
        'endPoint' => 'https://slack.com/api/chat.postMessage',
        'apiToken' => 'YOUR_API_TOKEN',
        'channelName' => '#general',
        'botUsername' => 'YOUR_BOT_USERNAME',
        'outgoingWebhookToken' => 'YOUR_OUTGOING_WEBHOOK_TOKEN',
        'chatLogging' => true,
        'chatLoggingFileName' => 'chat_log.txt',
        'iconURL' => 'YOUR_BOT_ICON_URL_48_BY_48'
    ];
}
