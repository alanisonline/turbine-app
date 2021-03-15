<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Component;

class Turbine extends Model
{
    use HasFactory;

    /**
     * @var Component[] $components
     */
    private $components = [];

    /** @var int $id  */
    private $id = 0;

    /**
     * @param int $numberOfComponents
     * @param int $id
     */
    public function __construct(int $numberOfComponents = 100, int $id = 0)
    {
        $this->id = $id;
    
        $y = 1;
        while ($y <= $numberOfComponents) {
            $component = new Component($y, $this->id);
            if ($y%3 == 0) {
                $component->recordDamage("Coating Damage");
            }
            if ($y%5 == 0) {
                $component->recordDamage("Lightning Damage");
            }
            
            array_push($this->components, $component);
            $y++;
        }
    }

    public function getReport() {
        $report = [];
        if(count($this->components) < 1) return;
        foreach($this->components as $component) {
            if (empty($component->getDamages())) {
                array_push($report, $component->getId());
            } else {
                array_push($report, $component->getDamages());
            }
        }
        return $report;
        $componentId = $component->getId();
        $damages = implode(' and ', ["test", "ing"]);
        return ["{$componentId} => {$damages}"];
    }
}
