<?php

/**
 * Class CompositeEncodingAlgorithm
 */
class CompositeEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * @var EncodingAlgorithm[]
     */
    private $algorithms;

    /**
     * CompositeEncodingAlgorithm constructor
     */
    public function __construct()
    {
        $this->algorithms = array();
    }

    /**
     * @param EncodingAlgorithm $algorithm
     */
    public function add(EncodingAlgorithm $algorithm)
    {
        $this->algorithms[] = $algorithm;
    }

    /**
     * Encodes text using multiple Encoders (in orders encoders were added)
     *
     * @param string $text
     * @return string
     */
    public function encode($text)
    {
        // not sure if im supposed to be adding the other algorithms directly or not
         $this->add('OffsetEncodingAlgorithm');
         $this->add('SubstitutionEncodingAlgorithm');

        $completed_text = $text;
         foreach ($this->algorithms as $algorithm) {
           $instance = new $algorithm;
           $completed_text = $instance->encode($completed_text); // the '=' replaces the string with the newly encoded value for each loop
         }

        return $completed_text; // will return text after it has been repeated encoded with the entire list of algorithms in array
    }
}
