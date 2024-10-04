<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Integer;

class SpecTable extends Component
{
    private array $specifications;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $specFileName,
        public string $id
    ) {
        $this->specifications = json_decode(
            Storage::disk("local")->get($specFileName)
        );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.spec-table', ["specifications" => $this->specifications]);
    }
}
