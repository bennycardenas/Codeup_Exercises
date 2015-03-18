<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));

    $contentsArray = explode("\n", $contents);
    // print_r($contentsArray);

    $contentsArray = array_filter($contentsArray);
    // print_r($contentsArray);

	    foreach ($contentsArray as $key) {
	    	$contentsArray[] = explode("|", $key);
    		array_shift($contentsArray);
    		// print_r($contentsArray);
	    } 

	    $indexName = array("name", "number");
	    foreach ($contentsArray as $innerArray) {
	    	$contactListing = array_combine($indexName, $innerArray);
	    		// print_r($contactListing);
	    	$contactListing["number"] = substr($contactListing["number"], 0, 3) . "-" . substr($contactListing["number"], 3, 3) . "-" . substr($contactListing["number"], 6);
	    	$contacts[] = $contactListing;
	    	// print_r($contacts);
	    }

    fclose($handle);
    return $contacts;
}

// use print_r instead of var_dump to make output look nicer
var_dump(parseContacts('contacts.txt'));




