<?php

namespace Tests\Feature;

use App\Models\TypeDestination;
use App\Services\TypeDestinationService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertNotEmpty;

class TypeDestinationServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_success(): void
    {
        $service = new TypeDestinationService();
        $this->expectNotToPerformAssertions();

        $service->create(
            [
                'name' => 'Banyuwangi'
            ]
        );
    }


    public function test_findAll_success()
    {
        $service = new TypeDestinationService();
        $response = $service->findAll();
        assertNotEmpty($response);
    }

    public function test_update_success()
    {
        $service = new TypeDestinationService();
        $this->expectNotToPerformAssertions();

        $place = TypeDestination::create(
            ['name' => 'Banyuwangi Kota']
        );

        $service->update(
            [
                'name' => 'Banyuwangi jaya'
            ],
            $place->id
        );

    }

    public function test_delete_success()
    {
        $service = new TypeDestinationService();
        $this->expectNotToPerformAssertions();

        $place = TypeDestination::create(
            ['name' => 'Banyuwangi Kota']
        );

        $service->delete(
            $place->id
        );
    }
}
