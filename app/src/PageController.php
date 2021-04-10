<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SportApp\DataObjects\Sportman;
    use SportApp\DataObjects\Team;

    class PageController extends ContentController
    {
        /**
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
        }

        /**
         * Returns if it exists a Team with Name All Blacks
         * 
         * @return Team|null 
         */
        public function getAllBlacks(): ?Team
        {
            return Team::get()->filter([
                'Name' => 'All Blacks'
            ])->first();
        }

        /** Returns if it exists a Sportman called Jeff Wilson
         * 
         * @return Sportman|null 
         */
        public function getJeffWilson(): ?Sportman
        {
            return Sportman::get()->filter([
                'FirstName' => 'Jeff',
                'LastName' => 'Wilson',
            ])->first();
        }
    }
}
