# GST Service Package for Laravel

This package allows you to fetch GSTIN details using an external API service.

## Installation

Add the repository to your `composer.json`:

```
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/digitslab/gst-service"
  }
],
"require": {
  "digitslab/gst-service": "dev-main"
}
```

Then run:

```
composer require digitslab/gst-service:^1.2

```

## Usage

```php
use Digitslab\GstService\GstService;

$data = GstService::fetch('GSTNUMBER');
```

## Configuration

Publish the config (optional):

```
php artisan vendor:publish --tag=config
```

Set API Key and Endpoint in `.env`:

```
GST_API_KEY=your-api-key
GST_API_ENDPOINT=https://sheet.gstincheck.co.in/check
```

## License

MIT
