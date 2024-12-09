```php
function processData(array $data): array {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value); // Recursive call
        } else if (is_string($value) && strpos($value, 'error') !== false) {
            // Handle error strings differently
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