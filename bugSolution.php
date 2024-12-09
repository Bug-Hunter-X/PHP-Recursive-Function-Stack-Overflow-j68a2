```php
function processData(array $data, int $depth = 0, int $maxDepth = 100): array {
    if ($depth > $maxDepth) {
        return $data; // Return early if max depth is reached
    }

    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value, $depth + 1, $maxDepth); // Recursive call with depth check
        } else if (is_string($value) && strpos($value, 'error') !== false) {
            $data[$key] = str_replace('error', 'problem', $value);
        }
    }
    return $data;
}

$data = [
    'name' => 'John Doe',
    'details' => [
        'age' => 30,
        'status' => 'error: inactive',
        'address' => [
            'street' => '123 Main St',
            'city' => 'Anytown',
        ],
    ],
];

$processedData = processData($data);
print_r($processedData);
```