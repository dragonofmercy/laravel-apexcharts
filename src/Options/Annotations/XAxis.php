<?php

namespace ApexCharts\Options\Annotations;

use ApexCharts\Abstracts\Options\AnnotationsAxisAbstract;
use ApexCharts\Enums\Orientation;

class XAxis extends AnnotationsAxisAbstract
{
    public function x(mixed $value): static
    {
        return $this->setOption('x', $value);
    }

    public function x2(mixed $value): static
    {
        return $this->setOption('x2', $value);
    }

    public function labelOrientation(Orientation $value): static
    {
        return $this->setOption('label.orientation', $value);
    }
}