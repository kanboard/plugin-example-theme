<?php

namespace Plugin\Theme;

use Core\PluginBase;

class Plugin extends PluginBase
{
    public function initialize()
    {
        $this->template->hook->attach('layout:head', 'theme:layout/head');
        $this->template->hook->attach('layout:top', 'theme:layout/top');
        $this->template->setTemplateOverride('header', 'theme:layout/header');
    }
}
