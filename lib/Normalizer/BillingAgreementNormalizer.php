<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Normalizer;

use Bitly\Runtime\Normalizer\CheckArray;
use Bitly\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BillingAgreementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\BillingAgreement::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\BillingAgreement::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\BillingAgreement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('payer', $data)) {
            $object->setPayer($this->denormalizer->denormalize($data['payer'], \Bitly\Model\Payer::class, 'json', $context));
            unset($data['payer']);
        }
        if (\array_key_exists('shipping_address', $data)) {
            $object->setShippingAddress($this->denormalizer->denormalize($data['shipping_address'], \Bitly\Model\Address::class, 'json', $context));
            unset($data['shipping_address']);
        }
        if (\array_key_exists('create_time', $data)) {
            $object->setCreateTime($data['create_time']);
            unset($data['create_time']);
        }
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
            unset($data['update_time']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['state'] = $data->getState();
        }
        if ($data->isInitialized('payer') && null !== $data->getPayer()) {
            $dataArray['payer'] = $this->normalizer->normalize($data->getPayer(), 'json', $context);
        }
        if ($data->isInitialized('shippingAddress') && null !== $data->getShippingAddress()) {
            $dataArray['shipping_address'] = $this->normalizer->normalize($data->getShippingAddress(), 'json', $context);
        }
        if ($data->isInitialized('createTime') && null !== $data->getCreateTime()) {
            $dataArray['create_time'] = $data->getCreateTime();
        }
        if ($data->isInitialized('updateTime') && null !== $data->getUpdateTime()) {
            $dataArray['update_time'] = $data->getUpdateTime();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\BillingAgreement::class => false];
    }
}
