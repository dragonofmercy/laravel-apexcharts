<?php

namespace ApexCharts\Enums;

enum StrokeCurve: string
{
    case Straight = 'straight';
    case Smooth = 'smooth';
    case MonotoneCubic = 'monotoneCubic';
    case Stepline = 'stepline';
}