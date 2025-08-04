<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Employee;

class StoreEmployeeTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_stores_a_new_employee()
    {
        $response = $this->post('/employees', [
            'firstname'       => 'Jane',
            'middle_initial'  => 'A',
            'lastname'        => 'Doe',
            'role'            => 'Stylist',
            'rate'            => 30.00,
            'date_hired'      => now()->toDateString(),
        ]);

        $response->assertRedirect(route('employees.index'));
        $this->assertDatabaseHas('employees', ['firstname' => 'Jane']);
    }

    /** @test */
    public function it_does_not_allow_duplicate_employee()
    {
        Employee::factory()->create([
            'firstname'      => 'Jane',
            'middle_initial' => 'A',
            'lastname'       => 'Doe',
        ]);

        $response = $this->post('/employees', [
            'firstname'       => 'Jane',
            'middle_initial'  => 'A',
            'lastname'        => 'Doe',
            'role'            => 'Stylist',
            'rate'            => 30.00,
            'date_hired'      => now()->toDateString(),
        ]);

        $response->assertSessionHasErrors('employee_exists');
    }
}
