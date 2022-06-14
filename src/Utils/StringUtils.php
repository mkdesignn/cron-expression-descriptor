<?php

namespace Mkdesignn\CronExpressionDescriptor\Utils;

trait StringUtils
{
    /**
     * @param string            $string
     * @param array|string|null $specialCharacters
     *
     * @return bool
     */
    public function stringContains(string $string, $specialCharacters): bool
    {
        if (is_array($specialCharacters)) {
            foreach ($specialCharacters as $character) {
                if (strpos($string, $character) !== false) {
                    return true;
                }
            }
        } else {
            return strpos($string, $specialCharacters) !== false;
        }

        return false;
    }
}
