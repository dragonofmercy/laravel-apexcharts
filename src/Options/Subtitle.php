<?php

namespace ApexCharts\Options;

class Subtitle extends Title
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.subtitle'));
        parent::__construct($options);
    }
}