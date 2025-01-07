<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    // public $metaTitle = 'Default title';
    // public $metaDescription = 'Default meta';

    public function __construct(
        public string $metaTitle = 'Default title',
        public string $metaDescription = 'Defalut Description'
    ) {}
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
