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
    class PaginatedAnalyticsReportsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\PaginatedAnalyticsReports::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\PaginatedAnalyticsReports::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\PaginatedAnalyticsReports();
            if (\array_key_exists('page', $data) && \is_int($data['page'])) {
                $data['page'] = (float) $data['page'];
            }
            if (\array_key_exists('size', $data) && \is_int($data['size'])) {
                $data['size'] = (float) $data['size'];
            }
            if (\array_key_exists('total_found', $data) && \is_int($data['total_found'])) {
                $data['total_found'] = (float) $data['total_found'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('page', $data)) {
                $object->setPage($data['page']);
                unset($data['page']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('total_found', $data)) {
                $object->setTotalFound($data['total_found']);
                unset($data['total_found']);
            }
            if (\array_key_exists('reports', $data)) {
                $values = [];
                foreach ($data['reports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\AnalyticsReport::class, 'json', $context);
                }
                $object->setReports($values);
                unset($data['reports']);
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
            if ($object->isInitialized('page') && null !== $object->getPage()) {
                $data['page'] = $object->getPage();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('totalFound') && null !== $object->getTotalFound()) {
                $data['total_found'] = $object->getTotalFound();
            }
            if ($object->isInitialized('reports') && null !== $object->getReports()) {
                $values = [];
                foreach ($object->getReports() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['reports'] = $values;
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
            return [\Bitly\Model\PaginatedAnalyticsReports::class => false];
        }
    }
} else {
    class PaginatedAnalyticsReportsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\PaginatedAnalyticsReports::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\PaginatedAnalyticsReports::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\PaginatedAnalyticsReports();
            if (\array_key_exists('page', $data) && \is_int($data['page'])) {
                $data['page'] = (float) $data['page'];
            }
            if (\array_key_exists('size', $data) && \is_int($data['size'])) {
                $data['size'] = (float) $data['size'];
            }
            if (\array_key_exists('total_found', $data) && \is_int($data['total_found'])) {
                $data['total_found'] = (float) $data['total_found'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('page', $data)) {
                $object->setPage($data['page']);
                unset($data['page']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('total_found', $data)) {
                $object->setTotalFound($data['total_found']);
                unset($data['total_found']);
            }
            if (\array_key_exists('reports', $data)) {
                $values = [];
                foreach ($data['reports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\AnalyticsReport::class, 'json', $context);
                }
                $object->setReports($values);
                unset($data['reports']);
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
            if ($object->isInitialized('page') && null !== $object->getPage()) {
                $data['page'] = $object->getPage();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('totalFound') && null !== $object->getTotalFound()) {
                $data['total_found'] = $object->getTotalFound();
            }
            if ($object->isInitialized('reports') && null !== $object->getReports()) {
                $values = [];
                foreach ($object->getReports() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['reports'] = $values;
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
            return [\Bitly\Model\PaginatedAnalyticsReports::class => false];
        }
    }
}
