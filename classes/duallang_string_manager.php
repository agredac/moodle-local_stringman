<?php


namespace local_duallang;


class duallang_string_manager extends \core_string_manager_standard
{
    /**
     * Implementation of the get_string() method to display both simplified Chinese and UK English simultaneously.
     *
     * @param string $identifier the identifier of the string to search for
     * @param string $component the component the string is provided by
     * @param string|object|array $a optional data placeholder
     * @param string $lang moodle translation language, null means use current
     * @return string
     */
    public function get_string($identifier, $component = '', $a = null, $lang = null) {

        $string = parent::get_string($identifier, $component, $a, 'en');

        $es_co = parent::get_string($identifier, $component, $a, 'es_co');

        if(strlen($es_co) > 0) {
            $string .= ' | ' . $es_co;
        }

        return $string;
    }

}