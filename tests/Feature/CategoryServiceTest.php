<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_success(): void
    {
        $service = new CategoryService();
        $this->expectNotToPerformAssertions();

        $service->create(
            [
                'name' => 'Banyuwangi'
            ]
        );
    }


    public function test_findAll_success()
    {
        $service = new CategoryService();
        $response = $service->findAll();
        self::assertNotEmpty($response);
    }

    public function test_update_success()
    {
        $service = new CategoryService();
        $this->expectNotToPerformAssertions();

        $place = Category::create(
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
        $service = new CategoryService();
        $this->expectNotToPerformAssertions();

        $place = Category::create(
            ['name' => 'Banyuwangi Kota']
        );

        $service->delete(
            $place->id
        );
    }
}
