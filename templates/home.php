<?php namespace ProcessWire;

/** @var Page $page */

/**
 * Home template
 *
 */

include("./head.inc"); 

echo $page->get('body');

include("./foot.inc"); 

