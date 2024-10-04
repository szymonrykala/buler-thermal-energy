<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;



class BusinessPartners extends Component
{

    private array $allowed_businesses = [];
    public array $partners = [];

    const FILE = "data/partners.json";


    public function __construct(
        public string $business
    ) {
        $this->load_configuration();

        if (!in_array($business, $this->allowed_businesses)) {
            Log::warning("'$business' is not included in allowed businesses");
        }

        if ($business !== "all") {
            $this->partners = array_filter($this->partners, fn($item) => in_array($business, $item->businesses));
        }
    }

    private function load_configuration()
    {
        $data = json_decode(
            Storage::disk("local")->get($this::FILE)
        );

        $this->allowed_businesses = $data->business;
        $this->partners = $data->partners;
    }

    public function render(): View|Closure|string
    {
        return view('components.business-partners');
    }
}
