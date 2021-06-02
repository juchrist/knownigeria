
## About Knownigeria

Know Nigeria API is an Open Source that provides you with necessary information about all 36 Nigerian States, (Local Governments, Governors and Deputy Governors). This page contains the official documentation for the KnowNigeria API. This API uses `POST && GET` request to communicate and HTTP.

- [Official Website](http://knigeria.herokuapp.com).


### API Valid URL Endpoints and What they do
| Data        | URL Endpoint                                          |
|-------------|-------------------------------------------------------|
|  Get all states at once  | https://myknapi.herokuapp.com/api/v1/states  |
| Get Individual States Information | http://myknapi.herokuapp.com/api/v1/states/{state_id} |
| Get  all Local Governements | http://myknapi.herokuapp.com/api/v1/lgas |
|  Get all Local Governements in a State  | http://myknapi.herokuapp.com/api/v1/state/state_id/lgas |
| Get data for a specific Local Governement | http://myknapi.herokuapp.com/api/v1/lgas/state_id |
| Get data for a Governor in Nigeria | http://myknapi.herokuapp.com/api/v1/state/state_id/governor  |


### Response Codes
```
200: Success
400: Bad request
401: Unauthorized
404: Cannot be found
405: Method not allowed
422: Unprocessable Entity 
50X: Server Error
```