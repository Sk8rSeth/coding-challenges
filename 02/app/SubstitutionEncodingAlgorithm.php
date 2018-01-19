<?php

/**
 * Class SubstitutionEncodingAlgorithm
 */
class SubstitutionEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * @var array
     */
    private $substitutions;

    /**
     * SubstitutionEncodingAlgorithm constructor.
     * @param $substitutions
     */
    public function __construct(array $substitutions)
    {
        $this->substitutions = array('ab', 'cd', 'ef');
    }

    /**
     * Encodes text by substituting character with another one provided in the pair.
     * For example pair "ab" defines all "a" chars will be replaced with "b" and all "b" chars will be replaced with "a"
     * Examples:
     *      substitutions = ["ab"], input = "aabbcc", output = "bbaacc"
     *      substitutions = ["ab", "cd"], input = "adam", output = "bcbm"
     *
     * @param string $text
     * @return string
     */
    public function encode($text)
    {
        /**
         * @todo: Implement it
         */
         $sub_array = array();
         foreach ($this->substitutions as $value) {
           // splits sub pairs into nested sub arrays
          // string = 'ab';
          // $pairs = array(
          //    array (
          //        [0] => 'a',
          //        [1] => 'b'
          //    )
          // )
          //

          if (strlen($value) > 2) {
            throw new Exception("Substitution Pair Too Long", 1);
          } else {
            // $pair variable contained, instatiated and used within this forech loop scope
            $pair = str_split($value);
          }

          // starts and resets new_string each loop
          $new_string = '';
          for ($i=0; $i < $pair; $i++) {
            if ($i < 1) {
             //  these are explicit in order to ONLY except pairs like stated above. will not work with anything but 2 letter substitutions by design.
               $new_string .= str_replace($pair[0], $text, $pair[1]);
            } else {
               $new_string .= str_replace($pair[1], $text, $pair[0]);
            }

            // adds new_string to array of completed substitutions
            $sub_array[] = $new_string;
          }
         }

        return $sub_array;
    }
}
