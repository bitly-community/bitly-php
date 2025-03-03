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
    class LaunchpadAppearanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadAppearance::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadAppearance::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadAppearance();
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
            if (\array_key_exists('launchpad_id', $data)) {
                $object->setLaunchpadId($data['launchpad_id']);
                unset($data['launchpad_id']);
            }
            if (\array_key_exists('background', $data)) {
                $object->setBackground($data['background']);
                unset($data['background']);
            }
            if (\array_key_exists('bottom_background', $data)) {
                $object->setBottomBackground($data['bottom_background']);
                unset($data['bottom_background']);
            }
            if (\array_key_exists('launchpad_text_color', $data)) {
                $object->setLaunchpadTextColor($data['launchpad_text_color']);
                unset($data['launchpad_text_color']);
            }
            if (\array_key_exists('description_color', $data)) {
                $object->setDescriptionColor($data['description_color']);
                unset($data['description_color']);
            }
            if (\array_key_exists('avatar_image_url', $data)) {
                $object->setAvatarImageUrl($data['avatar_image_url']);
                unset($data['avatar_image_url']);
            }
            if (\array_key_exists('background_image_url', $data)) {
                $object->setBackgroundImageUrl($data['background_image_url']);
                unset($data['background_image_url']);
            }
            if (\array_key_exists('avatar_upload_image', $data)) {
                $object->setAvatarUploadImage($data['avatar_upload_image']);
                unset($data['avatar_upload_image']);
            }
            if (\array_key_exists('background_upload_image', $data)) {
                $object->setBackgroundUploadImage($data['background_upload_image']);
                unset($data['background_upload_image']);
            }
            if (\array_key_exists('font', $data)) {
                $object->setFont($data['font']);
                unset($data['font']);
            }
            if (\array_key_exists('display_name', $data)) {
                $object->setDisplayName($data['display_name']);
                unset($data['display_name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('hide_bitly_logo', $data)) {
                $object->setHideBitlyLogo($data['hide_bitly_logo']);
                unset($data['hide_bitly_logo']);
            }
            if (\array_key_exists('theme_id', $data)) {
                $object->setThemeId($data['theme_id']);
                unset($data['theme_id']);
            }
            if (\array_key_exists('layout', $data)) {
                $object->setLayout($data['layout']);
                unset($data['layout']);
            }
            if (\array_key_exists('button_appearance', $data)) {
                $object->setButtonAppearance($this->denormalizer->denormalize($data['button_appearance'], \Bitly\Model\LaunchpadButtonAppearance::class, 'json', $context));
                unset($data['button_appearance']);
            }
            if (\array_key_exists('style_preference', $data)) {
                $object->setStylePreference($data['style_preference']);
                unset($data['style_preference']);
            }
            if (\array_key_exists('background_image_alignment', $data)) {
                $object->setBackgroundImageAlignment($data['background_image_alignment']);
                unset($data['background_image_alignment']);
            }
            if (\array_key_exists('social_icon_color', $data)) {
                $object->setSocialIconColor($data['social_icon_color']);
                unset($data['social_icon_color']);
            }
            if (\array_key_exists('social_icon_layout_position', $data)) {
                $object->setSocialIconLayoutPosition($data['social_icon_layout_position']);
                unset($data['social_icon_layout_position']);
            }
            if (\array_key_exists('social_icon_position', $data)) {
                $object->setSocialIconPosition($data['social_icon_position']);
                unset($data['social_icon_position']);
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
            if ($object->isInitialized('launchpadId') && null !== $object->getLaunchpadId()) {
                $data['launchpad_id'] = $object->getLaunchpadId();
            }
            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $object->getBackground();
            }
            if ($object->isInitialized('bottomBackground') && null !== $object->getBottomBackground()) {
                $data['bottom_background'] = $object->getBottomBackground();
            }
            if ($object->isInitialized('launchpadTextColor') && null !== $object->getLaunchpadTextColor()) {
                $data['launchpad_text_color'] = $object->getLaunchpadTextColor();
            }
            if ($object->isInitialized('descriptionColor') && null !== $object->getDescriptionColor()) {
                $data['description_color'] = $object->getDescriptionColor();
            }
            if ($object->isInitialized('avatarImageUrl') && null !== $object->getAvatarImageUrl()) {
                $data['avatar_image_url'] = $object->getAvatarImageUrl();
            }
            if ($object->isInitialized('backgroundImageUrl') && null !== $object->getBackgroundImageUrl()) {
                $data['background_image_url'] = $object->getBackgroundImageUrl();
            }
            if ($object->isInitialized('avatarUploadImage') && null !== $object->getAvatarUploadImage()) {
                $data['avatar_upload_image'] = $object->getAvatarUploadImage();
            }
            if ($object->isInitialized('backgroundUploadImage') && null !== $object->getBackgroundUploadImage()) {
                $data['background_upload_image'] = $object->getBackgroundUploadImage();
            }
            if ($object->isInitialized('font') && null !== $object->getFont()) {
                $data['font'] = $object->getFont();
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['display_name'] = $object->getDisplayName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['hide_bitly_logo'] = $object->getHideBitlyLogo();
            if ($object->isInitialized('themeId') && null !== $object->getThemeId()) {
                $data['theme_id'] = $object->getThemeId();
            }
            if ($object->isInitialized('layout') && null !== $object->getLayout()) {
                $data['layout'] = $object->getLayout();
            }
            if ($object->isInitialized('buttonAppearance') && null !== $object->getButtonAppearance()) {
                $data['button_appearance'] = $this->normalizer->normalize($object->getButtonAppearance(), 'json', $context);
            }
            if ($object->isInitialized('stylePreference') && null !== $object->getStylePreference()) {
                $data['style_preference'] = $object->getStylePreference();
            }
            if ($object->isInitialized('backgroundImageAlignment') && null !== $object->getBackgroundImageAlignment()) {
                $data['background_image_alignment'] = $object->getBackgroundImageAlignment();
            }
            if ($object->isInitialized('socialIconColor') && null !== $object->getSocialIconColor()) {
                $data['social_icon_color'] = $object->getSocialIconColor();
            }
            if ($object->isInitialized('socialIconLayoutPosition') && null !== $object->getSocialIconLayoutPosition()) {
                $data['social_icon_layout_position'] = $object->getSocialIconLayoutPosition();
            }
            if ($object->isInitialized('socialIconPosition') && null !== $object->getSocialIconPosition()) {
                $data['social_icon_position'] = $object->getSocialIconPosition();
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
            return [\Bitly\Model\LaunchpadAppearance::class => false];
        }
    }
} else {
    class LaunchpadAppearanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadAppearance::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadAppearance::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadAppearance();
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
            if (\array_key_exists('launchpad_id', $data)) {
                $object->setLaunchpadId($data['launchpad_id']);
                unset($data['launchpad_id']);
            }
            if (\array_key_exists('background', $data)) {
                $object->setBackground($data['background']);
                unset($data['background']);
            }
            if (\array_key_exists('bottom_background', $data)) {
                $object->setBottomBackground($data['bottom_background']);
                unset($data['bottom_background']);
            }
            if (\array_key_exists('launchpad_text_color', $data)) {
                $object->setLaunchpadTextColor($data['launchpad_text_color']);
                unset($data['launchpad_text_color']);
            }
            if (\array_key_exists('description_color', $data)) {
                $object->setDescriptionColor($data['description_color']);
                unset($data['description_color']);
            }
            if (\array_key_exists('avatar_image_url', $data)) {
                $object->setAvatarImageUrl($data['avatar_image_url']);
                unset($data['avatar_image_url']);
            }
            if (\array_key_exists('background_image_url', $data)) {
                $object->setBackgroundImageUrl($data['background_image_url']);
                unset($data['background_image_url']);
            }
            if (\array_key_exists('avatar_upload_image', $data)) {
                $object->setAvatarUploadImage($data['avatar_upload_image']);
                unset($data['avatar_upload_image']);
            }
            if (\array_key_exists('background_upload_image', $data)) {
                $object->setBackgroundUploadImage($data['background_upload_image']);
                unset($data['background_upload_image']);
            }
            if (\array_key_exists('font', $data)) {
                $object->setFont($data['font']);
                unset($data['font']);
            }
            if (\array_key_exists('display_name', $data)) {
                $object->setDisplayName($data['display_name']);
                unset($data['display_name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('hide_bitly_logo', $data)) {
                $object->setHideBitlyLogo($data['hide_bitly_logo']);
                unset($data['hide_bitly_logo']);
            }
            if (\array_key_exists('theme_id', $data)) {
                $object->setThemeId($data['theme_id']);
                unset($data['theme_id']);
            }
            if (\array_key_exists('layout', $data)) {
                $object->setLayout($data['layout']);
                unset($data['layout']);
            }
            if (\array_key_exists('button_appearance', $data)) {
                $object->setButtonAppearance($this->denormalizer->denormalize($data['button_appearance'], \Bitly\Model\LaunchpadButtonAppearance::class, 'json', $context));
                unset($data['button_appearance']);
            }
            if (\array_key_exists('style_preference', $data)) {
                $object->setStylePreference($data['style_preference']);
                unset($data['style_preference']);
            }
            if (\array_key_exists('background_image_alignment', $data)) {
                $object->setBackgroundImageAlignment($data['background_image_alignment']);
                unset($data['background_image_alignment']);
            }
            if (\array_key_exists('social_icon_color', $data)) {
                $object->setSocialIconColor($data['social_icon_color']);
                unset($data['social_icon_color']);
            }
            if (\array_key_exists('social_icon_layout_position', $data)) {
                $object->setSocialIconLayoutPosition($data['social_icon_layout_position']);
                unset($data['social_icon_layout_position']);
            }
            if (\array_key_exists('social_icon_position', $data)) {
                $object->setSocialIconPosition($data['social_icon_position']);
                unset($data['social_icon_position']);
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
            if ($object->isInitialized('launchpadId') && null !== $object->getLaunchpadId()) {
                $data['launchpad_id'] = $object->getLaunchpadId();
            }
            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $object->getBackground();
            }
            if ($object->isInitialized('bottomBackground') && null !== $object->getBottomBackground()) {
                $data['bottom_background'] = $object->getBottomBackground();
            }
            if ($object->isInitialized('launchpadTextColor') && null !== $object->getLaunchpadTextColor()) {
                $data['launchpad_text_color'] = $object->getLaunchpadTextColor();
            }
            if ($object->isInitialized('descriptionColor') && null !== $object->getDescriptionColor()) {
                $data['description_color'] = $object->getDescriptionColor();
            }
            if ($object->isInitialized('avatarImageUrl') && null !== $object->getAvatarImageUrl()) {
                $data['avatar_image_url'] = $object->getAvatarImageUrl();
            }
            if ($object->isInitialized('backgroundImageUrl') && null !== $object->getBackgroundImageUrl()) {
                $data['background_image_url'] = $object->getBackgroundImageUrl();
            }
            if ($object->isInitialized('avatarUploadImage') && null !== $object->getAvatarUploadImage()) {
                $data['avatar_upload_image'] = $object->getAvatarUploadImage();
            }
            if ($object->isInitialized('backgroundUploadImage') && null !== $object->getBackgroundUploadImage()) {
                $data['background_upload_image'] = $object->getBackgroundUploadImage();
            }
            if ($object->isInitialized('font') && null !== $object->getFont()) {
                $data['font'] = $object->getFont();
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['display_name'] = $object->getDisplayName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['hide_bitly_logo'] = $object->getHideBitlyLogo();
            if ($object->isInitialized('themeId') && null !== $object->getThemeId()) {
                $data['theme_id'] = $object->getThemeId();
            }
            if ($object->isInitialized('layout') && null !== $object->getLayout()) {
                $data['layout'] = $object->getLayout();
            }
            if ($object->isInitialized('buttonAppearance') && null !== $object->getButtonAppearance()) {
                $data['button_appearance'] = $this->normalizer->normalize($object->getButtonAppearance(), 'json', $context);
            }
            if ($object->isInitialized('stylePreference') && null !== $object->getStylePreference()) {
                $data['style_preference'] = $object->getStylePreference();
            }
            if ($object->isInitialized('backgroundImageAlignment') && null !== $object->getBackgroundImageAlignment()) {
                $data['background_image_alignment'] = $object->getBackgroundImageAlignment();
            }
            if ($object->isInitialized('socialIconColor') && null !== $object->getSocialIconColor()) {
                $data['social_icon_color'] = $object->getSocialIconColor();
            }
            if ($object->isInitialized('socialIconLayoutPosition') && null !== $object->getSocialIconLayoutPosition()) {
                $data['social_icon_layout_position'] = $object->getSocialIconLayoutPosition();
            }
            if ($object->isInitialized('socialIconPosition') && null !== $object->getSocialIconPosition()) {
                $data['social_icon_position'] = $object->getSocialIconPosition();
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
            return [\Bitly\Model\LaunchpadAppearance::class => false];
        }
    }
}
