<?php

use Nhytros\Laravel\Readable\Readable;

/**
 * Get Readable Integer Number
 *
 * @param int $input
 * @optional string $delimeter (default ,)
 * @return string
 **/
function ReadableNumber(int $input, string $delimiter = ','): string
{
    return Readable::getNumber($input, $delimiter);
}

/**
 * Get Readable Social Number
 *
 * @param int|double|float $input
 * @optional string $lang (default en)
 * @return string
 **/
function ReadableNumberToString($input, string $lang = 'en'): string
{
    return Readable::getNumberToString($input, $lang);
}

/**
 * Get Readable Social Number
 *
 * @param int $input
 * @optional bool $showDecimal (default false)
 * @optional int $decimals (default 0)
 * @return string
 **/
function ReadableHumanNumber(int $input, bool $showDecimal = false, int $decimals = 0): string
{
    return Readable::getHumanNumber($input, $showDecimal, $decimals);
}

/**
 * Get Readable Decimal Number
 *
 * @param int $input
 * @optional int $decimals (default 2)
 * @optional string $point (default .)
 * @optional string $delimiter (default ,)
 * @return string
 **/
function ReadableDecimal($input, int $decimals = 2, string $point = '.', string $delimiter = ','): ?string
{
    return Readable::getDecimal($input, $decimals, $point, $delimiter);
}

/**
 * Get Readable ( Decimal Number => Decimal || Integer )
 *
 * @param int $input
 * @optional int $decimals_length (default 2)
 * @optional string $point (default .)
 * @optional string $delimiter (default ,)
 * @return string
 **/
function ReadableDecInt($input, int $decimals_length = 2, string $point = '.', string $delimiter = ','): ?string
{
    return Readable::getDecInt($input, $decimals_length, $point, $delimiter);
}

// Date and Time

/**
 * Get Readable Date
 *
 * @param int $input
 * @optional string $timezone (default null)
 * @return string
 **/
function ReadableDate($input, string $timezone = null): ?string
{
    return Readable::getDate($input, $timezone);
}

/**
 * Get Readable Time
 *
 * @param int|Carbon\Carbon $input
 * @optional bool $is12 (default false)
 * @optional bool $hasSeconds (default false)
 * @optional null|string $timezone (default null)
 * @return string
 **/
function ReadableTime($input, bool $is12 = false, bool $hasSeconds = false, string $timezone = null): ?string
{
    return Readable::getTime($input, $is12, $hasSeconds, $timezone);
}

/**
 * Get Readable DateTime
 *
 * @param int|Carbon\Carbon $input
 * @optional bool $is12 (default false)
 * @optional bool $hasSeconds (default false)
 * @optional null|string $timezone (default null)
 * @return string
 **/
function ReadableDateTime($input, bool $is12 = false, bool $hasSeconds = false,  string $timezone = null): ?string
{
    return Readable::getDateTime($input, $is12, $hasSeconds, $timezone);
}

/**
 * Get Readable DateTime
 *
 * @param int|Carbon\Carbon $old
 * @optional null|int|Carbon\Carbon $new (default null)
 * @optional null|string $timezone (default null)
 * @return string
 **/
function ReadableDiffDateTime($old, $new = null, string $timezone = null): ?string
{
    return Readable::getDiffDateTime($old, $new, $timezone);
}

/**
 * Get Readable DateTime Length from Seconds
 *
 * @param int $input
 * @optional string $comma (default <space>)
 * @optional boolean $short (default false)
 * @return string
 **/
function ReadableTimeLength(int $input, string $comma = ' ', bool $short = false): ?string
{
    return Readable::getTimeLength($input, $comma, $short);
}

/**
 * Get Readable DateTime Length from DateTimes
 *
 * @param int|Carbon\Carbon $old
 * @optional null|int|Carbon\Carbon $new (default null)
 * @optional bool $full (default false)
 * @optional string $comma (default <space>)
 * @optional null|string $timezone (default null)
 * @return string
 **/
function ReadableDateTimeLength($old, $new = null, bool $full = false, string $comma = ' ', string $timezone = null): ?string
{
    return Readable::getDateTimeLength($old, $new, $full, $comma, $timezone);
}

// File sizes

/**
 * Get Readable File Size
 *
 * @param int $bytes
 * @optional bool $decimal (default true)
 * @return string
 **/
function ReadableSize(int $bytes, bool $decimal = true): ?string
{
    return Readable::getSize($bytes, $decimal);
}
