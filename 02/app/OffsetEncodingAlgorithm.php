<?php

/**
 * Class OffsetEncodingAlgorithm
 */
class OffsetEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * Lookup string
     */
    const CHARACTERS = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * @var int
     */
    private $offset;

    /**
     * @param int $offset
     */
    public function __construct($offset = 13)
    {
        $this->offset = $offset;
    }

    /**
     * Encodes text by shifting each character (existing in the lookup string) by an offset (provided in the constructor)
     * Examples:
     *      offset = 1, input = "a", output = "b"
     *      offset = 2, input = "z", output = "B"
     *      offset = 1, input = "Z", output = "a"
     *
     * @param string $text
     * @return string
     */
    public function encode($text)
    {
        //returns if offset by 0
        if ($this->offset === 0) {
         return $text;
        }
        $output_string = '';

        for ($i = 0; $i < strlen($text); $i++) {
          // ord converts string to acii equivilant integer
          $chars = ord($text[$i]);

          //chr() converts ord back to string
          $encoded = chr($chars + $this->offset);

          // append encoded charactes
          $output_string .= $encoded;
        }

        return $output_string;
    }
}
