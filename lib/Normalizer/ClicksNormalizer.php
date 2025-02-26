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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ClicksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\Clicks::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\Clicks::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\Clicks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('link_clicks', $data)) {
                $values = [];
                foreach ($data['link_clicks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\LinkClicks::class, 'json', $context);
                }
                $object->setLinkClicks($values);
                unset($data['link_clicks']);
            }
            if (\array_key_exists('units', $data)) {
                $object->setUnits($data['units']);
                unset($data['units']);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
                unset($data['unit']);
            }
            if (\array_key_exists('unit_reference', $data)) {
                $object->setUnitReference($data['unit_reference']);
                unset($data['unit_reference']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('linkClicks') && null !== $object->getLinkClicks()) {
                $values = [];
                foreach ($object->getLinkClicks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['link_clicks'] = $values;
            }
            if ($object->isInitialized('units') && null !== $object->getUnits()) {
                $data['units'] = $object->getUnits();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('unitReference') && null !== $object->getUnitReference()) {
                $data['unit_reference'] = $object->getUnitReference();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\Clicks::class => false];
        }
    }
} else {
    class ClicksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\Clicks::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\Clicks::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\Clicks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('link_clicks', $data)) {
                $values = [];
                foreach ($data['link_clicks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\LinkClicks::class, 'json', $context);
                }
                $object->setLinkClicks($values);
                unset($data['link_clicks']);
            }
            if (\array_key_exists('units', $data)) {
                $object->setUnits($data['units']);
                unset($data['units']);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
                unset($data['unit']);
            }
            if (\array_key_exists('unit_reference', $data)) {
                $object->setUnitReference($data['unit_reference']);
                unset($data['unit_reference']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('linkClicks') && null !== $object->getLinkClicks()) {
                $values = [];
                foreach ($object->getLinkClicks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['link_clicks'] = $values;
            }
            if ($object->isInitialized('units') && null !== $object->getUnits()) {
                $data['units'] = $object->getUnits();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('unitReference') && null !== $object->getUnitReference()) {
                $data['unit_reference'] = $object->getUnitReference();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\Clicks::class => false];
        }
    }
}
