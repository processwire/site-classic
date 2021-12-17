<?php namespace ProcessWire;

/** @var Page $page */

/**
 * Page template
 *
 */

include("./head.inc"); 

echo $page->get('body');

include("./foot.inc"); 

