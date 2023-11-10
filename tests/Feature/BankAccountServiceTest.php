<?php



use App\Models\BankAccount;
use App\Services\BankAccountService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class BankAccountServiceTest extends TestCase
{
    public function test_create_success(): void
    {
        $service = new BankAccountService();
        $this->expectNotToPerformAssertions();

        $service->create(
            [
                'account_number' => 'Banyuwangi'
            ]
        );
    }


    public function test_findAll_success()
    {
        $service = new BankAccountService();
        $response = $service->findAll();
        self::assertNotEmpty($response);
    }

    public function test_update_success()
    {
        $service = new BankAccountService();
        $this->expectNotToPerformAssertions();

        $place = BankAccount::create(
            ['account_number' => 'Banyuwangi Kota']
        );

        $service->update(
            [
                'account_number' => Str::random(5)
            ],
            $place->id
        );

    }

    public function test_delete_success()
    {
        $service = new BankAccountService();
        $this->expectNotToPerformAssertions();

        $place = BankAccount::create(
            ['account_number' => 'Banyuwangi Kota']
        );

        $service->delete(
            $place->id
        );
    }
}
