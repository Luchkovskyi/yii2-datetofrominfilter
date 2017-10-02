<?php

namespace filterdatefromto\datetofrominfilter;
use kartik\daterange\DateRangePicker;
use yii\base\Component;

class DataTimeInGrid extends Component
{
    private $name;
    private $value;
    private $convertFormat;
    private $useWithAddon;
    private $format;
    private $separator;
    private $opens;

    public function __construct($name,$value="",$convertFormat=true,$useWithAddon=true,$format,$separator,$opens){
        $this->name = $name;
        $this->value = $value;
        $this->convertFormat = $convertFormat;
        $this->useWithAddon = $useWithAddon;
        $this->format = $format;
        $this->separator = $separator;
        $this->opens = $opens;
    }

    public function DateRangePickerOb()
    {
        return "<div class=\"input-group drp-container\" style='width: 210px;'>". DateRangePicker::widget([
                'name' => $this->name,
                'value' => "",
                'convertFormat' => true,
                'useWithAddon' => true,
                'pluginOptions' => [
                    'locale' => [
                        'format' => $this->format,
                        'separator' => $this->separator,
                    ],
                    'opens' => "right"
                ]
            ]) . "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar\"></i></span></div>";
    }

    public function DateTimeRagePickerOb()
    {
        return "<div class=\"input-group drp-container\" style='width: 340px;'>". DateRangePicker::widget([
                'name' => $this->name,
                'value' => "",
                'convertFormat' => true,
                'pluginOptions' => [
                    'timePicker' => true,
                    'timePickerIncrement' => 15,
                    'locale'=>['format'=>$this->format]
                ]
            ]) . "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar\"></i></span></div>";
    }

    public static function DateRangePicker($name, $format='m/d/Y', $separator)
        {
            return "<div class=\"input-group drp-container\" style='width: 210px;'>". DateRangePicker::widget([
                    'name' => $name,
                    'value' => "",
                    'convertFormat' => true,
                    'useWithAddon' => true,
                    'pluginOptions' => [
                        'locale' => [
                            'format' => $format,
                            'separator' => $separator,
                        ],
                        'opens' => "right"
                    ]
                ]) . "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar\"></i></span></div>";
        }

    public static function DateTimeRagePicker($name, $format='m/d/Y h:i A')
        {
            return "<div class=\"input-group drp-container\" style='width: 340px;'>". DateRangePicker::widget([
                    'name' => $name,
                    'value' => "",
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'timePicker' => true,
                        'timePickerIncrement' => 15,
                        'locale'=>['format'=>$format]
                    ]
                ]) . "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar\"></i></span></div>";
        }
}


