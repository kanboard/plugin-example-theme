<?php

namespace Plugin\Theme;

use Core\PluginBase;

class Plugin extends PluginBase
{
    public function initialize()
    {
        $this->template->hook->attach('template:layout:head', 'theme:layout/head');
        $this->template->hook->attach('template:layout:top', 'theme:layout/top');
        $this->template->setTemplateOverride('template:header', 'theme:layout/header');
    }
}
