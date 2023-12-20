<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    private $ad_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($ad_image_id)
    {
        $this->ad_image_id = $ad_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $i = Image::find($this->ad_image_id);
            if (!$i) {
                return;
            }
    
            $image = file_get_contents(storage_path('app/public/' . $i->path));
            // Imposta La variabile di ambiente GOOGLE_APPLICATION_ CREDENTIALS
            // al path del credentials file
            putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
            
            $imageAnnotator = new ImageAnnotatorClient();
            $response = $imageAnnotator->safeSearchDetection($image);
            $imageAnnotator->close();
    
            $safe = $response->getSafeSearchAnnotation();
    
            $adult = $safe->getAdult();
            $medical = $safe->getMedical();
            $spoof = $safe->getSpoof();
            $violence = $safe->getViolence();
            $racy = $safe->getRacy();
            
            $likelihoodName = [
                'text-secondary fas fa-circle', 'text-success fas fa-circle', 'text-success fas fa-circle' , 'text-warning fas fa-circle' , 'text-warning fas fa-circle',
                'text-danger fas fa-circle'
            ];
    
            $i->adult = $likelihoodName[$adult];
            $i->medical = $likelihoodName[$medical];
            $i->spoof = $likelihoodName[$spoof];
            $i->violence = $likelihoodName[$violence];
            $i->racy = $likelihoodName[$racy];
            
            $i->save();
        } catch (\Google\ApiCore\ApiException $e) {
            // Gestisci l'errore dell'API di Google qui
            // Ad esempio, puoi impostare valori predefiniti o utilizzare un'immagine di fallback
            $i->adult = 'valore predefinito o fallback';
            $i->medical = 'valore predefinito o fallback';
            $i->spoof = 'valore predefinito o fallback';
            $i->violence = 'valore predefinito o fallback';
            $i->racy = 'valore predefinito o fallback';
            $i->save();
        }
    }
}