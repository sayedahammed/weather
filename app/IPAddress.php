<?php


class IPAddress
{
    public static function getUserIP(): string
    {
       return $_SERVER['REMOTE_ADDR'] ?? '';
    }
}