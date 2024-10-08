<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Json;

class HeatpumpProduct extends Model
{
    private const IMAGES_FOLDER = "/images/";

    public static function fromFile(string $name): Collection
    {
        // $data = json_decode(Storage::disk("local")->get($name), associative:True);
        $data = Json::decode(Storage::disk("local")->get($name));
        $create = fn($item) => new HeatpumpProduct( (array) $item);
        return new Collection(array_map($create, $data));
    }

    public function __construct(array $attributes)
    {
        $this->name = $attributes['name'];
        $this->description = $attributes['description'];
        $this->image = $this::IMAGES_FOLDER.$attributes['image'];
        $this->details = $attributes['details'] ?? null;
        $this->bulletpoints = $attributes['bulletpoints'] ?? [];
    }
}
