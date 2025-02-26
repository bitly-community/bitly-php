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
    class LaunchpadImagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadImages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadImages::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadImages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('profile', $data)) {
                $object->setProfile($this->denormalizer->denormalize($data['profile'], \Bitly\Model\LaunchpadImage::class, 'json', $context));
                unset($data['profile']);
            }
            if (\array_key_exists('background', $data)) {
                $object->setBackground($this->denormalizer->denormalize($data['background'], \Bitly\Model\LaunchpadImage::class, 'json', $context));
                unset($data['background']);
            }
            if (\array_key_exists('banner', $data)) {
                $object->setBanner($this->denormalizer->denormalize($data['banner'], \Bitly\Model\LaunchpadImage::class, 'json', $context));
                unset($data['banner']);
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
            if ($object->isInitialized('profile') && null !== $object->getProfile()) {
                $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
            }
            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $this->normalizer->normalize($object->getBackground(), 'json', $context);
            }
            if ($object->isInitialized('banner') && null !== $object->getBanner()) {
                $data['banner'] = $this->normalizer->normalize($object->getBanner(), 'json', $context);
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
            return [\Bitly\Model\LaunchpadImages::class => false];
        }
    }
} else {
    class LaunchpadImagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadImages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadImages::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadImages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('profile', $data)) {
                $object->setProfile($this->denormalizer->denormalize($data['profile'], \Bitly\Model\LaunchpadImage::class, 'json', $context));
                unset($data['profile']);
            }
            if (\array_key_exists('background', $data)) {
                $object->setBackground($this->denormalizer->denormalize($data['background'], \Bitly\Model\LaunchpadImage::class, 'json', $context));
                unset($data['background']);
            }
            if (\array_key_exists('banner', $data)) {
                $object->setBanner($this->denormalizer->denormalize($data['banner'], \Bitly\Model\LaunchpadImage::class, 'json', $context));
                unset($data['banner']);
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
            if ($object->isInitialized('profile') && null !== $object->getProfile()) {
                $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
            }
            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $this->normalizer->normalize($object->getBackground(), 'json', $context);
            }
            if ($object->isInitialized('banner') && null !== $object->getBanner()) {
                $data['banner'] = $this->normalizer->normalize($object->getBanner(), 'json', $context);
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
            return [\Bitly\Model\LaunchpadImages::class => false];
        }
    }
}
