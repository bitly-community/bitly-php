<?php

declare(strict_types=1);

use Bitly\Bitly;
use Bitly\Client;
use Bitly\Exception\ApiException;
use Bitly\Model\Pet;

it('gets client from Bitly class', function (): void {
    $bitly = new Bitly('API_KEY', 'https://petstore.swagger.io');
    $client = $bitly->client;
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'addPet'))->toBeTrue();
});

it('gets client from Client::create', function (): void {
    $client = Client::create();
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'addPet'))->toBeTrue();
});

it('adds pet', function (): void {
    $bitly = new Bitly('API_KEY');
    $pet = new Pet();
    $pet->setName('Neo');
    $pet->setPhotoUrls(['https://placecats.com/neo/300/200']);
    $response = $bitly->client->addPet($pet);
    expect($response)->toBe(null);
});

it('gets pet not found', function (): void {
    try {
        $bitly = new Bitly('API_KEY');
        $bitly->client->getPetById(0);
    } catch (Throwable $throwable) {
        expect($throwable)->toBeInstanceOf(ApiException::class);
        expect($throwable->getMessage())->toBe('Pet not found');
        expect($throwable->getCode())->toBe(404);
    }
});
