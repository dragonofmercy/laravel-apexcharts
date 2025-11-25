<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\AxisAbstract;
use ApexCharts\Enums\XAxisType;
use ApexCharts\Options\XAxis\Labels;

class XAxis extends AxisAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis'));
        parent::__construct($options);
    }

    /**
     * Sets the type option.
     *
     * @param XAxisType $type The type to set.
     * @return static Returns the current instance with the updated type option.
     */
    public function type(XAxisType $type): static
    {
        return $this->setOption('type', $type);
    }

    /**
     * Sets the labels option.
     *
     * @param bool|Labels $value Indicates whether to show labels or an instance of Labels for configuration.
     * @return static Returns the current instance with the
     */
    public function labels(bool|Labels $value)
    {
        if(is_bool($value)){
            return $this->setOption('labels.show', $value);
        } else {
            return $this->setOption('labels', $value);
        }
    }
}