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
    class SortedButtonsPageViewsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\SortedButtonsPageViewsItem::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\SortedButtonsPageViewsItem::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\SortedButtonsPageViewsItem();
            if (\array_key_exists('views', $data) && \is_int($data['views'])) {
                $data['views'] = (float) $data['views'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('microsite_guid', $data)) {
                $object->setMicrositeGuid($data['microsite_guid']);
                unset($data['microsite_guid']);
            }
            if (\array_key_exists('uri', $data)) {
                $object->setUri($data['uri']);
                unset($data['uri']);
            }
            if (\array_key_exists('views', $data)) {
                $object->setViews($data['views']);
                unset($data['views']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('micrositeGuid') && null !== $object->getMicrositeGuid()) {
                $data['microsite_guid'] = $object->getMicrositeGuid();
            }
            if ($object->isInitialized('uri') && null !== $object->getUri()) {
                $data['uri'] = $object->getUri();
            }
            if ($object->isInitialized('views') && null !== $object->getViews()) {
                $data['views'] = $object->getViews();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\SortedButtonsPageViewsItem::class => false];
        }
    }
} else {
    class SortedButtonsPageViewsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\SortedButtonsPageViewsItem::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\SortedButtonsPageViewsItem::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\SortedButtonsPageViewsItem();
            if (\array_key_exists('views', $data) && \is_int($data['views'])) {
                $data['views'] = (float) $data['views'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('microsite_guid', $data)) {
                $object->setMicrositeGuid($data['microsite_guid']);
                unset($data['microsite_guid']);
            }
            if (\array_key_exists('uri', $data)) {
                $object->setUri($data['uri']);
                unset($data['uri']);
            }
            if (\array_key_exists('views', $data)) {
                $object->setViews($data['views']);
                unset($data['views']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('micrositeGuid') && null !== $object->getMicrositeGuid()) {
                $data['microsite_guid'] = $object->getMicrositeGuid();
            }
            if ($object->isInitialized('uri') && null !== $object->getUri()) {
                $data['uri'] = $object->getUri();
            }
            if ($object->isInitialized('views') && null !== $object->getViews()) {
                $data['views'] = $object->getViews();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\SortedButtonsPageViewsItem::class => false];
        }
    }
}
