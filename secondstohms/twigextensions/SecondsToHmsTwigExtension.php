<?php

namespace Craft;

class SecondsToHmsTwigExtension extends \Twig_Extension
{
    private $params = array(
        "leadingZeros" => "minutes",
        "showHours" => false,
    );

    public function getName()
    {
        return 'Seconds To Hms';
    }

    public function getFilters()
    {
        return array("secondsToHms" => new \Twig_Filter_Method($this, "secondsToHms"));
    }

    public function secondsToHms($seconds, $params = array()) {
        $this->params = array_merge($this->params, $params);
        $t = round($seconds);

        switch ($this->params["leadingZeros"]) {
            case "minutes":
                $hoursFormat = "%d";
                $minutesFormat = "%02d";
                $secondsFormat = "%02d";
                break;
            case "seconds":
                $hoursFormat = "%d";
                $minutesFormat = "%d";
                $secondsFormat = "%02d";
                break;
            case "hours":
            default:
                $hoursFormat = "%02d";
                $minutesFormat = "%02d";
                $secondsFormat = "%02d";
                break;
        }

        if ($this->params["showHours"]) {
            return sprintf("{$hoursFormat}:{$minutesFormat}:{$secondsFormat}", ($t/3600),($t/60%60), $t%60);
        } else {
            return sprintf("{$minutesFormat}:{$secondsFormat}", ($t/60), $t%60);
        }
    }
}