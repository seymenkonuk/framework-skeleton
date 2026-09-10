<?php
// ============================================================================
// File:    ExampleTest.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================

namespace Tests\Feature;


class ExampleTest extends TestCase
{
    public function test_existing_route_returns_200(): void
    {
        $response = $this->get("/");
        $this->assertEquals($response->status(), 200);
    }

    public function test_non_existing_route_returns_404(): void
    {
        $response = $this->get("/not-found");
        $this->assertEquals($response->status(), 404);
    }
}
