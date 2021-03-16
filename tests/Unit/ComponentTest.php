<?php

namespace Tests\Unit;

use App\Models\Component;
use PHPUnit\Framework\TestCase;

class ComponentTest extends TestCase
{
/**
     * @return void
     */
    public function test_correct_id_is_returned()
    {
        $this->assertEquals(100, (new Component(100, 57))->getId());
    }

    /**
     * @return void
     */
    public function test_id_can_be_set_with_numeric_string()
    {
        $this->assertEquals(100, (new Component("100", 57))->getId());
    }

    /**
     * @return void
     */
    public function test_turbine_id_is_set()
    {
        $this->assertEquals(40, (new Component(30, 40))->getTurbineId());
    }
    
    /**
     * @return void
     */
    public function test_has_damage_will_return_false_if_empty()
    {
        $this->assertFalse((new Component(1, 1))->hasDamage());
    }

    /**
     * @return void
     */
    public function test_has_damage_will_return_true_if_damages_is_not_empty()
    {
        $component = new Component(1, 1);
        $component->recordDamage("Test Damage");
        $this->assertTrue($component->hasDamage());
    }

    /**
     * @return void
     */
    public function test_check_that_damages_as_string_are_correctly_joined() {
        $component = new Component(1, 1);
        $component->recordDamage("Test Damage");
        $component->recordDamage("Light Sabre Damage");
        $this->assertEquals("Test Damage and Light Sabre Damage", $component->damagesAsString());

    }
}
