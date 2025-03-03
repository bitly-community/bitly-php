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
    class UpdateQRCodeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\UpdateQRCodeRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\UpdateQRCodeRequest::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\UpdateQRCodeRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('render_customizations', $data)) {
                $object->setRenderCustomizations($this->denormalizer->denormalize($data['render_customizations'], \Bitly\Model\QRCodeCustomizations::class, 'json', $context));
                unset($data['render_customizations']);
            }
            if (\array_key_exists('is_hidden', $data)) {
                $object->setIsHidden($data['is_hidden']);
                unset($data['is_hidden']);
            }
            if (\array_key_exists('static_content', $data)) {
                $object->setStaticContent($this->denormalizer->denormalize($data['static_content'], \Bitly\Model\QRCodeStatic::class, 'json', $context));
                unset($data['static_content']);
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('renderCustomizations') && null !== $object->getRenderCustomizations()) {
                $data['render_customizations'] = $this->normalizer->normalize($object->getRenderCustomizations(), 'json', $context);
            }
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
            }
            if ($object->isInitialized('staticContent') && null !== $object->getStaticContent()) {
                $data['static_content'] = $this->normalizer->normalize($object->getStaticContent(), 'json', $context);
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
            return [\Bitly\Model\UpdateQRCodeRequest::class => false];
        }
    }
} else {
    class UpdateQRCodeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\UpdateQRCodeRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\UpdateQRCodeRequest::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\UpdateQRCodeRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('render_customizations', $data)) {
                $object->setRenderCustomizations($this->denormalizer->denormalize($data['render_customizations'], \Bitly\Model\QRCodeCustomizations::class, 'json', $context));
                unset($data['render_customizations']);
            }
            if (\array_key_exists('is_hidden', $data)) {
                $object->setIsHidden($data['is_hidden']);
                unset($data['is_hidden']);
            }
            if (\array_key_exists('static_content', $data)) {
                $object->setStaticContent($this->denormalizer->denormalize($data['static_content'], \Bitly\Model\QRCodeStatic::class, 'json', $context));
                unset($data['static_content']);
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('renderCustomizations') && null !== $object->getRenderCustomizations()) {
                $data['render_customizations'] = $this->normalizer->normalize($object->getRenderCustomizations(), 'json', $context);
            }
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
            }
            if ($object->isInitialized('staticContent') && null !== $object->getStaticContent()) {
                $data['static_content'] = $this->normalizer->normalize($object->getStaticContent(), 'json', $context);
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
            return [\Bitly\Model\UpdateQRCodeRequest::class => false];
        }
    }
}
