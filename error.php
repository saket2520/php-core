<?php

/**Throwable interface is the base interface of all the objects that can be thrown via the throw statement in php.
 * Php classes cannot directly implement the Throwable interface rather they can extend the Exception and Error classes
 * that internally implement the throwable interface.
 */


interface Throwable
{
    /**
     * gets the integer code of the error type
     */
    abstract public function getCode(void):int

    /**
     * gets the error message
     */
    abstract public function getMessage(void):string

    /**
     * gets the name of the file in which the error object is defined
     */
    abstract public function getFile(void):string

    /**
     * gets the line number where the object is instantiated
     */
    abstract public function getFile(void):string

    /**
     * gets the stack trace
     */
    abstract public function getTrace(void):array

    /**
     * gets the stack trace as a string
     */
    abstract public function getTraceAsString:string

    /**
     * returns previous throwable object
     */
    abstract public function getPrevious:Throwable

    /**
     * returns string description of the throwable object
     */
    abstract public function __toString(void):string

}
