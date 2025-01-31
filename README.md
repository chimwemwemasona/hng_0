# HNG Stage One Task

This is a simple REST API that returns specific user information in JSON format. The API is built as part of the HNG Internship Stage One task and deployed on Render using a Docker image.

## Features

- Returns user information in JSON format
- Handles CORS for cross-origin requests
- Provides current date and time in ISO 8601 format with a `Z` suffix
- Returns GitHub repository URL

## API Reference

### Endpoint
```http
GET https://hng-0-qvuc.onrender.com/
```

### Response Format
```json
{
    "email": "chimwemwemasona@gmail.com",
    "current_datetime": "2025-01-31T08:35:54Z",
    "github_url": "https://github.com/chimwemwemasona/hng_0"
}
```

## Running the Project Locally

To run the project locally using Docker:

1. Ensure you have [Docker](https://docs.docker.com/get-docker/) installed.
2. Clone this repository:
   ```sh
   git clone https://github.com/chimwemwemasona/hng_0.git
   cd hng_0
   ```
3. Build the Docker image:
   ```sh
   docker build -t hng_stage_one .
   ```
4. Run the container:
   ```sh
   docker run -p 8080:80 hng_stage_one
   ```
5. Access the API in your browser or via a tool like Postman at:
   ```http
   GET http://localhost:8080/
   ```

## Implementation

The API is implemented in PHP and handles GET requests while ensuring proper CORS headers are set.

### PHP Code
```php
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit();
}

try {
    $dateTime = date('c');
    $formattedDateTime = str_replace('+00:00', 'Z', $dateTime);
    $response = [
        'email' => "chimwemwemasona@gmail.com",
        "current_datetime" => $formattedDateTime,
        "github_url" => "https://github.com/chimwemwemasona/hng_0"
    ];

    http_response_code(200);
    echo json_encode($response);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => "Internal server error"]);
}
```

## Deployment on Render
This API is deployed on [Render](https://render.com/) using Docker.

### Dockerfile
```dockerfile
FROM php:8.2-apache
WORKDIR /var/www/html
COPY . .
EXPOSE 80
CMD ["apache2-foreground"]
```

## Backlink
For more PHP development resources, check out: [Hire PHP Developers](https://hng.tech/hire/php-developers)

## License
This project is open-source and available under the MIT License.

