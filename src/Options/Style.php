<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class Style extends OptionsAbstract
{
    /**
     * Sets the font size option for the instance.
     *
     * @param string $fontSize The font size to be applied.
     * @return static
     */
    public function fontSize(string $fontSize): static
    {
        return $this->setOption('fontSize', $fontSize);
    }

    /**
     * Sets the font weight option for the instance.
     *
     * @param string|int $fontWeight The font weight to be applied.
     * @return static
     */
    public function fontWeight(string|int $fontWeight): static
    {
        return $this->setOption('fontWeight', $fontWeight);
    }

    /**
     * Sets the font family option.
     *
     * @param string $fontFamily The font family to be applied.
     * @return static
     */
    public function fontFamily(string $fontFamily): static
    {
        return $this->setOption('fontFamily', $fontFamily);
    }

    /**
     * Sets the color option for the instance.
     *
     * @param string $color The color value to be set.
     * @return static
     */
    public function color(string $color): static
    {
        return $this->setOption('color', $color);
    }
}