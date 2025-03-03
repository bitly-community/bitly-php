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
    class FullQRCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\FullQRCode::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\FullQRCode::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\FullQRCode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('customization', $data)) {
                $object->setCustomization($this->denormalizer->denormalize($data['customization'], \Bitly\Model\QRCustomizations::class, 'json', $context));
                unset($data['customization']);
            }
            if (\array_key_exists('qr_code', $data)) {
                $object->setQrCode($data['qr_code']);
                unset($data['qr_code']);
            }
            if (\array_key_exists('logo_image_url', $data)) {
                $object->setLogoImageUrl($data['logo_image_url']);
                unset($data['logo_image_url']);
            }
            if (\array_key_exists('is_customized', $data)) {
                $object->setIsCustomized($data['is_customized']);
                unset($data['is_customized']);
            }
            if (\array_key_exists('is_hidden', $data)) {
                $object->setIsHidden($data['is_hidden']);
                unset($data['is_hidden']);
            }
            if (\array_key_exists('has_stored', $data)) {
                $object->setHasStored($data['has_stored']);
                unset($data['has_stored']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('modified', $data)) {
                $object->setModified($data['modified']);
                unset($data['modified']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('link') && null !== $object->getLink()) {
                $data['link'] = $object->getLink();
            }
            if ($object->isInitialized('groupGuid') && null !== $object->getGroupGuid()) {
                $data['group_guid'] = $object->getGroupGuid();
            }
            if ($object->isInitialized('customization') && null !== $object->getCustomization()) {
                $data['customization'] = $this->normalizer->normalize($object->getCustomization(), 'json', $context);
            }
            if ($object->isInitialized('qrCode') && null !== $object->getQrCode()) {
                $data['qr_code'] = $object->getQrCode();
            }
            if ($object->isInitialized('logoImageUrl') && null !== $object->getLogoImageUrl()) {
                $data['logo_image_url'] = $object->getLogoImageUrl();
            }
            if ($object->isInitialized('isCustomized') && null !== $object->getIsCustomized()) {
                $data['is_customized'] = $object->getIsCustomized();
            }
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
            }
            if ($object->isInitialized('hasStored') && null !== $object->getHasStored()) {
                $data['has_stored'] = $object->getHasStored();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('modified') && null !== $object->getModified()) {
                $data['modified'] = $object->getModified();
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
            return [\Bitly\Model\FullQRCode::class => false];
        }
    }
} else {
    class FullQRCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\FullQRCode::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\FullQRCode::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\FullQRCode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('customization', $data)) {
                $object->setCustomization($this->denormalizer->denormalize($data['customization'], \Bitly\Model\QRCustomizations::class, 'json', $context));
                unset($data['customization']);
            }
            if (\array_key_exists('qr_code', $data)) {
                $object->setQrCode($data['qr_code']);
                unset($data['qr_code']);
            }
            if (\array_key_exists('logo_image_url', $data)) {
                $object->setLogoImageUrl($data['logo_image_url']);
                unset($data['logo_image_url']);
            }
            if (\array_key_exists('is_customized', $data)) {
                $object->setIsCustomized($data['is_customized']);
                unset($data['is_customized']);
            }
            if (\array_key_exists('is_hidden', $data)) {
                $object->setIsHidden($data['is_hidden']);
                unset($data['is_hidden']);
            }
            if (\array_key_exists('has_stored', $data)) {
                $object->setHasStored($data['has_stored']);
                unset($data['has_stored']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('modified', $data)) {
                $object->setModified($data['modified']);
                unset($data['modified']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('link') && null !== $object->getLink()) {
                $data['link'] = $object->getLink();
            }
            if ($object->isInitialized('groupGuid') && null !== $object->getGroupGuid()) {
                $data['group_guid'] = $object->getGroupGuid();
            }
            if ($object->isInitialized('customization') && null !== $object->getCustomization()) {
                $data['customization'] = $this->normalizer->normalize($object->getCustomization(), 'json', $context);
            }
            if ($object->isInitialized('qrCode') && null !== $object->getQrCode()) {
                $data['qr_code'] = $object->getQrCode();
            }
            if ($object->isInitialized('logoImageUrl') && null !== $object->getLogoImageUrl()) {
                $data['logo_image_url'] = $object->getLogoImageUrl();
            }
            if ($object->isInitialized('isCustomized') && null !== $object->getIsCustomized()) {
                $data['is_customized'] = $object->getIsCustomized();
            }
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
            }
            if ($object->isInitialized('hasStored') && null !== $object->getHasStored()) {
                $data['has_stored'] = $object->getHasStored();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('modified') && null !== $object->getModified()) {
                $data['modified'] = $object->getModified();
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
            return [\Bitly\Model\FullQRCode::class => false];
        }
    }
}
