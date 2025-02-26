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
    class BillingDowngradeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BillingDowngrade::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BillingDowngrade::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BillingDowngrade();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('tier_name', $data)) {
                $object->setTierName($data['tier_name']);
                unset($data['tier_name']);
            }
            if (\array_key_exists('group_guids', $data)) {
                $values = [];
                foreach ($data['group_guids'] as $value) {
                    $values[] = $value;
                }
                $object->setGroupGuids($values);
                unset($data['group_guids']);
            }
            if (\array_key_exists('microsite_guids', $data)) {
                $values_1 = [];
                foreach ($data['microsite_guids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMicrositeGuids($values_1);
                unset($data['microsite_guids']);
            }
            if (\array_key_exists('users_to_retain', $data)) {
                $values_2 = [];
                foreach ($data['users_to_retain'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setUsersToRetain($values_2);
                unset($data['users_to_retain']);
            }
            if (\array_key_exists('promo_code', $data)) {
                $object->setPromoCode($data['promo_code']);
                unset($data['promo_code']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('tierName') && null !== $object->getTierName()) {
                $data['tier_name'] = $object->getTierName();
            }
            if ($object->isInitialized('groupGuids') && null !== $object->getGroupGuids()) {
                $values = [];
                foreach ($object->getGroupGuids() as $value) {
                    $values[] = $value;
                }
                $data['group_guids'] = $values;
            }
            if ($object->isInitialized('micrositeGuids') && null !== $object->getMicrositeGuids()) {
                $values_1 = [];
                foreach ($object->getMicrositeGuids() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['microsite_guids'] = $values_1;
            }
            if ($object->isInitialized('usersToRetain') && null !== $object->getUsersToRetain()) {
                $values_2 = [];
                foreach ($object->getUsersToRetain() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['users_to_retain'] = $values_2;
            }
            if ($object->isInitialized('promoCode') && null !== $object->getPromoCode()) {
                $data['promo_code'] = $object->getPromoCode();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\BillingDowngrade::class => false];
        }
    }
} else {
    class BillingDowngradeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BillingDowngrade::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BillingDowngrade::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BillingDowngrade();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('tier_name', $data)) {
                $object->setTierName($data['tier_name']);
                unset($data['tier_name']);
            }
            if (\array_key_exists('group_guids', $data)) {
                $values = [];
                foreach ($data['group_guids'] as $value) {
                    $values[] = $value;
                }
                $object->setGroupGuids($values);
                unset($data['group_guids']);
            }
            if (\array_key_exists('microsite_guids', $data)) {
                $values_1 = [];
                foreach ($data['microsite_guids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMicrositeGuids($values_1);
                unset($data['microsite_guids']);
            }
            if (\array_key_exists('users_to_retain', $data)) {
                $values_2 = [];
                foreach ($data['users_to_retain'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setUsersToRetain($values_2);
                unset($data['users_to_retain']);
            }
            if (\array_key_exists('promo_code', $data)) {
                $object->setPromoCode($data['promo_code']);
                unset($data['promo_code']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('tierName') && null !== $object->getTierName()) {
                $data['tier_name'] = $object->getTierName();
            }
            if ($object->isInitialized('groupGuids') && null !== $object->getGroupGuids()) {
                $values = [];
                foreach ($object->getGroupGuids() as $value) {
                    $values[] = $value;
                }
                $data['group_guids'] = $values;
            }
            if ($object->isInitialized('micrositeGuids') && null !== $object->getMicrositeGuids()) {
                $values_1 = [];
                foreach ($object->getMicrositeGuids() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['microsite_guids'] = $values_1;
            }
            if ($object->isInitialized('usersToRetain') && null !== $object->getUsersToRetain()) {
                $values_2 = [];
                foreach ($object->getUsersToRetain() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['users_to_retain'] = $values_2;
            }
            if ($object->isInitialized('promoCode') && null !== $object->getPromoCode()) {
                $data['promo_code'] = $object->getPromoCode();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\BillingDowngrade::class => false];
        }
    }
}
