<?php

/**
 * Class CliColorizer
 *
 * Static Helperclass to colorize Strings for CLI-Output. Vaguely inspired of
 * https://www.if-not-true-then-false.com/2010/php-class-for-coloring-php-command-line-cli-scripts-output-php-output-colorizing-using-bash-shell-colors/
 * as I got the color codes from there
 *
 * TODO: Class to display string in a box of color x
 * TODO: Verify color codes (White is not white f.i)
 *
 * @category   helper
 * @version    1.0.0
 * @author     Vincent Fahrenholz <fahrenholz@numoon.net>
 * @package    None
 * @licence    M.I.T
 */
class CliColorizer {
    private static $foregroundColors = [
        'black' => '0;30',
        'dark_grey' => '1;30',
        'blue' => '0;34',
        'light_blue' => '1;34',
        'green' => '0;32',
        'light_green' => '1;32',
        'cyan' => '0;36',
        'light_cyan' => '1;36',
        'red' => '0;31',
        'light_red' => '1;31',
        'purple' => '0;35',
        'light_purple' => '1;35',
        'brown' => '0;33',
        'yellow' => '1;33',
        'light_grey' => '0;37',
        'white' => '1;37',
    ];

    private static $backgroundColors = [
        'black' => '40',
        'red' => '41',
        'green' => '42',
        'yellow' => '43',
        'blue' => '44',
        'magenta' => '45',
        'cyan' => '46',
        'light_grey' => '47',
    ];

    public static function colorize($string, $foregroundColor = null, $backgroundColor = null) {

        $isColorized = false;
        if ($backgroundColor != null && isset(self::$backgroundColors[$backgroundColor])) {
            $string = "\33[" . self::$backgroundColors[$backgroundColor] ."m". $string;
            $isColorized = true;
        }

        if ($foregroundColor != null && isset(self::$foregroundColors[$foregroundColor])) {
            $string = "\33[" . self::$foregroundColors[$foregroundColor] ."m". $string;
            $isColorized = true;
        }

        if ($isColorized) {
            $string .= "\033[0m";
        }

        return $string;
    }
}