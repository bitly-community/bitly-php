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
    class OAuthAppFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\OAuthAppFull::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\OAuthAppFull::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\OAuthAppFull();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('redirect_uris', $data)) {
                $values = [];
                foreach ($data['redirect_uris'] as $value) {
                    $values[] = $value;
                }
                $object->setRedirectUris($values);
                unset($data['redirect_uris']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('require_oauth_pkce', $data)) {
                $object->setRequireOauthPkce($data['require_oauth_pkce']);
                unset($data['require_oauth_pkce']);
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
            $data['name'] = $object->getName();
            $data['client_id'] = $object->getClientId();
            $data['client_secret'] = $object->getClientSecret();
            $values = [];
            foreach ($object->getRedirectUris() as $value) {
                $values[] = $value;
            }
            $data['redirect_uris'] = $values;
            $data['description'] = $object->getDescription();
            $data['link'] = $object->getLink();
            $data['require_oauth_pkce'] = $object->getRequireOauthPkce();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\OAuthAppFull::class => false];
        }
    }
} else {
    class OAuthAppFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\OAuthAppFull::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\OAuthAppFull::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\OAuthAppFull();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('redirect_uris', $data)) {
                $values = [];
                foreach ($data['redirect_uris'] as $value) {
                    $values[] = $value;
                }
                $object->setRedirectUris($values);
                unset($data['redirect_uris']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('require_oauth_pkce', $data)) {
                $object->setRequireOauthPkce($data['require_oauth_pkce']);
                unset($data['require_oauth_pkce']);
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
            $data['name'] = $object->getName();
            $data['client_id'] = $object->getClientId();
            $data['client_secret'] = $object->getClientSecret();
            $values = [];
            foreach ($object->getRedirectUris() as $value) {
                $values[] = $value;
            }
            $data['redirect_uris'] = $values;
            $data['description'] = $object->getDescription();
            $data['link'] = $object->getLink();
            $data['require_oauth_pkce'] = $object->getRequireOauthPkce();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\OAuthAppFull::class => false];
        }
    }
}
