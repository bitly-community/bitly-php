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
    class QRCodeSpecSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCodeSpecSettings::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCodeSpecSettings::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCodeSpecSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('error_correction', $data)) {
                $object->setErrorCorrection($data['error_correction']);
                unset($data['error_correction']);
            }
            if (\array_key_exists('mask', $data)) {
                $object->setMask($data['mask']);
                unset($data['mask']);
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
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['version'] = $object->getVersion();
            }
            if ($object->isInitialized('errorCorrection') && null !== $object->getErrorCorrection()) {
                $data['error_correction'] = $object->getErrorCorrection();
            }
            if ($object->isInitialized('mask') && null !== $object->getMask()) {
                $data['mask'] = $object->getMask();
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
            return [\Bitly\Model\QRCodeSpecSettings::class => false];
        }
    }
} else {
    class QRCodeSpecSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCodeSpecSettings::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCodeSpecSettings::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCodeSpecSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('error_correction', $data)) {
                $object->setErrorCorrection($data['error_correction']);
                unset($data['error_correction']);
            }
            if (\array_key_exists('mask', $data)) {
                $object->setMask($data['mask']);
                unset($data['mask']);
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
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['version'] = $object->getVersion();
            }
            if ($object->isInitialized('errorCorrection') && null !== $object->getErrorCorrection()) {
                $data['error_correction'] = $object->getErrorCorrection();
            }
            if ($object->isInitialized('mask') && null !== $object->getMask()) {
                $data['mask'] = $object->getMask();
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
            return [\Bitly\Model\QRCodeSpecSettings::class => false];
        }
    }
}
