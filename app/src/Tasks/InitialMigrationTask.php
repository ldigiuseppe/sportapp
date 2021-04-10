<?php

namespace SportApp\Tasks;

use SilverStripe\Dev\BuildTask;
use SportApp\DataObjects\Sportman;
use SportApp\DataObjects\Team;

class InitialMigrationTask extends BuildTask
{

    protected $title = 'Generate initial DB records';
    protected $description = 'Create records of sportmen and teams initially.';
    private static $segment = 'InitialMigrationTask';


    public function run($request)
    {
        $blackCaps = Team::create();
        $blackCaps->Name = 'Black Caps';
        $blackCaps->Colour = '000000';
        $blackCaps->MascotName = '';
        $blackCaps->Sport = 'Cricket';
        $blackCaps->Region = 'National';
        $blackCaps->Season = 'Winter';
        $blackCaps->write();

        $wellingtonHurracanes = Team::create();
        $wellingtonHurracanes->Name = 'Wellington Hurricanes';
        $wellingtonHurracanes->Colour = 'ffff00';
        $wellingtonHurracanes->MascotName = 'Captain Hurricane';
        $wellingtonHurracanes->Sport = 'Rugby';
        $wellingtonHurracanes->Region = 'Regional';
        $wellingtonHurracanes->Season = 'Summer';
        $wellingtonHurracanes->write();

        $allBlacks = Team::create();
        $allBlacks->Name = 'All Blacks';
        $allBlacks->Colour = '000000';
        $allBlacks->MascotName = 'Buck Shelford';
        $allBlacks->Sport = 'Rugby';
        $allBlacks->Region = 'National';
        $allBlacks->Season = 'Summer';
        $allBlacks->write();

        $aucklandBlues = Team::create();
        $aucklandBlues->Name = 'Auckland Blues';
        $aucklandBlues->Colour = '1100ff';
        $aucklandBlues->MascotName = 'Blue Beard';
        $aucklandBlues->Sport = 'Rugby';
        $aucklandBlues->Region = 'Regional';
        $aucklandBlues->Season = 'Summer';
        $aucklandBlues->write();

        $martin = Sportman::create();
        $martin->FirstName = 'Martin';
        $martin->LastName = 'Crowe';
        $martin->Teams()->add($blackCaps);
        $martin->write();

        $frank = Sportman::create();
        $frank->FirstName = 'Frank';
        $frank->LastName = 'Bunce';
        $frank->Teams()->add($allBlacks);
        $frank->Teams()->add($aucklandBlues);
        $frank->write();

        $jeff = Sportman::create();
        $jeff->FirstName = 'Jeff';
        $jeff->LastName = 'Wilson';
        $jeff->Teams()->add($allBlacks);
        $jeff->Teams()->add($wellingtonHurracanes);
        $jeff->Teams()->add($blackCaps);
        $jeff->write();
        echo 'DONE';
    }
}
