<?php

namespace Plazari15\LaravelFluig\Service;

use Plazari15\LaravelFluig\Service\ApiClientService;
use Plazari15\LaravelFluig\Model\Dataset;

class DatasetService
{
    CONST getDatasetEndpoint = 'api/public/ecm/dataset/datasets';

    public function getDataset(Dataset $dataset){

        $apiClient = new ApiClientService;
        
        $data = [
            'name' => $dataset->name, 
            'fields' => $dataset->listFields,
            'constraints' => $dataset->listConstraints,
            'order' => $dataset->order
        ];

        $jsonResponse = $apiClient->post(self::getDatasetEndpoint, $data);
        return $jsonResponse;
    }
    
}