<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartType;

class Serie extends OptionsAbstract
{
    /**
     * Sets the name option for the current instance.
     *
     * @param string $name The name to set.
     * @return static
     */
    public function name(string $name): static
    {
        return $this->setOption('name', $name);
    }

    /**
     * Sets the data option for the chart.
     *
     * @param array $data The data to be used for the chart.
     * @return static
     */
    public function data(array $data): static
    {
        return $this->setOption('data', $data);
    }

    /**
     * Sets the chart type.
     *
     * @param ChartType $type The chart type to be set.
     * @return static Returns the current instance for method chaining.
     */
    public function type(ChartType $type): static
    {
        return $this->setOption('type', $type);
    }

    /**
     * Sets the color option for the instance.
     *
     * @param string $color The color value to set.
     * @return static Returns the current instance for method chaining.
     */
    public function color(string $color): static
    {
        return $this->setOption('color', $color);
    }

    /**
     * Sets the hidden option.
     *
     * @param bool $hidden Determines whether the item should be hidden.
     * @return static Returns the current instance for method chaining.
     */
    public function hidden(bool $hidden): static
    {
        return $this->setOption('hidden', $hidden);
    }

    /**
     *
     * @param string $group The group name to set.
     * @return static
     */
    public function group(string $group): static
    {
        return $this->setOption('group', $group);
    }

    /**
     * Sets the z-index for the element.
     *
     * @param int $zIndex The z-index value to set.
     * @return static
     */
    public function zIndex(int $zIndex): static
    {
        return $this->setOption('zIndex', $zIndex);
    }

    /**
     * Creates a new instance with optional configurations.
     *
     * @param array|null $options An associative array of options where keys match method names and values are passed as arguments to the methods.
     * @return static Returns a new instance configured with the provided options, or the default instance if no options are given.
     */
    public static function make(?array $options = null): static
    {
        $objSerie = parent::make();

        if(null === $options){
            return $objSerie;
        }

        foreach($options as $k => $v){
            if(method_exists($objSerie, $k)){
                $objSerie->$k($v);
            }
        }

        return $objSerie;
    }
}