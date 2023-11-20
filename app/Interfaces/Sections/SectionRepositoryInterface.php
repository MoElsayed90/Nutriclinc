<?php
namespace App\InterFaces\Sections;

interface SectionRepositoryInterface
{
    //get all sections
        public function index();
        //Store Sections
        public function store($request);
        //Update Sections
        public function update($request);
            //delete Sections
            public function destroy($request);
}






?>