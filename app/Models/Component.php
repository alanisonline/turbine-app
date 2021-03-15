<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    /** @var int $id */
    private $id;
    /** @var string[] */
    private $damages = [];
    /** @var int $turbineId */
    private $turbineId;

    /**
     * @param int $id
     * @param int $turbineId
     */
    function __construct(int $id, int $turbineId) {
        $this->id = $id;
        $this->turbineId;
    }

    /**
     * @return int $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $setId
     */
    public function setId(int $id) {
        if ($id instanceof int) {
            $this->id = $id;
        }
    }

    /**
     * @param string $damage
     */
    public function recordDamage(string $damage) {
        if (!empty($damage)) array_push($this->damages, $damage);
    }

    /**
     * @return string
     */
    public function getDamages() {
        return implode(" and ", $this->damages);
    }
}
