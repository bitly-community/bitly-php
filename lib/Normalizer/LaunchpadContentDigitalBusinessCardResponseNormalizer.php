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
    class LaunchpadContentDigitalBusinessCardResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadContentDigitalBusinessCardResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadContentDigitalBusinessCardResponse::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadContentDigitalBusinessCardResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \Bitly\Model\DigitalBusinessCardContent::class, 'json', $context));
                unset($data['content']);
            }
            if (\array_key_exists('launchpad_id', $data)) {
                $object->setLaunchpadId($data['launchpad_id']);
                unset($data['launchpad_id']);
            }
            if (\array_key_exists('button_id', $data)) {
                $object->setButtonId($data['button_id']);
                unset($data['button_id']);
            }
            if (\array_key_exists('digital_business_card_id', $data)) {
                $object->setDigitalBusinessCardId($data['digital_business_card_id']);
                unset($data['digital_business_card_id']);
            }
            if (\array_key_exists('sort_order', $data)) {
                $object->setSortOrder($data['sort_order']);
                unset($data['sort_order']);
            }
            if (\array_key_exists('schedule_start', $data)) {
                $object->setScheduleStart($data['schedule_start']);
                unset($data['schedule_start']);
            }
            if (\array_key_exists('schedule_end', $data)) {
                $object->setScheduleEnd($data['schedule_end']);
                unset($data['schedule_end']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('is_pinned', $data)) {
                $object->setIsPinned($data['is_pinned']);
                unset($data['is_pinned']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('parent', $data)) {
                $object->setParent($data['parent']);
                unset($data['parent']);
            }
            if (\array_key_exists('is_sample', $data)) {
                $object->setIsSample($data['is_sample']);
                unset($data['is_sample']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
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
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            }
            if ($object->isInitialized('launchpadId') && null !== $object->getLaunchpadId()) {
                $data['launchpad_id'] = $object->getLaunchpadId();
            }
            if ($object->isInitialized('buttonId') && null !== $object->getButtonId()) {
                $data['button_id'] = $object->getButtonId();
            }
            if ($object->isInitialized('digitalBusinessCardId') && null !== $object->getDigitalBusinessCardId()) {
                $data['digital_business_card_id'] = $object->getDigitalBusinessCardId();
            }
            if ($object->isInitialized('sortOrder') && null !== $object->getSortOrder()) {
                $data['sort_order'] = $object->getSortOrder();
            }
            if ($object->isInitialized('scheduleStart') && null !== $object->getScheduleStart()) {
                $data['schedule_start'] = $object->getScheduleStart();
            }
            if ($object->isInitialized('scheduleEnd') && null !== $object->getScheduleEnd()) {
                $data['schedule_end'] = $object->getScheduleEnd();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('isPinned') && null !== $object->getIsPinned()) {
                $data['is_pinned'] = $object->getIsPinned();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['parent'] = $object->getParent();
            }
            if ($object->isInitialized('isSample') && null !== $object->getIsSample()) {
                $data['is_sample'] = $object->getIsSample();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
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
            return [\Bitly\Model\LaunchpadContentDigitalBusinessCardResponse::class => false];
        }
    }
} else {
    class LaunchpadContentDigitalBusinessCardResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadContentDigitalBusinessCardResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadContentDigitalBusinessCardResponse::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadContentDigitalBusinessCardResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \Bitly\Model\DigitalBusinessCardContent::class, 'json', $context));
                unset($data['content']);
            }
            if (\array_key_exists('launchpad_id', $data)) {
                $object->setLaunchpadId($data['launchpad_id']);
                unset($data['launchpad_id']);
            }
            if (\array_key_exists('button_id', $data)) {
                $object->setButtonId($data['button_id']);
                unset($data['button_id']);
            }
            if (\array_key_exists('digital_business_card_id', $data)) {
                $object->setDigitalBusinessCardId($data['digital_business_card_id']);
                unset($data['digital_business_card_id']);
            }
            if (\array_key_exists('sort_order', $data)) {
                $object->setSortOrder($data['sort_order']);
                unset($data['sort_order']);
            }
            if (\array_key_exists('schedule_start', $data)) {
                $object->setScheduleStart($data['schedule_start']);
                unset($data['schedule_start']);
            }
            if (\array_key_exists('schedule_end', $data)) {
                $object->setScheduleEnd($data['schedule_end']);
                unset($data['schedule_end']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('is_pinned', $data)) {
                $object->setIsPinned($data['is_pinned']);
                unset($data['is_pinned']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('parent', $data)) {
                $object->setParent($data['parent']);
                unset($data['parent']);
            }
            if (\array_key_exists('is_sample', $data)) {
                $object->setIsSample($data['is_sample']);
                unset($data['is_sample']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
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
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            }
            if ($object->isInitialized('launchpadId') && null !== $object->getLaunchpadId()) {
                $data['launchpad_id'] = $object->getLaunchpadId();
            }
            if ($object->isInitialized('buttonId') && null !== $object->getButtonId()) {
                $data['button_id'] = $object->getButtonId();
            }
            if ($object->isInitialized('digitalBusinessCardId') && null !== $object->getDigitalBusinessCardId()) {
                $data['digital_business_card_id'] = $object->getDigitalBusinessCardId();
            }
            if ($object->isInitialized('sortOrder') && null !== $object->getSortOrder()) {
                $data['sort_order'] = $object->getSortOrder();
            }
            if ($object->isInitialized('scheduleStart') && null !== $object->getScheduleStart()) {
                $data['schedule_start'] = $object->getScheduleStart();
            }
            if ($object->isInitialized('scheduleEnd') && null !== $object->getScheduleEnd()) {
                $data['schedule_end'] = $object->getScheduleEnd();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('isPinned') && null !== $object->getIsPinned()) {
                $data['is_pinned'] = $object->getIsPinned();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['parent'] = $object->getParent();
            }
            if ($object->isInitialized('isSample') && null !== $object->getIsSample()) {
                $data['is_sample'] = $object->getIsSample();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
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
            return [\Bitly\Model\LaunchpadContentDigitalBusinessCardResponse::class => false];
        }
    }
}
