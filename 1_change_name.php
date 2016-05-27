<?php
class transliteration
{
    /**
     * �������������� ������������ � ������������ � ������������� ���������� Doc 9303, 
     * ��������������� ���� 
     * (ICAO � International Civil Aviation Organization)
     */
    public $ru;
    
    public function __construct ($ru)
    {
        $this -> ru = $ru;
    }
    
    public function transliterationAct () 
    {
        
        $transliterationMap = array('�' => 'a',
                                    '�' => 'b',
                                    '�' => 'v',
                                    '�' => 'g',
                                    '�' => 'd',
                                    '�' => 'e',
                                    '�' => 'e',
                                    '�' => 'zh',
                                    '�' => 'z',
                                    '�' => 'i',
                                    '�' => 'i',
                                    '�' => 'k',
                                    '�' => 'l',
                                    '�' => 'm',
                                    '�' => 'n',
                                    '�' => 'o',
                                    '�' => 'p',
                                    '�' => 'r',
                                    '�' => 's',
                                    '�' => 't',
                                    '�' => 'u',
                                    '�' => 'f',
                                    '�' => 'kh',
                                    '�' => 'ts',
                                    '�' => 'ch',
                                    '�' => 'sh',
                                    '�' => 'shch',
                                    '�' => 'ie',
                                    '�' => 'y',
                                    '�' => '',
                                    '�' => 'e',
                                    '�' => 'iu',
                                    '�' => 'ia',
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
                                    '�' => 'g',
                                    '�' => 'ie',
                                    '�' => 'i',
                                    '�' => 'yi',
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

$transliteration_obj = new transliteration('���������� ������� English');
echo ($transliteration_obj->transliterationAct());
?>