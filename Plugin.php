<?php

namespace Kanboard\Plugin\Theme;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:layout:head', 'theme:layout/head');
        $this->template->hook->attach('template:layout:top', 'theme:layout/top');
        $this->template->setTemplateOverride('header', 'theme:layout/header');
    }
}
