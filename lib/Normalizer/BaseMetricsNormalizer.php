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

class BaseMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\BaseMetrics::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\BaseMetrics::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\BaseMetrics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('unit', $data)) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        }
        if (\array_key_exists('units', $data)) {
            $object->setUnits($data['units']);
            unset($data['units']);
        }
        if (\array_key_exists('facet', $data)) {
            $object->setFacet($data['facet']);
            unset($data['facet']);
        }
        if (\array_key_exists('unit_reference', $data)) {
            $object->setUnitReference($data['unit_reference']);
            unset($data['unit_reference']);
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
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('units') && null !== $data->getUnits()) {
            $dataArray['units'] = $data->getUnits();
        }
        if ($data->isInitialized('facet') && null !== $data->getFacet()) {
            $dataArray['facet'] = $data->getFacet();
        }
        if ($data->isInitialized('unitReference') && null !== $data->getUnitReference()) {
            $dataArray['unit_reference'] = $data->getUnitReference();
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
        return [\Bitly\Model\BaseMetrics::class => false];
    }
}
