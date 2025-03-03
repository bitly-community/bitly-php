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
    class BitlySiteAppearanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BitlySiteAppearance::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BitlySiteAppearance::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BitlySiteAppearance();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('layout_v2', $data)) {
                $object->setLayoutV2($data['layout_v2']);
                unset($data['layout_v2']);
            }
            if (\array_key_exists('header_appearance', $data)) {
                $object->setHeaderAppearance($this->denormalizer->denormalize($data['header_appearance'], \Bitly\Model\BitlySiteHeaderAppearance::class, 'json', $context));
                unset($data['header_appearance']);
            }
            if (\array_key_exists('theme_id', $data)) {
                $object->setThemeId($data['theme_id']);
                unset($data['theme_id']);
            }
            if (\array_key_exists('hide_bitly_logo', $data)) {
                $object->setHideBitlyLogo($data['hide_bitly_logo']);
                unset($data['hide_bitly_logo']);
            }
            if (\array_key_exists('layout', $data)) {
                $object->setLayout($data['layout']);
                unset($data['layout']);
            }
            if (\array_key_exists('font', $data)) {
                $object->setFont($data['font']);
                unset($data['font']);
            }
            if (\array_key_exists('style_preference', $data)) {
                $object->setStylePreference($data['style_preference']);
                unset($data['style_preference']);
            }
            if (\array_key_exists('background_color', $data)) {
                $object->setBackgroundColor($data['background_color']);
                unset($data['background_color']);
            }
            if (\array_key_exists('bottom_background_color', $data)) {
                $object->setBottomBackgroundColor($data['bottom_background_color']);
                unset($data['bottom_background_color']);
            }
            if (\array_key_exists('text_color', $data)) {
                $object->setTextColor($data['text_color']);
                unset($data['text_color']);
            }
            if (\array_key_exists('description_color', $data)) {
                $object->setDescriptionColor($data['description_color']);
                unset($data['description_color']);
            }
            if (\array_key_exists('background_preference', $data)) {
                $object->setBackgroundPreference($data['background_preference']);
                unset($data['background_preference']);
            }
            if (\array_key_exists('background_image_alignment', $data)) {
                $object->setBackgroundImageAlignment($data['background_image_alignment']);
                unset($data['background_image_alignment']);
            }
            if (\array_key_exists('background_image_url', $data)) {
                $object->setBackgroundImageUrl($data['background_image_url']);
                unset($data['background_image_url']);
            }
            if (\array_key_exists('background_image_guid', $data)) {
                $object->setBackgroundImageGuid($data['background_image_guid']);
                unset($data['background_image_guid']);
            }
            if (\array_key_exists('avatar_image_url', $data)) {
                $object->setAvatarImageUrl($data['avatar_image_url']);
                unset($data['avatar_image_url']);
            }
            if (\array_key_exists('avatar_image_guid', $data)) {
                $object->setAvatarImageGuid($data['avatar_image_guid']);
                unset($data['avatar_image_guid']);
            }
            if (\array_key_exists('default_button_background_color', $data)) {
                $object->setDefaultButtonBackgroundColor($data['default_button_background_color']);
                unset($data['default_button_background_color']);
            }
            if (\array_key_exists('default_button_text_color', $data)) {
                $object->setDefaultButtonTextColor($data['default_button_text_color']);
                unset($data['default_button_text_color']);
            }
            if (\array_key_exists('default_button_shape', $data)) {
                $object->setDefaultButtonShape($data['default_button_shape']);
                unset($data['default_button_shape']);
            }
            if (\array_key_exists('default_button_shadow', $data)) {
                $object->setDefaultButtonShadow($data['default_button_shadow']);
                unset($data['default_button_shadow']);
            }
            if (\array_key_exists('default_social_icon_color', $data)) {
                $object->setDefaultSocialIconColor($data['default_social_icon_color']);
                unset($data['default_social_icon_color']);
            }
            if (\array_key_exists('default_social_icon_layout', $data)) {
                $object->setDefaultSocialIconLayout($data['default_social_icon_layout']);
                unset($data['default_social_icon_layout']);
            }
            if (\array_key_exists('default_social_icon_position', $data)) {
                $object->setDefaultSocialIconPosition($data['default_social_icon_position']);
                unset($data['default_social_icon_position']);
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
            if ($object->isInitialized('layoutV2') && null !== $object->getLayoutV2()) {
                $data['layout_v2'] = $object->getLayoutV2();
            }
            if ($object->isInitialized('headerAppearance') && null !== $object->getHeaderAppearance()) {
                $data['header_appearance'] = $this->normalizer->normalize($object->getHeaderAppearance(), 'json', $context);
            }
            if ($object->isInitialized('themeId') && null !== $object->getThemeId()) {
                $data['theme_id'] = $object->getThemeId();
            }
            if ($object->isInitialized('hideBitlyLogo') && null !== $object->getHideBitlyLogo()) {
                $data['hide_bitly_logo'] = $object->getHideBitlyLogo();
            }
            if ($object->isInitialized('layout') && null !== $object->getLayout()) {
                $data['layout'] = $object->getLayout();
            }
            if ($object->isInitialized('font') && null !== $object->getFont()) {
                $data['font'] = $object->getFont();
            }
            if ($object->isInitialized('stylePreference') && null !== $object->getStylePreference()) {
                $data['style_preference'] = $object->getStylePreference();
            }
            if ($object->isInitialized('backgroundColor') && null !== $object->getBackgroundColor()) {
                $data['background_color'] = $object->getBackgroundColor();
            }
            if ($object->isInitialized('bottomBackgroundColor') && null !== $object->getBottomBackgroundColor()) {
                $data['bottom_background_color'] = $object->getBottomBackgroundColor();
            }
            if ($object->isInitialized('textColor') && null !== $object->getTextColor()) {
                $data['text_color'] = $object->getTextColor();
            }
            if ($object->isInitialized('descriptionColor') && null !== $object->getDescriptionColor()) {
                $data['description_color'] = $object->getDescriptionColor();
            }
            if ($object->isInitialized('backgroundPreference') && null !== $object->getBackgroundPreference()) {
                $data['background_preference'] = $object->getBackgroundPreference();
            }
            if ($object->isInitialized('backgroundImageAlignment') && null !== $object->getBackgroundImageAlignment()) {
                $data['background_image_alignment'] = $object->getBackgroundImageAlignment();
            }
            if ($object->isInitialized('backgroundImageUrl') && null !== $object->getBackgroundImageUrl()) {
                $data['background_image_url'] = $object->getBackgroundImageUrl();
            }
            if ($object->isInitialized('backgroundImageGuid') && null !== $object->getBackgroundImageGuid()) {
                $data['background_image_guid'] = $object->getBackgroundImageGuid();
            }
            if ($object->isInitialized('avatarImageUrl') && null !== $object->getAvatarImageUrl()) {
                $data['avatar_image_url'] = $object->getAvatarImageUrl();
            }
            if ($object->isInitialized('avatarImageGuid') && null !== $object->getAvatarImageGuid()) {
                $data['avatar_image_guid'] = $object->getAvatarImageGuid();
            }
            if ($object->isInitialized('defaultButtonBackgroundColor') && null !== $object->getDefaultButtonBackgroundColor()) {
                $data['default_button_background_color'] = $object->getDefaultButtonBackgroundColor();
            }
            if ($object->isInitialized('defaultButtonTextColor') && null !== $object->getDefaultButtonTextColor()) {
                $data['default_button_text_color'] = $object->getDefaultButtonTextColor();
            }
            if ($object->isInitialized('defaultButtonShape') && null !== $object->getDefaultButtonShape()) {
                $data['default_button_shape'] = $object->getDefaultButtonShape();
            }
            if ($object->isInitialized('defaultButtonShadow') && null !== $object->getDefaultButtonShadow()) {
                $data['default_button_shadow'] = $object->getDefaultButtonShadow();
            }
            if ($object->isInitialized('defaultSocialIconColor') && null !== $object->getDefaultSocialIconColor()) {
                $data['default_social_icon_color'] = $object->getDefaultSocialIconColor();
            }
            if ($object->isInitialized('defaultSocialIconLayout') && null !== $object->getDefaultSocialIconLayout()) {
                $data['default_social_icon_layout'] = $object->getDefaultSocialIconLayout();
            }
            if ($object->isInitialized('defaultSocialIconPosition') && null !== $object->getDefaultSocialIconPosition()) {
                $data['default_social_icon_position'] = $object->getDefaultSocialIconPosition();
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
            return [\Bitly\Model\BitlySiteAppearance::class => false];
        }
    }
} else {
    class BitlySiteAppearanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BitlySiteAppearance::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BitlySiteAppearance::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BitlySiteAppearance();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('layout_v2', $data)) {
                $object->setLayoutV2($data['layout_v2']);
                unset($data['layout_v2']);
            }
            if (\array_key_exists('header_appearance', $data)) {
                $object->setHeaderAppearance($this->denormalizer->denormalize($data['header_appearance'], \Bitly\Model\BitlySiteHeaderAppearance::class, 'json', $context));
                unset($data['header_appearance']);
            }
            if (\array_key_exists('theme_id', $data)) {
                $object->setThemeId($data['theme_id']);
                unset($data['theme_id']);
            }
            if (\array_key_exists('hide_bitly_logo', $data)) {
                $object->setHideBitlyLogo($data['hide_bitly_logo']);
                unset($data['hide_bitly_logo']);
            }
            if (\array_key_exists('layout', $data)) {
                $object->setLayout($data['layout']);
                unset($data['layout']);
            }
            if (\array_key_exists('font', $data)) {
                $object->setFont($data['font']);
                unset($data['font']);
            }
            if (\array_key_exists('style_preference', $data)) {
                $object->setStylePreference($data['style_preference']);
                unset($data['style_preference']);
            }
            if (\array_key_exists('background_color', $data)) {
                $object->setBackgroundColor($data['background_color']);
                unset($data['background_color']);
            }
            if (\array_key_exists('bottom_background_color', $data)) {
                $object->setBottomBackgroundColor($data['bottom_background_color']);
                unset($data['bottom_background_color']);
            }
            if (\array_key_exists('text_color', $data)) {
                $object->setTextColor($data['text_color']);
                unset($data['text_color']);
            }
            if (\array_key_exists('description_color', $data)) {
                $object->setDescriptionColor($data['description_color']);
                unset($data['description_color']);
            }
            if (\array_key_exists('background_preference', $data)) {
                $object->setBackgroundPreference($data['background_preference']);
                unset($data['background_preference']);
            }
            if (\array_key_exists('background_image_alignment', $data)) {
                $object->setBackgroundImageAlignment($data['background_image_alignment']);
                unset($data['background_image_alignment']);
            }
            if (\array_key_exists('background_image_url', $data)) {
                $object->setBackgroundImageUrl($data['background_image_url']);
                unset($data['background_image_url']);
            }
            if (\array_key_exists('background_image_guid', $data)) {
                $object->setBackgroundImageGuid($data['background_image_guid']);
                unset($data['background_image_guid']);
            }
            if (\array_key_exists('avatar_image_url', $data)) {
                $object->setAvatarImageUrl($data['avatar_image_url']);
                unset($data['avatar_image_url']);
            }
            if (\array_key_exists('avatar_image_guid', $data)) {
                $object->setAvatarImageGuid($data['avatar_image_guid']);
                unset($data['avatar_image_guid']);
            }
            if (\array_key_exists('default_button_background_color', $data)) {
                $object->setDefaultButtonBackgroundColor($data['default_button_background_color']);
                unset($data['default_button_background_color']);
            }
            if (\array_key_exists('default_button_text_color', $data)) {
                $object->setDefaultButtonTextColor($data['default_button_text_color']);
                unset($data['default_button_text_color']);
            }
            if (\array_key_exists('default_button_shape', $data)) {
                $object->setDefaultButtonShape($data['default_button_shape']);
                unset($data['default_button_shape']);
            }
            if (\array_key_exists('default_button_shadow', $data)) {
                $object->setDefaultButtonShadow($data['default_button_shadow']);
                unset($data['default_button_shadow']);
            }
            if (\array_key_exists('default_social_icon_color', $data)) {
                $object->setDefaultSocialIconColor($data['default_social_icon_color']);
                unset($data['default_social_icon_color']);
            }
            if (\array_key_exists('default_social_icon_layout', $data)) {
                $object->setDefaultSocialIconLayout($data['default_social_icon_layout']);
                unset($data['default_social_icon_layout']);
            }
            if (\array_key_exists('default_social_icon_position', $data)) {
                $object->setDefaultSocialIconPosition($data['default_social_icon_position']);
                unset($data['default_social_icon_position']);
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
            if ($object->isInitialized('layoutV2') && null !== $object->getLayoutV2()) {
                $data['layout_v2'] = $object->getLayoutV2();
            }
            if ($object->isInitialized('headerAppearance') && null !== $object->getHeaderAppearance()) {
                $data['header_appearance'] = $this->normalizer->normalize($object->getHeaderAppearance(), 'json', $context);
            }
            if ($object->isInitialized('themeId') && null !== $object->getThemeId()) {
                $data['theme_id'] = $object->getThemeId();
            }
            if ($object->isInitialized('hideBitlyLogo') && null !== $object->getHideBitlyLogo()) {
                $data['hide_bitly_logo'] = $object->getHideBitlyLogo();
            }
            if ($object->isInitialized('layout') && null !== $object->getLayout()) {
                $data['layout'] = $object->getLayout();
            }
            if ($object->isInitialized('font') && null !== $object->getFont()) {
                $data['font'] = $object->getFont();
            }
            if ($object->isInitialized('stylePreference') && null !== $object->getStylePreference()) {
                $data['style_preference'] = $object->getStylePreference();
            }
            if ($object->isInitialized('backgroundColor') && null !== $object->getBackgroundColor()) {
                $data['background_color'] = $object->getBackgroundColor();
            }
            if ($object->isInitialized('bottomBackgroundColor') && null !== $object->getBottomBackgroundColor()) {
                $data['bottom_background_color'] = $object->getBottomBackgroundColor();
            }
            if ($object->isInitialized('textColor') && null !== $object->getTextColor()) {
                $data['text_color'] = $object->getTextColor();
            }
            if ($object->isInitialized('descriptionColor') && null !== $object->getDescriptionColor()) {
                $data['description_color'] = $object->getDescriptionColor();
            }
            if ($object->isInitialized('backgroundPreference') && null !== $object->getBackgroundPreference()) {
                $data['background_preference'] = $object->getBackgroundPreference();
            }
            if ($object->isInitialized('backgroundImageAlignment') && null !== $object->getBackgroundImageAlignment()) {
                $data['background_image_alignment'] = $object->getBackgroundImageAlignment();
            }
            if ($object->isInitialized('backgroundImageUrl') && null !== $object->getBackgroundImageUrl()) {
                $data['background_image_url'] = $object->getBackgroundImageUrl();
            }
            if ($object->isInitialized('backgroundImageGuid') && null !== $object->getBackgroundImageGuid()) {
                $data['background_image_guid'] = $object->getBackgroundImageGuid();
            }
            if ($object->isInitialized('avatarImageUrl') && null !== $object->getAvatarImageUrl()) {
                $data['avatar_image_url'] = $object->getAvatarImageUrl();
            }
            if ($object->isInitialized('avatarImageGuid') && null !== $object->getAvatarImageGuid()) {
                $data['avatar_image_guid'] = $object->getAvatarImageGuid();
            }
            if ($object->isInitialized('defaultButtonBackgroundColor') && null !== $object->getDefaultButtonBackgroundColor()) {
                $data['default_button_background_color'] = $object->getDefaultButtonBackgroundColor();
            }
            if ($object->isInitialized('defaultButtonTextColor') && null !== $object->getDefaultButtonTextColor()) {
                $data['default_button_text_color'] = $object->getDefaultButtonTextColor();
            }
            if ($object->isInitialized('defaultButtonShape') && null !== $object->getDefaultButtonShape()) {
                $data['default_button_shape'] = $object->getDefaultButtonShape();
            }
            if ($object->isInitialized('defaultButtonShadow') && null !== $object->getDefaultButtonShadow()) {
                $data['default_button_shadow'] = $object->getDefaultButtonShadow();
            }
            if ($object->isInitialized('defaultSocialIconColor') && null !== $object->getDefaultSocialIconColor()) {
                $data['default_social_icon_color'] = $object->getDefaultSocialIconColor();
            }
            if ($object->isInitialized('defaultSocialIconLayout') && null !== $object->getDefaultSocialIconLayout()) {
                $data['default_social_icon_layout'] = $object->getDefaultSocialIconLayout();
            }
            if ($object->isInitialized('defaultSocialIconPosition') && null !== $object->getDefaultSocialIconPosition()) {
                $data['default_social_icon_position'] = $object->getDefaultSocialIconPosition();
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
            return [\Bitly\Model\BitlySiteAppearance::class => false];
        }
    }
}
