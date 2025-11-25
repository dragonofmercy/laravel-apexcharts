<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Align;

class Title extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.title'));
        parent::__construct($options);
    }

    /**
     * @param string $text The text to be set as an option.
     * @return static
     */
    public function text(string $text): static
    {
        return $this->setOption('text', $text);
    }

    /**
     * Sets the alignment option.
     *
     * @param Align $align The alignment to be set.
     * @return static
     */
    public function align(Align $align): static
    {
        return $this->setOption('align', $align);
    }

    /**
     * @param int $margin Margin value to set.
     * @return static
     */
    public function margin(int $margin): static
    {
        return $this->setOption('margin', $margin);
    }

    /**
     * @param int $offsetX The horizontal offset value.
     * @return static
     */
    public function offsetX(int $offsetX): static
    {
        return $this->setOption('offsetX', $offsetX);
    }

    /**
     * @param int $offsetY The vertical offset value to be set.
     * @return static
     */
    public function offsetY(int $offsetY): static
    {
        return $this->setOption('offsetY', $offsetY);
    }

    /**
     * @param bool $floating Indicates whether the floating option should be enabled or not.
     * @return static
     */
    public function floating(bool $floating): static
    {
        return $this->setOption('floating', $floating);
    }

    /**
     * Sets the style option.
     *
     * @param Style $style The style to be set.
     * @return static
     */
    public function style(Style $style): static
    {
        return $this->setOption('style', $style);
    }
}