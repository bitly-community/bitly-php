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
    class QRCodeTextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCodeText::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCodeText::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCodeText();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('center', $data)) {
                $object->setCenter($this->denormalizer->denormalize($data['center'], \Bitly\Model\Text::class, 'json', $context));
                unset($data['center']);
            }
            if (\array_key_exists('top', $data)) {
                $object->setTop($this->denormalizer->denormalize($data['top'], \Bitly\Model\Text::class, 'json', $context));
                unset($data['top']);
            }
            if (\array_key_exists('bottom', $data)) {
                $object->setBottom($this->denormalizer->denormalize($data['bottom'], \Bitly\Model\Text::class, 'json', $context));
                unset($data['bottom']);
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
            if ($object->isInitialized('center') && null !== $object->getCenter()) {
                $data['center'] = $this->normalizer->normalize($object->getCenter(), 'json', $context);
            }
            if ($object->isInitialized('top') && null !== $object->getTop()) {
                $data['top'] = $this->normalizer->normalize($object->getTop(), 'json', $context);
            }
            if ($object->isInitialized('bottom') && null !== $object->getBottom()) {
                $data['bottom'] = $this->normalizer->normalize($object->getBottom(), 'json', $context);
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
            return [\Bitly\Model\QRCodeText::class => false];
        }
    }
} else {
    class QRCodeTextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCodeText::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCodeText::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCodeText();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('center', $data)) {
                $object->setCenter($this->denormalizer->denormalize($data['center'], \Bitly\Model\Text::class, 'json', $context));
                unset($data['center']);
            }
            if (\array_key_exists('top', $data)) {
                $object->setTop($this->denormalizer->denormalize($data['top'], \Bitly\Model\Text::class, 'json', $context));
                unset($data['top']);
            }
            if (\array_key_exists('bottom', $data)) {
                $object->setBottom($this->denormalizer->denormalize($data['bottom'], \Bitly\Model\Text::class, 'json', $context));
                unset($data['bottom']);
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
            if ($object->isInitialized('center') && null !== $object->getCenter()) {
                $data['center'] = $this->normalizer->normalize($object->getCenter(), 'json', $context);
            }
            if ($object->isInitialized('top') && null !== $object->getTop()) {
                $data['top'] = $this->normalizer->normalize($object->getTop(), 'json', $context);
            }
            if ($object->isInitialized('bottom') && null !== $object->getBottom()) {
                $data['bottom'] = $this->normalizer->normalize($object->getBottom(), 'json', $context);
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
            return [\Bitly\Model\QRCodeText::class => false];
        }
    }
}
