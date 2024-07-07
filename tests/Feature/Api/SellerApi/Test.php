<?php

use App\Http\Controllers\Api\SellerController;
use App\Models\Seller;

use App\Repositories\SellerRepository;
use Symfony\Component\Console\Output\AnsiColorMode;
use function Pest\Laravel\getJson;

beforeEach(function () {
    $this->sellerRepository = resolve(SellerRepository::class);
});

test('should return 200 ', function () {
    getJson(
        route('/sellers'),
        [
            'Authorization' => 'Bearer ' . $this->token,
        ]
        )->dump()->assertJsonStructure([
            'data'=> [
                '*' => [
                'name',
                'email',
                'permissions' => []
            ]

                ]
                
        ])->assertOK();
});

test('should return 200 - with many users', function () {
    getJson(
        route('/sales'),
        [
            'Authorization' => 'Bearer ' . $this->token,
        ]
        )->dump()->assertJsonStructure([
            'data'=> [
                '*' => [
                'name',
                'email',
                'permissions' => []
      ]

   ]
                
        ])->assertOK();
});
