<?php

class App_Aspect_Transaction implements BEAR_Aspect_Around_Interface
{
    /**
     * {@inheritdoc}
     */
    public function around(array $values, BEAR_Aspect_JoinPoint $joinPoint)
    {
        // pre process
        $obj = $joinPoint->getObject();
        $db = $obj->getDb();
        $db->beginTransaction();
        //　proceed original method
        $result = $joinPoint->proceed($values);
        // post process
        if (! MDB2::isError($result)) {
            $db->commit();
        } else {
            $db->rollback();
        }

        return $result;
    }
}
