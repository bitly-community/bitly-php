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
    class SiteBlockContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\SiteBlockContent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\SiteBlockContent::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\SiteBlockContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('link_title', $data)) {
                $object->setLinkTitle($data['link_title']);
                unset($data['link_title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('bitlink_id', $data)) {
                $object->setBitlinkId($data['bitlink_id']);
                unset($data['bitlink_id']);
            }
            if (\array_key_exists('image_guid', $data)) {
                $object->setImageGuid($data['image_guid']);
                unset($data['image_guid']);
            }
            if (\array_key_exists('image_url', $data)) {
                $object->setImageUrl($data['image_url']);
                unset($data['image_url']);
            }
            if (\array_key_exists('aspect_ratio', $data)) {
                $object->setAspectRatio($data['aspect_ratio']);
                unset($data['aspect_ratio']);
            }
            if (\array_key_exists('thumbnail_url', $data)) {
                $object->setThumbnailUrl($data['thumbnail_url']);
                unset($data['thumbnail_url']);
            }
            if (\array_key_exists('channel', $data)) {
                $object->setChannel($data['channel']);
                unset($data['channel']);
            }
            if (\array_key_exists('channel_url', $data)) {
                $object->setChannelUrl($data['channel_url']);
                unset($data['channel_url']);
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
            if ($object->isInitialized('linkTitle') && null !== $object->getLinkTitle()) {
                $data['link_title'] = $object->getLinkTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('bitlinkId') && null !== $object->getBitlinkId()) {
                $data['bitlink_id'] = $object->getBitlinkId();
            }
            if ($object->isInitialized('imageGuid') && null !== $object->getImageGuid()) {
                $data['image_guid'] = $object->getImageGuid();
            }
            if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
                $data['image_url'] = $object->getImageUrl();
            }
            if ($object->isInitialized('aspectRatio') && null !== $object->getAspectRatio()) {
                $data['aspect_ratio'] = $object->getAspectRatio();
            }
            if ($object->isInitialized('thumbnailUrl') && null !== $object->getThumbnailUrl()) {
                $data['thumbnail_url'] = $object->getThumbnailUrl();
            }
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $data['channel'] = $object->getChannel();
            }
            if ($object->isInitialized('channelUrl') && null !== $object->getChannelUrl()) {
                $data['channel_url'] = $object->getChannelUrl();
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
            return [\Bitly\Model\SiteBlockContent::class => false];
        }
    }
} else {
    class SiteBlockContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\SiteBlockContent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\SiteBlockContent::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\SiteBlockContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('link_title', $data)) {
                $object->setLinkTitle($data['link_title']);
                unset($data['link_title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('bitlink_id', $data)) {
                $object->setBitlinkId($data['bitlink_id']);
                unset($data['bitlink_id']);
            }
            if (\array_key_exists('image_guid', $data)) {
                $object->setImageGuid($data['image_guid']);
                unset($data['image_guid']);
            }
            if (\array_key_exists('image_url', $data)) {
                $object->setImageUrl($data['image_url']);
                unset($data['image_url']);
            }
            if (\array_key_exists('aspect_ratio', $data)) {
                $object->setAspectRatio($data['aspect_ratio']);
                unset($data['aspect_ratio']);
            }
            if (\array_key_exists('thumbnail_url', $data)) {
                $object->setThumbnailUrl($data['thumbnail_url']);
                unset($data['thumbnail_url']);
            }
            if (\array_key_exists('channel', $data)) {
                $object->setChannel($data['channel']);
                unset($data['channel']);
            }
            if (\array_key_exists('channel_url', $data)) {
                $object->setChannelUrl($data['channel_url']);
                unset($data['channel_url']);
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
            if ($object->isInitialized('linkTitle') && null !== $object->getLinkTitle()) {
                $data['link_title'] = $object->getLinkTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('bitlinkId') && null !== $object->getBitlinkId()) {
                $data['bitlink_id'] = $object->getBitlinkId();
            }
            if ($object->isInitialized('imageGuid') && null !== $object->getImageGuid()) {
                $data['image_guid'] = $object->getImageGuid();
            }
            if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
                $data['image_url'] = $object->getImageUrl();
            }
            if ($object->isInitialized('aspectRatio') && null !== $object->getAspectRatio()) {
                $data['aspect_ratio'] = $object->getAspectRatio();
            }
            if ($object->isInitialized('thumbnailUrl') && null !== $object->getThumbnailUrl()) {
                $data['thumbnail_url'] = $object->getThumbnailUrl();
            }
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $data['channel'] = $object->getChannel();
            }
            if ($object->isInitialized('channelUrl') && null !== $object->getChannelUrl()) {
                $data['channel_url'] = $object->getChannelUrl();
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
            return [\Bitly\Model\SiteBlockContent::class => false];
        }
    }
}
