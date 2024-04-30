<?php
require_once '../Mapper/mapperInterface.php';
class QuestionMapper implements Mapper{
    public static function add($object){}
    public static function edit($uniqueIdentifier, $arrOfKeyValue, $UniqueIdentifierName){}
    public static function delete($uniqueIdentifier, $UniqueIdentifierNameobjectId){}
    public static function selectObjectAsArray($UniqueIdentifier, $UniqueIdentifierName){}
    public static function selectSpecificAttr($uniqueIdentifier, $UniqueIdentifierName, $attrname){}
}