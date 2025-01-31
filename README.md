# HNG Stage One Task

This is a simple REST API that returns specific user information in JSON format. The API is built as part of the HNG Internship Stage One task.

## Features

- Returns user information in JSON format
- Handles CORS for cross-origin requests
- Provides current date and time in ISO 8601 format
- Returns GitHub repository URL

## API Reference
{
  "email": "your-email@example.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "<https://github.com/yourusername/your-repo>"
}

### Get User Information

```http
GET https://hng-0-qvuc.onrender.com/

### Response
```http
RESPONSE {"email":"chimwemwemasona@gmail.com","current_datetime":"2025-01-31T08:35:54Z","github_url":"https://github.com/chimwemwemasona/hng_0"}
