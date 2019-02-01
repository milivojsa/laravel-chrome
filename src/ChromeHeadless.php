<?php

namespace ChromeHeadless\Laravel;

use ChromeHeadless\ChromeHeadless as ChromeHeadlessPHP;

class ChromeHeadless extends ChromeHeadlessPHP
{
    public function __construct()
    {
        if (config('chrome.exec_path')) {
            $this->setChromePath(config('chrome.exec_path'));
        }

        if (config('chrome.user_agent')) {
            $this->setUserAgent(config('chrome.user_agent'));
        }

        if (config('chrome.blacklist')) {
            $this->setBlacklist(config('chrome.blacklist'));
        }

        if (config('chrome.headers')) {
            $this->setHeaders(config('chrome.headers'));
        }

        if (config('chrome.viewport')) {
            $this->setViewport(config('chrome.viewport'));
        }

        if (config('chrome.timeout')) {
            $this->setTimeout(config('chrome.timeout'));
        }
    }
}
