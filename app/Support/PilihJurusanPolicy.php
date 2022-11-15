<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy;
use Illuminate\Http\Request;
use Spatie\Csp\Keyword;
use Symfony\Component\HttpFoundation\Response;

class PilihJurusanPolicy extends Policy
{
    public function configure()
    {
        // Base Directives
        $this
            ->addDirective(Directive::BASE, Keyword::SELF)
            ->addDirective(Directive::CONNECT, Keyword::SELF)
            ->addDirective(Directive::DEFAULT, Keyword::SELF)
            ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
            ->addDirective(Directive::IMG, [Keyword::SELF, 'source.unsplash.com', 'images.unsplash.com'])
            ->addDirective(Directive::MEDIA, Keyword::SELF)
            ->addDirective(Directive::OBJECT, Keyword::NONE)
            ->addDirective(Directive::SCRIPT, [Keyword::SELF, 'unsafe-eval'])
            ->addDirective(Directive::STYLE, [Keyword::SELF, 'fonts.googleapis.com'])
            ->addDirective(Directive::FONT, 'fonts.gstatic.com')
            ->addNonceForDirective(Directive::SCRIPT)
            ->addNonceForDirective(Directive::STYLE);
        // Local Directives
        if (config('app.env') == 'local') {
            $host = preg_replace("(^https?://)", "", config('app.url'));
            $this
                ->addDirective(Directive::CONNECT, "wss://$host:5173")
                ->addDirective(Directive::STYLE, ["$host:5173",])
                ->addDirective(Directive::IMG, ["$host:5173",])
                ->addDirective(Directive::SCRIPT, ["$host:5173"]);
        }
    }

    public function shouldBeApplied(Request $request, Response $response): bool
    {
        if (config('app.debug') && ($response->isClientError() || $response->isServerError())) {
            return false;
        }

        return parent::shouldBeApplied($request, $response);
    }
}
