<?php

namespace App\View\Components\import;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Products extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  array<int, array<string, mixed>>  $products
     */
    public function __construct(
        public array $products = [],
        public string $catalogType = 'import',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.import.products');
    }
}
