<?php
class transliteration
{
    /**
     * Transliteration is done in accordance with international standard Doc 9303, 
     * recommended by the International Civil Aviation Organization
     * (ICAO — International Civil Aviation Organization)
     */
    public $ru;
    
    public function __construct ($ru)
    {
        $this -> ru = $ru;
    }
    
    public function transliterationAct () 
    {
        
        $transliterationMap = array('а' => 'a',
                                    'б' => 'b',
                                    'в' => 'v',
                                    'г' => 'g',
                                    'д' => 'd',
                                    'е' => 'e',
                                    'ё' => 'e',
                                    'ж' => 'zh',
                                    'з' => 'z',
                                    'и' => 'i',
                                    'й' => 'i',
                                    'к' => 'k',
                                    'л' => 'l',
                                    'м' => 'm',
                                    'н' => 'n',
                                    'о' => 'o',
                                    'п' => 'p',
                                    'р' => 'r',
                                    'с' => 's',
                                    'т' => 't',
                                    'у' => 'u',
                                    'ф' => 'f',
                                    'х' => 'kh',
                                    'ц' => 'ts',
                                    'ч' => 'ch',
                                    'ш' => 'sh',
                                    'щ' => 'shch',
                                    'ъ' => 'ie',
                                    'ы' => 'y',
                                    'ь' => '',
                                    'э' => 'e',
                                    'ю' => 'iu',
                                    'я' => 'ia',
                                    ' ' => '-',
                                    'a' => 'a',
                                    'b' => 'b',
                                    'c' => 'c',
                                    'd' => 'd',
                                    'e' => 'e',
                                    'f' => 'f',
                                    'g' => 'g',
                                    'h' => 'h',
                                    'i' => 'i',
                                    'j' => 'j',
                                    'k' => 'k',
                                    'l' => 'l',
                                    'm' => 'm',
                                    'n' => 'n',
                                    'o' => 'o',
                                    'p' => 'p',
                                    'q' => 'q',
                                    'r' => 'r',
                                    's' => 's',
                                    't' => 't',
                                    'u' => 'u',
                                    'v' => 'v',
                                    'w' => 'w',
                                    'x' => 'x',
                                    'y' => 'y',
                                    'z' => 'z',
                                    'ґ' => 'g',
                                    'є' => 'ie',
                                    'і' => 'i',
                                    'ї' => 'yi',
                                    '\'' => '');

        $ru_array = mb_strtolower($this->ru);
        $ru_array = str_split($ru_array);
        $transliteration = '';
        for ($i = 0; $i < count($ru_array); $i++) {
            $transliteration .= $transliterationMap[$ru_array[$i]];
        }
        return $transliteration;
    }
}

$transliteration_obj = new transliteration('Український Русский English');
echo ($transliteration_obj->transliterationAct());
?>