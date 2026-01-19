# audio-forge

A PHP library for multi-threaded audio processing using background workers.

### Installation

Install via composer:

```bash
composer require your-vendor/audio-forge
```

### Usage

```php
use AudioForge\Audioforge;

$processor = new Audioforge();

// Process audio files in parallel
$processor->addJob('input.wav', 'output.mp3');
$processor->run();
```

### License

MIT License. See LICENSE file for details.





