<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Turbine;
use Psy\Exception\TypeErrorException;
use TypeError;

class TurbineTest extends TestCase
{
    /**
     * @return void
     */
    public function test_correct_id_is_returned()
    {
        $this->assertEquals(57, (new Turbine(100, 57))->getId(), "Correct ID has been returned");
    }

    /**
     * @return void
     */
    public function test_id_can_be_set_with_numeric_string()
    {
        $this->assertEquals(57, (new Turbine(100, "57"))->getId());
    }

    /**
     * @return void
     */
    public function test_default_id_is_set()
    {
        $this->assertEquals(0, (new Turbine(100))->getId());
    }
    
    /**
     * @return void
     */
    public function test_report_returns_nothing_when_there_are_no_components()
    {
        $this->assertEquals('', (new Turbine(0))->report());
    }
}
