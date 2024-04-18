<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use Filament\Actions;
use App\Models\DocumentaryRequirement;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServiceResource;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

//     protected function handleCreate(array $data): array
// {
//     // Create the service
//     $service = parent::handleCreate($data);

//     // Ensure the service has an 'id' before creating a DocumentaryRequirement
//     if ($service->id) {
//         // Create a DocumentaryRequirement with the associated service_id
//         $documentaryRequirement = new DocumentaryRequirement([
//             'service_id' => $service->id,
//             'documentary_requirement' => $data['documentary_requirement'],
//             'where_to_secure' => $data['where_to_secure'], // Assuming 'where_to_secure' is a field in your form
//             // Add any other fields you want to set for the documentary requirement
//         ]);
//         $documentaryRequirement->save();
//     }

//     return $service;
// }


}
