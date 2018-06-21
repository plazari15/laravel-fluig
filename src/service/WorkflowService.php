<?php

namespace Plazari15\LaravelFluig\Service;

use Plazari15\LaravelFluig\Model\Workflow;
use Plazari15\LaravelFluig\Service\ApiClientService;
use Plazari15\LaravelFluig\Model\Dataset;

class WorkflowService
{
    private $apiClient;

    CONST findObservationEndpoint = '/api/public/2.0/workflows/findActiveTasks/';
    CONST createProcessObservationEndpoint = '/api/public/2.0/workflows/createProcessObservation';
    CONST DownloadFileEndpoint = '/api/public/ecm/document/activedocument/';


    public function __construct()
    {
        $this->apiClient = new ApiClientService;
    }

    public function findObservations($process){
        $jsonResponse = $this->apiClient->get(self::findObservationEndpoint.$process);
        return $jsonResponse;
    }

    public function getFileEcmDownload($attachmentId){
        $jsonResponse = $this->apiClient->get(self::DownloadFileEndpoint.$attachmentId);

        return $jsonResponse;
    }

    public function sendProcessObservation(Workflow $workflow){
        $data = [
            "processInstanceId" => intval($workflow->processInstanceId),
            "stateSequence" => intval($workflow->stateSequence),
            "threadSequence" => intval($workflow->threadSequence),
            "observation" => $workflow->observation
        ];

        $response = $this->apiClient->post(self::createProcessObservationEndpoint, $data);

        return $response;
    }
    
}