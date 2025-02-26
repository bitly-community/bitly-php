<?php

declare(strict_types=1);

use Bitly\Bitly;
use Bitly\Client;
use Bitly\Model\Shorten;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Message\Authentication\Bearer;

it('instantiates Bitly client', function (): void {
    $bitly = new Bitly('API_KEY');
    $client = $bitly->client;
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'deleteBitlink'))->toBeTrue();
});

it('instantiates client from Client::create', function (): void {
    $bearer = new Bearer('API_KEY');
    $plugins = [new AuthenticationPlugin($bearer)];
    $client = Client::create(null, $plugins);
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'createFullBitlink'))->toBeTrue();
});

it('creates Bitlink', function (): void {
    $bitly = new Bitly('API_KEY');
    $shorten = new Shorten();
    $shorten->setLongUrl('http://example.com');

    try {
        $bitly->client->createBitlink($shorten);
    } catch (Throwable $exception) {
        expect($exception->getMessage())->toBe('FORBIDDEN');
        expect($exception->getCode())->toBe(403);
    }
});
