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

class TierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\Tier::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\Tier::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\Tier();
        if (\array_key_exists('is_self_service', $data) && \is_int($data['is_self_service'])) {
            $data['is_self_service'] = (bool) $data['is_self_service'];
        }
        if (\array_key_exists('is_paid', $data) && \is_int($data['is_paid'])) {
            $data['is_paid'] = (bool) $data['is_paid'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('display_name', $data)) {
            $object->setDisplayName($data['display_name']);
            unset($data['display_name']);
        }
        if (\array_key_exists('price_map', $data)) {
            $object->setPriceMap($this->denormalizer->denormalize($data['price_map'], \Bitly\Model\PriceMap::class, 'json', $context));
            unset($data['price_map']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('family', $data)) {
            $object->setFamily($data['family']);
            unset($data['family']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (\array_key_exists('price_id', $data)) {
            $object->setPriceId($data['price_id']);
            unset($data['price_id']);
        }
        if (\array_key_exists('display_icon', $data)) {
            $object->setDisplayIcon($data['display_icon']);
            unset($data['display_icon']);
        }
        if (\array_key_exists('is_self_service', $data)) {
            $object->setIsSelfService($data['is_self_service']);
            unset($data['is_self_service']);
        }
        if (\array_key_exists('is_paid', $data)) {
            $object->setIsPaid($data['is_paid']);
            unset($data['is_paid']);
        }
        if (\array_key_exists('billing_period_type', $data)) {
            $object->setBillingPeriodType($data['billing_period_type']);
            unset($data['billing_period_type']);
        }
        if (\array_key_exists('sort_order', $data)) {
            $object->setSortOrder($data['sort_order']);
            unset($data['sort_order']);
        }
        if (\array_key_exists('consumable_features', $data)) {
            $values = [];
            foreach ($data['consumable_features'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\DefaultConsumableFeature::class, 'json', $context);
            }
            $object->setConsumableFeatures($values);
            unset($data['consumable_features']);
        }
        if (\array_key_exists('access_features', $data)) {
            $values_1 = [];
            foreach ($data['access_features'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Bitly\Model\DefaultAccessFeature::class, 'json', $context);
            }
            $object->setAccessFeatures($values_1);
            unset($data['access_features']);
        }
        if (\array_key_exists('add_on_settings', $data)) {
            $values_2 = [];
            foreach ($data['add_on_settings'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Bitly\Model\AddOnSetting::class, 'json', $context);
            }
            $object->setAddOnSettings($values_2);
            unset($data['add_on_settings']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['display_name'] = $data->getDisplayName();
        if ($data->isInitialized('priceMap') && null !== $data->getPriceMap()) {
            $dataArray['price_map'] = $this->normalizer->normalize($data->getPriceMap(), 'json', $context);
        }
        $dataArray['description'] = $data->getDescription();
        $dataArray['family'] = $data->getFamily();
        $dataArray['price'] = $data->getPrice();
        if ($data->isInitialized('priceId') && null !== $data->getPriceId()) {
            $dataArray['price_id'] = $data->getPriceId();
        }
        $dataArray['display_icon'] = $data->getDisplayIcon();
        $dataArray['is_self_service'] = $data->getIsSelfService();
        $dataArray['is_paid'] = $data->getIsPaid();
        $dataArray['billing_period_type'] = $data->getBillingPeriodType();
        $dataArray['sort_order'] = $data->getSortOrder();
        $values = [];
        foreach ($data->getConsumableFeatures() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['consumable_features'] = $values;
        $values_1 = [];
        foreach ($data->getAccessFeatures() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['access_features'] = $values_1;
        $values_2 = [];
        foreach ($data->getAddOnSettings() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['add_on_settings'] = $values_2;
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\Tier::class => false];
    }
}
