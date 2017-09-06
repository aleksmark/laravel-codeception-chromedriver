<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('see laravel welcome page');

$I->amOnPage('/');

$I->see('Laravel');
