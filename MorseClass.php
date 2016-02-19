<?php

/**
 * Morse Alphabet Class
 *
 * @author: Ahmet Işıtan Narlı
 * @mail: ahmetisitannarli@gmail.com
 * @git: https://github.com/isitannarli
 * @create: 18/02/2016
 */

class MorseClass
{

    /**
     * @var array
     */
    private static $alphabet = array(
        'A' => '.-',
        'B' => '-...',
        'C' => '-.-.',
        'D' => '-..',
        'E' => '.',
        'F' => '..-.',
        'G' => '--.',
        'H' => '....',
        'I' => '..',
        'J' => '.---',
        'K' => '-.-',
        'L' => '.-..',
        'M' => '--',
        'N' => '-.',
        'O' => '---',
        'P' => '.--.',
        'Q' => '--.-',
        'R' => '.-.',
        'S' => '...',
        'T' => '-',
        'U' => '..-',
        'V' => '...-',
        'W' => '.--',
        'X' => '-..-',
        'Y' => '-.--',
        'Z' => '--..',
        '0' => '-----',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',
        '.' => '.-.-.-',
        ',' => '--..--',
        '?' => '..--..',
        ':' => '---...',
        "'" => '.----.',
        '"' => '.-..-.',
        '-' => '-....-',
        '/' => '-..-.',
        '(' => '-.--.',
        ')' => '-.--.-',
        'Ä' => '.-.-',
        'Á' => '.--.-',
        'Å' => '.--.-',
        'Ch' => '----',
        'É' => '..-..',
        'Ñ' => '--.--',
        'Ö' => '---.',
        'Ü' => '..--',
    );

    /**
     * @return array
     */
    public function alphabet()
    {
        $this->rev_morse = array_flip(self::$alphabet);
        return $this->rev_morse;
    }

    /**
     * @param $content
     * @return string
     */
    public function text_to_morse($content)
    {

        $this->content = strtoupper($content);

        $words = preg_split("/\s+/", $this->content);

        $words_out = array();

        foreach($words as $word)
        {

            $bits = array();

            for($i=0; $i<strlen($word); $i++)
            {

                $temp = self::$alphabet[substr($word,$i,1)];
                if ($temp) $bits[] = $temp;
            }

            $words_out[] = implode(' ', $bits);

        }

        return implode(' / ', $words_out);

    }

    /**
     * @param $content
     * @return mixed
     */
    public function morse_to_text($content)
    {

        $this->content = $content;

        if(strstr($this->content, ' '))
        {
            $bits = explode(' ', $this->content);

            foreach($bits as $bit)
            {

                if ($bit == '/')
                    $this->out .= " ";
                else
                    @$this->out .= strtolower(array_search($bit, self::$alphabet));

            }

        }
        else
        {
            @$this->out .= strtolower(array_search($this->content, self::$alphabet));
        }

        return $this->out;

    }

}
