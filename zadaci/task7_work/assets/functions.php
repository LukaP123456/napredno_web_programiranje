<?php

/**
 * Function returns actual script name with extension
 * @return string
 */
function getCurrentPage(): string
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}
