<?php

namespace Tests\Services\Development;

use PHPUnit\Framework\TestCase;
use App\Services\Development\DatabaseService;

use function App\Helpers\app;

class DatabaseServiceTest extends TestCase
{
    private DatabaseService $databaseService;

    protected function setUp(): void
    {
        $this->databaseService = app(DatabaseService::class);
    }

    public function test_sample(): void
    {
        $data = $this->databaseService->getTestData();
        $this->assertTrue(is_array($data));
    }
}
