<?php

namespace Carerix\Api\Rest;

class Query
{
    /**
     * Converts array into ordering string
     * @param array $params e.g. array('creationDate' => 'Descending')
     * @return string e.g. ({key=creationDate;sel=Descending})
     */
    public static function ordering(array $params)
    {
        if (empty($params)) {
            return '';
        }
        $array = [];
        foreach ($params as $k => $v) {
            $array[] = '{key=' . $k . ';sel=' . ucfirst(strtolower($v)) . '}';
        }
        return '(' . implode(',', $array) . ')';
    }

    /**
     * Converts args into qualifier string
     * @param array $args
     * @param array $parts
     * @return array
     */
    public static function argsToSql($args, $parts)
    {
        $sql = [];
        foreach ($parts as $k => $v) {
            $sql[] = $v . ' = ' . self::quoteSql($args[$k]);
        }
        return $sql;
    }

    /**
     * Escape qualifier value
     * @param  $value
     * @return string
     */
    public static function quoteSql($value)
    {
        if (is_int($value)) {
            $sql = $value;
        } else {
            $sql = '"' . $value . '"';
        }

        return $sql;
    }
}
