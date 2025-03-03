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
    class PurchaseBSDNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\PurchaseBSD::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\PurchaseBSD::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\PurchaseBSD();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('agreed_at', $data)) {
                $object->setAgreedAt($data['agreed_at']);
                unset($data['agreed_at']);
            }
            if (\array_key_exists('agreement_keys', $data)) {
                $values = [];
                foreach ($data['agreement_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setAgreementKeys($values);
                unset($data['agreement_keys']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
                unset($data['domain']);
            }
            if (\array_key_exists('organization_guid', $data)) {
                $object->setOrganizationGuid($data['organization_guid']);
                unset($data['organization_guid']);
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
            if ($object->isInitialized('agreedAt') && null !== $object->getAgreedAt()) {
                $data['agreed_at'] = $object->getAgreedAt();
            }
            if ($object->isInitialized('agreementKeys') && null !== $object->getAgreementKeys()) {
                $values = [];
                foreach ($object->getAgreementKeys() as $value) {
                    $values[] = $value;
                }
                $data['agreement_keys'] = $values;
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('organizationGuid') && null !== $object->getOrganizationGuid()) {
                $data['organization_guid'] = $object->getOrganizationGuid();
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
            return [\Bitly\Model\PurchaseBSD::class => false];
        }
    }
} else {
    class PurchaseBSDNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\PurchaseBSD::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\PurchaseBSD::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\PurchaseBSD();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('agreed_at', $data)) {
                $object->setAgreedAt($data['agreed_at']);
                unset($data['agreed_at']);
            }
            if (\array_key_exists('agreement_keys', $data)) {
                $values = [];
                foreach ($data['agreement_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setAgreementKeys($values);
                unset($data['agreement_keys']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
                unset($data['domain']);
            }
            if (\array_key_exists('organization_guid', $data)) {
                $object->setOrganizationGuid($data['organization_guid']);
                unset($data['organization_guid']);
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
            if ($object->isInitialized('agreedAt') && null !== $object->getAgreedAt()) {
                $data['agreed_at'] = $object->getAgreedAt();
            }
            if ($object->isInitialized('agreementKeys') && null !== $object->getAgreementKeys()) {
                $values = [];
                foreach ($object->getAgreementKeys() as $value) {
                    $values[] = $value;
                }
                $data['agreement_keys'] = $values;
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('organizationGuid') && null !== $object->getOrganizationGuid()) {
                $data['organization_guid'] = $object->getOrganizationGuid();
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
            return [\Bitly\Model\PurchaseBSD::class => false];
        }
    }
}
