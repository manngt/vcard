<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;

class VCardController extends Controller
{
    public function show($id)
    {
        $vcard = new VCard();

// define variables
        $lastname = 'Desloovere';
        $firstname = 'Jeroen';
        $additional = '';
        $prefix = '';
        $suffix = '';

// add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

// add work data
        $vcard->addCompany('Siesqo');
        $vcard->addJobtitle('Web Developer');
        $vcard->addRole('Data Protection Officer');
        $vcard->addEmail('info@jeroendesloovere.be');
        $vcard->addPhoneNumber(1234121212, 'PREF;WORK');
        $vcard->addPhoneNumber(123456789, 'WORK');
        $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
        //$vcard->addURL('http://www.jeroendesloovere.be');

        //$vcard->addPhoto('https://lorempixel.com/100/100/people/3/');

// return vcard as a string
//return $vcard->getOutput();

// return vcard as a download
        return $vcard->download();

// save vcard on disk
//return $vcard->setSavePath('/');
//$vcard->save();
    }
}
