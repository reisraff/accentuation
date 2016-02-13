<?php

namespace Tests\Accentuation;

use Accentuation\Accentuation;

class AccentuationTest extends \PHPUnit_Framework_TestCase
{
    public function testAssertAccentsIsBeingRemoved()
    {
        $this->assertEquals($this->remove('À'), 'A');
        $this->assertEquals($this->remove('Á'), 'A');
        $this->assertEquals($this->remove('Â'), 'A');
        $this->assertEquals($this->remove('Ã'), 'A');
        $this->assertEquals($this->remove('Ä'), 'Ae');
        $this->assertEquals($this->remove('Å'), 'A');
        $this->assertEquals($this->remove('Æ'), 'A');
        $this->assertEquals($this->remove('Ă'), 'A');
        $this->assertEquals($this->remove('Ą'), 'A');
        $this->assertEquals($this->remove('ą'), 'a');
        $this->assertEquals($this->remove('à'), 'a');
        $this->assertEquals($this->remove('á'), 'a');
        $this->assertEquals($this->remove('â'), 'a');
        $this->assertEquals($this->remove('ã'), 'a');
        $this->assertEquals($this->remove('ä'), 'ae');
        $this->assertEquals($this->remove('å'), 'a');
        $this->assertEquals($this->remove('ă'), 'a');
        $this->assertEquals($this->remove('æ'), 'ae');
        $this->assertEquals($this->remove('þ'), 'b');
        $this->assertEquals($this->remove('Þ'), 'B');
        $this->assertEquals($this->remove('Ç'), 'C');
        $this->assertEquals($this->remove('ç'), 'c');
        $this->assertEquals($this->remove('Ć'), 'C');
        $this->assertEquals($this->remove('ć'), 'c');
        $this->assertEquals($this->remove('È'), 'E');
        $this->assertEquals($this->remove('É'), 'E');
        $this->assertEquals($this->remove('Ê'), 'E');
        $this->assertEquals($this->remove('Ë'), 'E');
        $this->assertEquals($this->remove('Ę'), 'E');
        $this->assertEquals($this->remove('ę'), 'e');
        $this->assertEquals($this->remove('è'), 'e');
        $this->assertEquals($this->remove('é'), 'e');
        $this->assertEquals($this->remove('ê'), 'e');
        $this->assertEquals($this->remove('ë'), 'e');
        $this->assertEquals($this->remove('Ğ'), 'G');
        $this->assertEquals($this->remove('ğ'), 'g');
        $this->assertEquals($this->remove('Ì'), 'I');
        $this->assertEquals($this->remove('Í'), 'I');
        $this->assertEquals($this->remove('Î'), 'I');
        $this->assertEquals($this->remove('Ï'), 'I');
        $this->assertEquals($this->remove('İ'), 'I');
        $this->assertEquals($this->remove('ı'), 'i');
        $this->assertEquals($this->remove('ì'), 'i');
        $this->assertEquals($this->remove('í'), 'i');
        $this->assertEquals($this->remove('î'), 'i');
        $this->assertEquals($this->remove('ï'), 'i');
        $this->assertEquals($this->remove('Ł'), 'L');
        $this->assertEquals($this->remove('ł'), 'l');
        $this->assertEquals($this->remove('Ñ'), 'N');
        $this->assertEquals($this->remove('Ń'), 'N');
        $this->assertEquals($this->remove('ń'), 'n');
        $this->assertEquals($this->remove('Ò'), 'O');
        $this->assertEquals($this->remove('Ó'), 'O');
        $this->assertEquals($this->remove('Ô'), 'O');
        $this->assertEquals($this->remove('Õ'), 'O');
        $this->assertEquals($this->remove('Ö'), 'Oe');
        $this->assertEquals($this->remove('Ø'), 'O');
        $this->assertEquals($this->remove('ö'), 'oe');
        $this->assertEquals($this->remove('ø'), 'o');
        $this->assertEquals($this->remove('ð'), 'o');
        $this->assertEquals($this->remove('ñ'), 'n');
        $this->assertEquals($this->remove('ò'), 'o');
        $this->assertEquals($this->remove('ó'), 'o');
        $this->assertEquals($this->remove('ô'), 'o');
        $this->assertEquals($this->remove('õ'), 'o');
        $this->assertEquals($this->remove('Š'), 'S');
        $this->assertEquals($this->remove('š'), 's');
        $this->assertEquals($this->remove('Ş'), 'S');
        $this->assertEquals($this->remove('ș'), 's');
        $this->assertEquals($this->remove('Ș'), 'S');
        $this->assertEquals($this->remove('ş'), 's');
        $this->assertEquals($this->remove('ß'), 'ss');
        $this->assertEquals($this->remove('Ś'), 'S');
        $this->assertEquals($this->remove('ś'), 's');
        $this->assertEquals($this->remove('ț'), 't');
        $this->assertEquals($this->remove('Ț'), 'T');
        $this->assertEquals($this->remove('Ù'), 'U');
        $this->assertEquals($this->remove('Ú'), 'U');
        $this->assertEquals($this->remove('Û'), 'U');
        $this->assertEquals($this->remove('Ü'), 'Ue');
        $this->assertEquals($this->remove('ù'), 'u');
        $this->assertEquals($this->remove('ú'), 'u');
        $this->assertEquals($this->remove('û'), 'u');
        $this->assertEquals($this->remove('ü'), 'ue');
        $this->assertEquals($this->remove('Ý'), 'Y');
        $this->assertEquals($this->remove('ý'), 'y');
        $this->assertEquals($this->remove('ý'), 'y');
        $this->assertEquals($this->remove('ÿ'), 'y');
        $this->assertEquals($this->remove('Ž'), 'Z');
        $this->assertEquals($this->remove('ž'), 'z');
        $this->assertEquals($this->remove('Ż'), 'Z');
        $this->assertEquals($this->remove('ż'), 'z');
        $this->assertEquals($this->remove('Ź'), 'Z');
        $this->assertEquals($this->remove('ź'), 'z');
    }

    private function remove($str)
    {
        return Accentuation::remove($str);
    }
}
