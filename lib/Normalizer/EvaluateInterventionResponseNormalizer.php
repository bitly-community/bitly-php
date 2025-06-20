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

class EvaluateInterventionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\EvaluateInterventionResponse::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\EvaluateInterventionResponse::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\EvaluateInterventionResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tier', $data)) {
            $object->setTier($data['tier']);
            unset($data['tier']);
        }
        if (\array_key_exists('intervention', $data)) {
            $object->setIntervention($data['intervention']);
            unset($data['intervention']);
        }
        if (\array_key_exists('monthly_promo', $data)) {
            $object->setMonthlyPromo($this->denormalizer->denormalize($data['monthly_promo'], \Bitly\Model\EvaluateInterventionResponseMonthlyPromo::class, 'json', $context));
            unset($data['monthly_promo']);
        }
        if (\array_key_exists('annual_promo', $data)) {
            $object->setAnnualPromo($this->denormalizer->denormalize($data['annual_promo'], \Bitly\Model\EvaluateInterventionResponseAnnualPromo::class, 'json', $context));
            unset($data['annual_promo']);
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
        if ($data->isInitialized('tier') && null !== $data->getTier()) {
            $dataArray['tier'] = $data->getTier();
        }
        if ($data->isInitialized('intervention') && null !== $data->getIntervention()) {
            $dataArray['intervention'] = $data->getIntervention();
        }
        if ($data->isInitialized('monthlyPromo') && null !== $data->getMonthlyPromo()) {
            $dataArray['monthly_promo'] = $this->normalizer->normalize($data->getMonthlyPromo(), 'json', $context);
        }
        if ($data->isInitialized('annualPromo') && null !== $data->getAnnualPromo()) {
            $dataArray['annual_promo'] = $this->normalizer->normalize($data->getAnnualPromo(), 'json', $context);
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
        return [\Bitly\Model\EvaluateInterventionResponse::class => false];
    }
}
