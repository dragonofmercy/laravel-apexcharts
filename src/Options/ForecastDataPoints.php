<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class ForecastDataPoints extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.forecastDataPoints'));
        parent::__construct($options);
    }

    /**
     * Sets the count option.
     *
     * @param int $value The value to set for the count option.
     * @return static
     */
    public function count(int $value): static
    {
        return $this->setOption('count', $value);
    }

    /**
     * Sets the fill opacity.
     *
     * @param float $value The opacity value to set, typically between 0 and 1.
     * @return static
     */
    public function fillOpacity(float $value): static
    {
        return $this->setOption('fillOpacity', $value);
    }

    /**
     * Sets the strokeWidth option.
     *
     * @param int $value The stroke width value to set.
     * @return static
     */
    public function strokeWidth(int $value): static
    {
        return $this->setOption('strokeWidth', $value);
    }

    /**
     * Sets the dash array option.
     *
     * @param int $value The value of the dash array.
     * @return static
     */
    public function dashArray(int $value): static
    {
        return $this->setOption('dashArray', $value);
    }
}