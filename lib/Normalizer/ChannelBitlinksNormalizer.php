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

class ChannelBitlinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\ChannelBitlinks::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\ChannelBitlinks::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\ChannelBitlinks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bitlinks', $data)) {
            $values = [];
            foreach ($data['bitlinks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\ChannelBitlink::class, 'json', $context);
            }
            $object->setBitlinks($values);
            unset($data['bitlinks']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
            unset($data['total']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bitlinks') && null !== $data->getBitlinks()) {
            $values = [];
            foreach ($data->getBitlinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['bitlinks'] = $values;
        }
        if ($data->isInitialized('total') && null !== $data->getTotal()) {
            $dataArray['total'] = $data->getTotal();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\ChannelBitlinks::class => false];
    }
}
