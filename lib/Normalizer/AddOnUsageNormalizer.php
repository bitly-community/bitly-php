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

class AddOnUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\AddOnUsage::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\AddOnUsage::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\AddOnUsage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount_purchased', $data)) {
            $object->setAmountPurchased($data['amount_purchased']);
            unset($data['amount_purchased']);
        }
        if (\array_key_exists('amount_available_for_purchase', $data)) {
            $object->setAmountAvailableForPurchase($data['amount_available_for_purchase']);
            unset($data['amount_available_for_purchase']);
        }
        if (\array_key_exists('amount_used', $data)) {
            $object->setAmountUsed($data['amount_used']);
            unset($data['amount_used']);
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
        if ($data->isInitialized('amountPurchased') && null !== $data->getAmountPurchased()) {
            $dataArray['amount_purchased'] = $data->getAmountPurchased();
        }
        if ($data->isInitialized('amountAvailableForPurchase') && null !== $data->getAmountAvailableForPurchase()) {
            $dataArray['amount_available_for_purchase'] = $data->getAmountAvailableForPurchase();
        }
        if ($data->isInitialized('amountUsed') && null !== $data->getAmountUsed()) {
            $dataArray['amount_used'] = $data->getAmountUsed();
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
        return [\Bitly\Model\AddOnUsage::class => false];
    }
}
