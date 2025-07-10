<?php

return [
    'api_key' => env('GST_API_KEY'), // NO fallback value
    'endpoint' => env('GST_API_ENDPOINT', 'https://sheet.gstincheck.co.in/check'),
];
