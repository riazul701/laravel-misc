<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InternetsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInternetsCreation()
    {
        $safeEmail = 'lyric.heidenreich@example.org';
        $domainName = 'rice.com';
        $url = 'http://wintheiser.net/est-unde-nam-vel-non-eos-porro-sunt-rerum';
        $ipv6 = '2626:5d6c:6597:1361:7106:5baa:def4:4270';

        $this->assertDatabaseHas('internets', [
            'safeEmail' => $safeEmail,
            'domainName' => $domainName,
            'url' => $url,
            'ipv6' => $ipv6,
        ]);
    }
}
