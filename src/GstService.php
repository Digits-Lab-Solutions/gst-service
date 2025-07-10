<?php

namespace Digitslab\GstService;

use Illuminate\Support\Facades\Http;

class GstService
{
    public static function fetch(string $gstin): array
    {
        $url = config('gstservice.endpoint') . '/' . config('gstservice.api_key') . '/' . $gstin;

        try {
            $response = Http::timeout(10)->get($url);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'message' => 'GSTIN Details Received.',
                    'data' => $response->json()
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'GSTIN API returned an error.',
                    'data' => $response->body()
                ];
            }
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'GSTIN Fetching Failed.',
                'data' => $e->getMessage()
            ];
        }
    }
}
