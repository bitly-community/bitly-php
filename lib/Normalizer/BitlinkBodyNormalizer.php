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
    class BitlinkBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BitlinkBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BitlinkBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BitlinkBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('references', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['references'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setReferences($values);
                unset($data['references']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('archived', $data)) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('created_by', $data)) {
                $object->setCreatedBy($data['created_by']);
                unset($data['created_by']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('custom_bitlinks', $data)) {
                $values_1 = [];
                foreach ($data['custom_bitlinks'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCustomBitlinks($values_1);
                unset($data['custom_bitlinks']);
            }
            if (\array_key_exists('tags', $data)) {
                $values_2 = [];
                foreach ($data['tags'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTags($values_2);
                unset($data['tags']);
            }
            if (\array_key_exists('launchpad_ids', $data)) {
                $values_3 = [];
                foreach ($data['launchpad_ids'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLaunchpadIds($values_3);
                unset($data['launchpad_ids']);
            }
            if (\array_key_exists('qr_code_ids', $data)) {
                $values_4 = [];
                foreach ($data['qr_code_ids'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setQrCodeIds($values_4);
                unset($data['qr_code_ids']);
            }
            if (\array_key_exists('deeplinks', $data)) {
                $values_5 = [];
                foreach ($data['deeplinks'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Bitly\Model\DeeplinkRule::class, 'json', $context);
                }
                $object->setDeeplinks($values_5);
                unset($data['deeplinks']);
            }
            if (\array_key_exists('is_deleted', $data)) {
                $object->setIsDeleted($data['is_deleted']);
                unset($data['is_deleted']);
            }
            if (\array_key_exists('campaign_ids', $data)) {
                $values_6 = [];
                foreach ($data['campaign_ids'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setCampaignIds($values_6);
                unset($data['campaign_ids']);
            }
            foreach ($data as $key_1 => $value_7) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_7;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('references') && null !== $object->getReferences()) {
                $values = [];
                foreach ($object->getReferences() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['references'] = $values;
            }
            if ($object->isInitialized('link') && null !== $object->getLink()) {
                $data['link'] = $object->getLink();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['created_by'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('customBitlinks') && null !== $object->getCustomBitlinks()) {
                $values_1 = [];
                foreach ($object->getCustomBitlinks() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['custom_bitlinks'] = $values_1;
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_2 = [];
                foreach ($object->getTags() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['tags'] = $values_2;
            }
            if ($object->isInitialized('launchpadIds') && null !== $object->getLaunchpadIds()) {
                $values_3 = [];
                foreach ($object->getLaunchpadIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['launchpad_ids'] = $values_3;
            }
            if ($object->isInitialized('qrCodeIds') && null !== $object->getQrCodeIds()) {
                $values_4 = [];
                foreach ($object->getQrCodeIds() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['qr_code_ids'] = $values_4;
            }
            if ($object->isInitialized('deeplinks') && null !== $object->getDeeplinks()) {
                $values_5 = [];
                foreach ($object->getDeeplinks() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['deeplinks'] = $values_5;
            }
            if ($object->isInitialized('isDeleted') && null !== $object->getIsDeleted()) {
                $data['is_deleted'] = $object->getIsDeleted();
            }
            if ($object->isInitialized('campaignIds') && null !== $object->getCampaignIds()) {
                $values_6 = [];
                foreach ($object->getCampaignIds() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['campaign_ids'] = $values_6;
            }
            foreach ($object as $key_1 => $value_7) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_7;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\BitlinkBody::class => false];
        }
    }
} else {
    class BitlinkBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BitlinkBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BitlinkBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BitlinkBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('references', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['references'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setReferences($values);
                unset($data['references']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('archived', $data)) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('created_by', $data)) {
                $object->setCreatedBy($data['created_by']);
                unset($data['created_by']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('custom_bitlinks', $data)) {
                $values_1 = [];
                foreach ($data['custom_bitlinks'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCustomBitlinks($values_1);
                unset($data['custom_bitlinks']);
            }
            if (\array_key_exists('tags', $data)) {
                $values_2 = [];
                foreach ($data['tags'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTags($values_2);
                unset($data['tags']);
            }
            if (\array_key_exists('launchpad_ids', $data)) {
                $values_3 = [];
                foreach ($data['launchpad_ids'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLaunchpadIds($values_3);
                unset($data['launchpad_ids']);
            }
            if (\array_key_exists('qr_code_ids', $data)) {
                $values_4 = [];
                foreach ($data['qr_code_ids'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setQrCodeIds($values_4);
                unset($data['qr_code_ids']);
            }
            if (\array_key_exists('deeplinks', $data)) {
                $values_5 = [];
                foreach ($data['deeplinks'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Bitly\Model\DeeplinkRule::class, 'json', $context);
                }
                $object->setDeeplinks($values_5);
                unset($data['deeplinks']);
            }
            if (\array_key_exists('is_deleted', $data)) {
                $object->setIsDeleted($data['is_deleted']);
                unset($data['is_deleted']);
            }
            if (\array_key_exists('campaign_ids', $data)) {
                $values_6 = [];
                foreach ($data['campaign_ids'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setCampaignIds($values_6);
                unset($data['campaign_ids']);
            }
            foreach ($data as $key_1 => $value_7) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_7;
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
            if ($object->isInitialized('references') && null !== $object->getReferences()) {
                $values = [];
                foreach ($object->getReferences() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['references'] = $values;
            }
            if ($object->isInitialized('link') && null !== $object->getLink()) {
                $data['link'] = $object->getLink();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['created_by'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('customBitlinks') && null !== $object->getCustomBitlinks()) {
                $values_1 = [];
                foreach ($object->getCustomBitlinks() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['custom_bitlinks'] = $values_1;
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_2 = [];
                foreach ($object->getTags() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['tags'] = $values_2;
            }
            if ($object->isInitialized('launchpadIds') && null !== $object->getLaunchpadIds()) {
                $values_3 = [];
                foreach ($object->getLaunchpadIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['launchpad_ids'] = $values_3;
            }
            if ($object->isInitialized('qrCodeIds') && null !== $object->getQrCodeIds()) {
                $values_4 = [];
                foreach ($object->getQrCodeIds() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['qr_code_ids'] = $values_4;
            }
            if ($object->isInitialized('deeplinks') && null !== $object->getDeeplinks()) {
                $values_5 = [];
                foreach ($object->getDeeplinks() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['deeplinks'] = $values_5;
            }
            if ($object->isInitialized('isDeleted') && null !== $object->getIsDeleted()) {
                $data['is_deleted'] = $object->getIsDeleted();
            }
            if ($object->isInitialized('campaignIds') && null !== $object->getCampaignIds()) {
                $values_6 = [];
                foreach ($object->getCampaignIds() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['campaign_ids'] = $values_6;
            }
            foreach ($object as $key_1 => $value_7) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_7;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\BitlinkBody::class => false];
        }
    }
}
