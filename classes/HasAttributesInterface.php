<?php

interface HasAttributesInterface
{
    function attributes();

    function getAttribute(string $key);

    function setAttribute(string $key, $value);

    function appendAttribute(string $key, $value);

    function prependAttribute(string $key, $value);

    function __get($name);

    function __set($name, $value);
}