# secondstohms
Craft Twig Extension for converting seconds to hours, minutes, seconds

To install simply place the secondstohms directory in your Craft plugins directory and install in the control panel

#### Simple Usage
```
{{ 307|secondsToHms }}

// Returns 05:07
```

#### Usage With Options
```
{{ 4000|secondsToHms({ leadingZeros: "minutes", showHours: true }) }}

// Returns 1:06:40
```

#### Options
| Option | Values | Default | Explanation |
| --------- | ----------- | ----------- | ----------- |
| showHours | `true`, `false` | `false` | Whether or not to show hours |
| leadingZeros | `hours`, `minutes`, `seconds` | `minutes` | Where to start showing leading zeros |