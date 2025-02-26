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
    class SortedLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\SortedLinks::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\SortedLinks::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\SortedLinks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('links', $data)) {
                $values = [];
                foreach ($data['links'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setLinks($values);
                unset($data['links']);
            }
            if (\array_key_exists('sorted_links', $data)) {
                $values_2 = [];
                foreach ($data['sorted_links'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Bitly\Model\ClickLink::class, 'json', $context);
                }
                $object->setSortedLinks($values_2);
                unset($data['sorted_links']);
            }
            foreach ($data as $key_1 => $value_3) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['links'] = $values;
            }
            if ($object->isInitialized('sortedLinks') && null !== $object->getSortedLinks()) {
                $values_2 = [];
                foreach ($object->getSortedLinks() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['sorted_links'] = $values_2;
            }
            foreach ($object as $key_1 => $value_3) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\SortedLinks::class => false];
        }
    }
} else {
    class SortedLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\SortedLinks::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\SortedLinks::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\SortedLinks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('links', $data)) {
                $values = [];
                foreach ($data['links'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setLinks($values);
                unset($data['links']);
            }
            if (\array_key_exists('sorted_links', $data)) {
                $values_2 = [];
                foreach ($data['sorted_links'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Bitly\Model\ClickLink::class, 'json', $context);
                }
                $object->setSortedLinks($values_2);
                unset($data['sorted_links']);
            }
            foreach ($data as $key_1 => $value_3) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_3;
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
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['links'] = $values;
            }
            if ($object->isInitialized('sortedLinks') && null !== $object->getSortedLinks()) {
                $values_2 = [];
                foreach ($object->getSortedLinks() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['sorted_links'] = $values_2;
            }
            foreach ($object as $key_1 => $value_3) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\SortedLinks::class => false];
        }
    }
}
