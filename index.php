<?php
    function greeklish($string) {
        $greek_characters = array('α','ά','Ά','Α','β','Β','γ','Γ','δ','Δ','ε','έ','Ε','Έ','ζ','Ζ','η','ή','Η','θ','Θ',
        'ι','ί','ϊ','ΐ','Ι','Ί','κ','Κ','λ','Λ','μ','Μ','ν','Ν','ξ','Ξ','ο','ό','Ο','Ό','π','Π','ρ','Ρ','σ',
        'ς','Σ','τ','Τ','υ','ύ','Υ','Ύ','φ','Φ','χ','Χ','ψ','Ψ','ω','ώ','Ω','Ώ');
        $greeklish_characters = array('a', 'a','A','A','b','B','g','G','d','D','e','e','E','E','z','Z','i','i','I','th','Th',
        'i','i','i','i','I','I','k','K','l','L','m','M','n','N','x','X','o','o','O','O','p','P' ,'r','R','s',
        's','S','t','T','u','u','Y','Y','f','F','x','X','ps','Ps','o','o','O','O');
        $string = str_replace($greek_characters, $greeklish_characters, $string);
        $string = strtolower(str_replace(' ','-',$string));
        return $string;
    }
    $title = 'ΔΟΚΙΜΑΣΤΙΚΟΣ ΤΙΤΛΟΣ ΟΛΑ ΜΕ ΚΕΦΑΛΑΙΑ ΓΙΑΤΙ ΜΟΥ ΤΗΝ ΕΔΩΣΕ Η ΚΑΡΑΝΤΙΝΑ';
    $slug = greeklish($title);
    $id = 101;
    $slug = $id . '-' . $slug;
    echo '<H1>' . $slug . '</H1>';
?>