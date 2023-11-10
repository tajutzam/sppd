<?php

namespace Tests\Feature;

use App\Models\Places;
use App\Services\PlacesService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

use function PHPUnit\Framework\assertNotEmpty;
use function PHPUnit\Framework\assertNotNull;

class PlacesServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_success(): void
    {
        $service = new PlacesService();
        $this->expectNotToPerformAssertions();

        $service->create(
            [
                'name' => 'Banyuwangi'
            ]
        );
    }


    public function test_findAll_success()
    {
        $service = new PlacesService();
        $response = $service->findAll();
        assertNotEmpty($response);
    }

    public function test_update_success()
    {
        $service = new PlacesService();
        $this->expectNotToPerformAssertions();

        $place = Places::create(
            ['name' => 'Banyuwangi Kota']
        );

        $service->update(
            [
                'name' => Str::random(5)
            ],
            $place->id
        );

    }

    public function test_delete_success()
    {
        $service = new PlacesService();
        $this->expectNotToPerformAssertions();

        $place = Places::create(
            ['name' => 'Banyuwangi Kota']
        );

        $service->delete(
            $place->id
        );
    }
}
