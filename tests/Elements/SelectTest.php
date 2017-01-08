<?php

namespace Spatie\Html\Test;

use Spatie\Html\Elements\Select;

class SelectTest extends TestCase
{
    /** @test */
    public function it_can_render_an_empty_version_itself()
    {
        $this->assertHtmlStringEqualsHtmlString('<select></select>', (new Select())->render());
    }

    /** @test */
    public function it_can_be_converted_to_a_string()
    {
        $this->assertHtmlStringEqualsHtmlString('<select></select>', (string) (new Select()));
    }

    /** @test */
    public function it_can_render_options()
    {
        $this->assertHtmlStringEqualsHtmlString('
        <select>
            <option value="option1">value1</option>
        </select>', (new Select())->options(['option1' => 'value1'])->render());
    }
}
