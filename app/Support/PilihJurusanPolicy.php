<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class PilihJurusanPolicy extends Basic
{
    public function configure()
    {
        parent::configure();
        $this->addDirective(Directive::CONNECT, "wss://piljur.test:5173")
            ->addDirective(Directive::STYLE, [
                "piljur.test:5173",
            ])
            ->addDirective(Directive::SCRIPT, [
                "piljur.test:5173"
            ]);
    }
}
