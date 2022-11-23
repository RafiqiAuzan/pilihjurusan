<?php

namespace App\View\Components\Layouts;

use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Illuminate\View\Component;

class Base extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $description = null, $keywords = null, MetaInterface $meta = null)
    {
        $meta->prependTitle($title)
            ->setDescription($description)
            ->setKeywords($keywords)
            ->setCharset()
            ->setViewPort('width=device-width, initial-scale=1');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.base');
    }
}
