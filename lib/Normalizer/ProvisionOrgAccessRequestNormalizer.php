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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProvisionOrgAccessRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\ProvisionOrgAccessRequest::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\ProvisionOrgAccessRequest::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\ProvisionOrgAccessRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('to_tier', $data)) {
            $object->setToTier($data['to_tier']);
            unset($data['to_tier']);
        }
        if (\array_key_exists('stripe_subscription_id', $data)) {
            $object->setStripeSubscriptionId($data['stripe_subscription_id']);
            unset($data['stripe_subscription_id']);
        }
        if (\array_key_exists('stripe_customer_id', $data)) {
            $object->setStripeCustomerId($data['stripe_customer_id']);
            unset($data['stripe_customer_id']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('toTier') && null !== $data->getToTier()) {
            $dataArray['to_tier'] = $data->getToTier();
        }
        if ($data->isInitialized('stripeSubscriptionId') && null !== $data->getStripeSubscriptionId()) {
            $dataArray['stripe_subscription_id'] = $data->getStripeSubscriptionId();
        }
        if ($data->isInitialized('stripeCustomerId') && null !== $data->getStripeCustomerId()) {
            $dataArray['stripe_customer_id'] = $data->getStripeCustomerId();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\ProvisionOrgAccessRequest::class => false];
    }
}
