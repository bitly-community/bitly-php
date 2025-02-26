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
    class QRCodeFrameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCodeFrame::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCodeFrame::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCodeFrame();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('immutable', $data)) {
                $object->setImmutable($data['immutable']);
                unset($data['immutable']);
            }
            if (\array_key_exists('colors', $data)) {
                $object->setColors($this->denormalizer->denormalize($data['colors'], \Bitly\Model\QRCodeFrameColors::class, 'json', $context));
                unset($data['colors']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($this->denormalizer->denormalize($data['text'], \Bitly\Model\QRCodeFrameText::class, 'json', $context));
                unset($data['text']);
            }
            if (\array_key_exists('thumbnail', $data)) {
                $object->setThumbnail($data['thumbnail']);
                unset($data['thumbnail']);
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('immutable') && null !== $object->getImmutable()) {
                $data['immutable'] = $object->getImmutable();
            }
            if ($object->isInitialized('colors') && null !== $object->getColors()) {
                $data['colors'] = $this->normalizer->normalize($object->getColors(), 'json', $context);
            }
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $this->normalizer->normalize($object->getText(), 'json', $context);
            }
            if ($object->isInitialized('thumbnail') && null !== $object->getThumbnail()) {
                $data['thumbnail'] = $object->getThumbnail();
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
            return [\Bitly\Model\QRCodeFrame::class => false];
        }
    }
} else {
    class QRCodeFrameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\QRCodeFrame::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\QRCodeFrame::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\QRCodeFrame();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('immutable', $data)) {
                $object->setImmutable($data['immutable']);
                unset($data['immutable']);
            }
            if (\array_key_exists('colors', $data)) {
                $object->setColors($this->denormalizer->denormalize($data['colors'], \Bitly\Model\QRCodeFrameColors::class, 'json', $context));
                unset($data['colors']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($this->denormalizer->denormalize($data['text'], \Bitly\Model\QRCodeFrameText::class, 'json', $context));
                unset($data['text']);
            }
            if (\array_key_exists('thumbnail', $data)) {
                $object->setThumbnail($data['thumbnail']);
                unset($data['thumbnail']);
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('immutable') && null !== $object->getImmutable()) {
                $data['immutable'] = $object->getImmutable();
            }
            if ($object->isInitialized('colors') && null !== $object->getColors()) {
                $data['colors'] = $this->normalizer->normalize($object->getColors(), 'json', $context);
            }
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $this->normalizer->normalize($object->getText(), 'json', $context);
            }
            if ($object->isInitialized('thumbnail') && null !== $object->getThumbnail()) {
                $data['thumbnail'] = $object->getThumbnail();
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
            return [\Bitly\Model\QRCodeFrame::class => false];
        }
    }
}
