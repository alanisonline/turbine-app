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
        $this->generateReport($numberOfComponents);
    }


    /**
     * @param int $numberOfComponents
     */
    private function generateReport(int $numberOfComponents)
    {
        $y = 1;
        while ($y <= $numberOfComponents) {
            $component = new Component($y, $this->id);
            if ($y % 3 === 0) {
                $component->recordDamage("Coating Damage");
            }
            if ($y % 5 === 0) {
                $component->recordDamage("Lightning Damage");
            }

            array_push($this->components, $component);
            $y++;
        }
    }

    /**
     * @return string
     */
    public function report()
    {
        $report = [];
        if (empty($this->components)) return;
        foreach ($this->components as $component) {
            if ($component->hasDamage()) {
                array_push($report, $component->damagesAsString());
            } else {
                array_push($report, "{$component->getId()}");
            }
        }
        return json_encode($report);
    }
}
