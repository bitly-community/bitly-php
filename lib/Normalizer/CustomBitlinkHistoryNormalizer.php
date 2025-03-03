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
    class CustomBitlinkHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CustomBitlinkHistory::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CustomBitlinkHistory::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CustomBitlinkHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uuid', $data)) {
                $object->setUuid($data['uuid']);
                unset($data['uuid']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('bsd', $data)) {
                $object->setBsd($data['bsd']);
                unset($data['bsd']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('first_created', $data)) {
                $object->setFirstCreated($data['first_created']);
                unset($data['first_created']);
            }
            if (\array_key_exists('deactivated', $data)) {
                $object->setDeactivated($data['deactivated']);
                unset($data['deactivated']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
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
            if ($object->isInitialized('uuid') && null !== $object->getUuid()) {
                $data['uuid'] = $object->getUuid();
            }
            if ($object->isInitialized('groupGuid') && null !== $object->getGroupGuid()) {
                $data['group_guid'] = $object->getGroupGuid();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('bsd') && null !== $object->getBsd()) {
                $data['bsd'] = $object->getBsd();
            }
            if ($object->isInitialized('hash') && null !== $object->getHash()) {
                $data['hash'] = $object->getHash();
            }
            if ($object->isInitialized('login') && null !== $object->getLogin()) {
                $data['login'] = $object->getLogin();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('firstCreated') && null !== $object->getFirstCreated()) {
                $data['first_created'] = $object->getFirstCreated();
            }
            if ($object->isInitialized('deactivated') && null !== $object->getDeactivated()) {
                $data['deactivated'] = $object->getDeactivated();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
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
            return [\Bitly\Model\CustomBitlinkHistory::class => false];
        }
    }
} else {
    class CustomBitlinkHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CustomBitlinkHistory::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CustomBitlinkHistory::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CustomBitlinkHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uuid', $data)) {
                $object->setUuid($data['uuid']);
                unset($data['uuid']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('bsd', $data)) {
                $object->setBsd($data['bsd']);
                unset($data['bsd']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('first_created', $data)) {
                $object->setFirstCreated($data['first_created']);
                unset($data['first_created']);
            }
            if (\array_key_exists('deactivated', $data)) {
                $object->setDeactivated($data['deactivated']);
                unset($data['deactivated']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
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
            if ($object->isInitialized('uuid') && null !== $object->getUuid()) {
                $data['uuid'] = $object->getUuid();
            }
            if ($object->isInitialized('groupGuid') && null !== $object->getGroupGuid()) {
                $data['group_guid'] = $object->getGroupGuid();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('bsd') && null !== $object->getBsd()) {
                $data['bsd'] = $object->getBsd();
            }
            if ($object->isInitialized('hash') && null !== $object->getHash()) {
                $data['hash'] = $object->getHash();
            }
            if ($object->isInitialized('login') && null !== $object->getLogin()) {
                $data['login'] = $object->getLogin();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('firstCreated') && null !== $object->getFirstCreated()) {
                $data['first_created'] = $object->getFirstCreated();
            }
            if ($object->isInitialized('deactivated') && null !== $object->getDeactivated()) {
                $data['deactivated'] = $object->getDeactivated();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
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
            return [\Bitly\Model\CustomBitlinkHistory::class => false];
        }
    }
}
