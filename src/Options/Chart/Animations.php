<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;

class Animations extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.animations'));
        $this->setOption('enabled', true);

        parent::__construct($options);
    }

    /**
     * Sets the speed option and enables it.
     *
     * @param int $value The speed value to set.
     * @return static The current instance for method chaining.
     */
    public function speed(int $value): static
    {
        return $this->setOption('speed', $value);
    }

    /**
     * Configures the gradual animation settings.
     *
     * @param bool|int $value If a boolean is provided, it enables or disables animation. If an integer is provided, it sets the delay for the animation.
     * @return static Returns the instance with the updated animation settings.
     */
    public function animateGradually(bool|int $value): static
    {
        if(is_bool($value)){
            return $this->setOption('animateGradually.enabled', $value);
        } else {
            $this->setOption('animateGradually.enabled', true);
            return $this->setOption('animateGradually.delay', $value);
        }
    }

    /**
     * Configures the dynamic animation settings.
     *
     * @param bool|int $value If a boolean is provided, it enables or disables the dynamic animation.
     *                        If an integer is provided, it enables the dynamic animation and sets the speed.
     * @return static Returns the current instance for method chaining.
     */
    public function dynamicAnimation(bool|int $value): static
    {
        if(is_bool($value)){
            return $this->setOption('dynamicAnimation.enabled', $value);
        } else {
            $this->setOption('dynamicAnimation.enabled', true);
            return $this->setOption('dynamicAnimation.speed', $value);
        }
    }
}