<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Align;
use ApexCharts\Enums\VerticalAlign;

class NoData extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.noData'));
        parent::__construct($options);
    }

    /**
     * @param string $value The text value to set.
     * @return static
     */
    public function text(string $value): static
    {
        return $this->setOption('text', $value);
    }

    /**
     * Aligns the object with the specified alignment value.
     *
     * @param Align $value The alignment value to be applied.
     * @return static
     */
    public function align(Align $value): static
    {
        return $this->setOption('align', $value);
    }

    /**
     * @param VerticalAlign $value The vertical alignment value to be set.
     * @return static
     */
    public function verticalAlign(VerticalAlign $value): static
    {
        return $this->setOption('verticalAlign', $value);
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