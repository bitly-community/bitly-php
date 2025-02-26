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
    class UpdateLaunchpadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\UpdateLaunchpad::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\UpdateLaunchpad::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\UpdateLaunchpad();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('launchpad_id', $data)) {
                $object->setLaunchpadId($data['launchpad_id']);
                unset($data['launchpad_id']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
                unset($data['domain']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('uri', $data)) {
                $object->setUri($data['uri']);
                unset($data['uri']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('launchpad_appearance', $data)) {
                $object->setLaunchpadAppearance($this->denormalizer->denormalize($data['launchpad_appearance'], \Bitly\Model\LaunchpadAppearance::class, 'json', $context));
                unset($data['launchpad_appearance']);
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
            if ($object->isInitialized('launchpadId') && null !== $object->getLaunchpadId()) {
                $data['launchpad_id'] = $object->getLaunchpadId();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('uri') && null !== $object->getUri()) {
                $data['uri'] = $object->getUri();
            }
            $data['is_active'] = $object->getIsActive();
            if ($object->isInitialized('launchpadAppearance') && null !== $object->getLaunchpadAppearance()) {
                $data['launchpad_appearance'] = $this->normalizer->normalize($object->getLaunchpadAppearance(), 'json', $context);
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
            return [\Bitly\Model\UpdateLaunchpad::class => false];
        }
    }
} else {
    class UpdateLaunchpadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\UpdateLaunchpad::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\UpdateLaunchpad::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\UpdateLaunchpad();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('launchpad_id', $data)) {
                $object->setLaunchpadId($data['launchpad_id']);
                unset($data['launchpad_id']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
                unset($data['domain']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('uri', $data)) {
                $object->setUri($data['uri']);
                unset($data['uri']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('launchpad_appearance', $data)) {
                $object->setLaunchpadAppearance($this->denormalizer->denormalize($data['launchpad_appearance'], \Bitly\Model\LaunchpadAppearance::class, 'json', $context));
                unset($data['launchpad_appearance']);
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
            if ($object->isInitialized('launchpadId') && null !== $object->getLaunchpadId()) {
                $data['launchpad_id'] = $object->getLaunchpadId();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('uri') && null !== $object->getUri()) {
                $data['uri'] = $object->getUri();
            }
            $data['is_active'] = $object->getIsActive();
            if ($object->isInitialized('launchpadAppearance') && null !== $object->getLaunchpadAppearance()) {
                $data['launchpad_appearance'] = $this->normalizer->normalize($object->getLaunchpadAppearance(), 'json', $context);
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
            return [\Bitly\Model\UpdateLaunchpad::class => false];
        }
    }
}
