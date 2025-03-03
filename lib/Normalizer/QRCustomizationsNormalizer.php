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
    class QRCustomizationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCustomizations::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCustomizations::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCustomizations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('color', $data)) {
                $object->setColor($data['color']);
                unset($data['color']);
            }
            if (\array_key_exists('exclude_bitly_logo', $data)) {
                $object->setExcludeBitlyLogo($data['exclude_bitly_logo']);
                unset($data['exclude_bitly_logo']);
            }
            if (\array_key_exists('image_format', $data)) {
                $object->setImageFormat($data['image_format']);
                unset($data['image_format']);
            }
            if (\array_key_exists('logo_image_guid', $data)) {
                $object->setLogoImageGuid($data['logo_image_guid']);
                unset($data['logo_image_guid']);
            }
            if (\array_key_exists('is_hidden', $data)) {
                $object->setIsHidden($data['is_hidden']);
                unset($data['is_hidden']);
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
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('excludeBitlyLogo') && null !== $object->getExcludeBitlyLogo()) {
                $data['exclude_bitly_logo'] = $object->getExcludeBitlyLogo();
            }
            if ($object->isInitialized('imageFormat') && null !== $object->getImageFormat()) {
                $data['image_format'] = $object->getImageFormat();
            }
            if ($object->isInitialized('logoImageGuid') && null !== $object->getLogoImageGuid()) {
                $data['logo_image_guid'] = $object->getLogoImageGuid();
            }
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
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
            return [\Bitly\Model\QRCustomizations::class => false];
        }
    }
} else {
    class QRCustomizationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCustomizations::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCustomizations::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCustomizations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('color', $data)) {
                $object->setColor($data['color']);
                unset($data['color']);
            }
            if (\array_key_exists('exclude_bitly_logo', $data)) {
                $object->setExcludeBitlyLogo($data['exclude_bitly_logo']);
                unset($data['exclude_bitly_logo']);
            }
            if (\array_key_exists('image_format', $data)) {
                $object->setImageFormat($data['image_format']);
                unset($data['image_format']);
            }
            if (\array_key_exists('logo_image_guid', $data)) {
                $object->setLogoImageGuid($data['logo_image_guid']);
                unset($data['logo_image_guid']);
            }
            if (\array_key_exists('is_hidden', $data)) {
                $object->setIsHidden($data['is_hidden']);
                unset($data['is_hidden']);
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
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('excludeBitlyLogo') && null !== $object->getExcludeBitlyLogo()) {
                $data['exclude_bitly_logo'] = $object->getExcludeBitlyLogo();
            }
            if ($object->isInitialized('imageFormat') && null !== $object->getImageFormat()) {
                $data['image_format'] = $object->getImageFormat();
            }
            if ($object->isInitialized('logoImageGuid') && null !== $object->getLogoImageGuid()) {
                $data['logo_image_guid'] = $object->getLogoImageGuid();
            }
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
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
            return [\Bitly\Model\QRCustomizations::class => false];
        }
    }
}
