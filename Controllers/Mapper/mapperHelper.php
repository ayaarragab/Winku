<?php
class MapperHelper{
    public static function extractData($attrsArray, $object)
    {
        $reflectionClass = new ReflectionClass($object);
        $methods = $reflectionClass->getMethods();
        $columnsAndValues = array();
        foreach ($attrsArray as $attr => $value) {
            foreach ($methods as $method) {
                $methodName = $method->getName();
                if (strpos($methodName, 'get') === 0 && $method->getNumberOfParameters() === 0) {
                    if (stripos($attr, $methodName) !== false) {
                        $columnsAndValues[$attr] = $method->invoke($object);
                        break; // Exit the inner loop once the method is found
                    }
                }
            }
        }        
        return $columnsAndValues;
    }
}