<?php

namespace App\Helpers;

class IdHelper 
{
    /**
     * Generate a unique random ID
     * 
     * @param int $length Length of the generated ID (default 16)
     * @param bool $uppercase Whether to include uppercase letters (default true)
     * @param bool $lowercase Whether to include lowercase letters (default true)
     * @param bool $numbers Whether to include numbers (default true)
     * @return string
     */
    public static function generateUniqueId(
        int $length = 16, 
        bool $uppercase = true, 
        bool $lowercase = true, 
        bool $numbers = true
    ): string {
        // Define character sets based on parameters
        $characterSets = [];
        
        if ($uppercase) {
            $characterSets[] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        
        if ($lowercase) {
            $characterSets[] = 'abcdefghijklmnopqrstuvwxyz';
        }
        
        if ($numbers) {
            $characterSets[] = '0123456789';
        }
        
        // Combine character sets
        $allCharacters = implode('', $characterSets);
        
        // Ensure we have characters to use
        if (empty($allCharacters)) {
            throw new \InvalidArgumentException('At least one character set must be enabled');
        }
        
        // Generate random string
        $randomString = '';
        $maxIndex = strlen($allCharacters) - 1;
        
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $allCharacters[random_int(0, $maxIndex)];
        }
        
        return $randomString;
    }

    /**
     * Generate a unique ID with timestamp prefix
     * 
     * @param int $length Length of the random part (default 10)
     * @return string
     */
    public static function generateTimestampedId(int $length = 10): string 
    {
        // Get current timestamp
        $timestamp = time();
        
        // Generate random string
        $randomPart = self::generateUniqueId($length);
        
        // Combine timestamp and random string
        return $timestamp . '-' . $randomPart;
    }

    /**
     * Generate a UUID-like unique identifier
     * 
     * @return string
     */
    public static function generateUuid(): string 
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            random_int(0, 0xffff), random_int(0, 0xffff),

            // 16 bits for "time_mid"
            random_int(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            random_int(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            random_int(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            random_int(0, 0xffff), random_int(0, 0xffff), random_int(0, 0xffff)
        );
    }
}