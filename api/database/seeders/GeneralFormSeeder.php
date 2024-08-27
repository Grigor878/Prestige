<?php

namespace Database\Seeders;

use App\Models\GlobalForm;
use App\Services\GeneralFormDataService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralFormSeeder extends Seeder
{

    private $generalFormDataService;

    public function __construct(GeneralFormDataService $generalFormDataService)
    {
        $this->generalFormDataService = $generalFormDataService;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $formList = $this->generalFormDataService->getData();

      $form = GlobalForm::updateOrCreate(['id' => '1']);
      $form->am = $formList['am'];
      $form->ru = $formList['ru'];
      $form->en = $formList['en'];
      $form->save();
    }
}
