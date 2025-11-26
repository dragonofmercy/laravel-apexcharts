<?php

namespace ApexCharts\Options\Chart\Toolbar;

use ApexCharts\Abstracts\OptionsAbstract;

class Tools extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.toolbar.tools'));
        parent::__construct($options);
    }

    /**
     * Sets the download option.
     *
     * @param bool|string $value The value to be set for the download option.
     * @return static
     */
    public function download(bool|string $value): static
    {
        return $this->setOption('download', $value);
    }

    /**
     * Set the selection option.
     *
     * @param bool|string $value The value to set for the selection option.
     * @return static
     */
    public function selection(bool|string $value): static
    {
        return $this->setOption('selection', $value);
    }

    /**
     * Sets the zoom option.
     *
     * @param bool $value Indicates whether zoom is enabled or disabled.
     * @return static
     */
    public function zoom(bool $value = true): static
    {
        return $this->setOption('zoom', $value);
    }

    /**
     * Sets the zoom-in option.
     *
     * @param bool $value The value to enable or disable zoom-in.
     * @return static
     */
    public function zoomin(bool $value = true): static
    {
        return $this->setOption('zoomin', $value);
    }

    /**
     * Sets the zoom-out option.
     *
     * @param bool $value The value to enable or disable zoom-out.
     * @return static
     */
    public function zoomout(bool $value = true): static
    {
        return $this->setOption('zoomout', $value);
    }

    /**
     * Sets the pan option.
     *
     * @param bool $value Indicates whether panning is enabled.
     * @return static
     */
    public function pan(bool $value = true): static
    {
        return $this->setOption('pan', $value);
    }

    /**
     * Resets the specified option.
     *
     * @param bool $value Indicates whether to reset the option.
     * @return static
     */
    public function reset(bool $value = true): static
    {
        return $this->setOption('reset', $value);
    }

    /**
     * Sets the custom icons option with a filtered array of CustomIcon instances.
     *
     * @param array<CustomIcon> $value An array of custom icon objects to be filtered and set.
     * @return static
     */
    public function customIcons(array $value): static
    {
        $customIcons = [];

        foreach($value as $customIcon){
            if($customIcon instanceof CustomIcon){
                $customIcons[] = $customIcon;
            }
        }
        
        return $this->setOption('customIcons', $customIcons);
    }
}