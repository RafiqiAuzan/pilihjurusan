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
        $styles = [
            Keyword::SELF,
            'https://fonts.googleapis.com/',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css'
        ];
        $scripts = [
            Keyword::SELF,
            'unsafe-eval',
        ];
        $fonts = [
            Keyword::SELF,
            'https://fonts.gstatic.com',
            'https://cdn.jsdelivr.net',
        ];
        $media = [
            Keyword::SELF,
            'https://*.youtube.com',
            'https://youtu.be',
        ];
        $frame = [
            Keyword::SELF,
            'https://*.youtube.com',
            'https://youtu.be',
        ];
        // Base Directives
        $this
            ->addDirective(Directive::BASE, Keyword::SELF)
            ->addDirective(Directive::CONNECT, Keyword::SELF)
            ->addDirective(Directive::DEFAULT, Keyword::SELF)
            ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
            ->addDirective(Directive::IMG, [Keyword::SELF, 'source.unsplash.com', 'images.unsplash.com'])
            ->addDirective(Directive::MEDIA, $media)
            ->addDirective(Directive::FRAME, $frame)
            ->addDirective(Directive::OBJECT, Keyword::NONE)
            ->addDirective(Directive::SCRIPT, $scripts)
            ->addDirective(Directive::STYLE,  $styles)
            ->addDirective(Directive::FONT, $fonts)
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
