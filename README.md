<p align="center"><a href="https://github.com/daffahaidar/gamevor-backend/" target="_blank"><img src="https://user-images.githubusercontent.com/56962807/158961910-a434d6ce-1cf8-4944-b20f-3f3859087ea4.png" width="400"></a></p>

## API Reference

#### Login

```http
  POST {{API_URL}}/api/login
```

| Parameter  | Type     | Description                 |
| :--------- | :------- | :-------------------------- |
| `email`    | `string` | **Required**. Your Email    |
| `password` | `string` | **Required**. Your Password |

#### Register

```http
  POST {{API_URL}}/api/register
```

| Parameter  | Type     | Description                 |
| :--------- | :------- | :-------------------------- |
| `name`     | `string` | **Required**. Your Name     |
| `email`    | `string` | **Required**. Your Email    |
| `username` | `string` | **Required**. Your Username |
| `password` | `string` | **Required**. Your Password |

#### Logout

```http
  POST {{API_URL}}/api/logout
```

| Key             | Value              | Description |
| :-------------- | :----------------- | :---------- |
| `Accept`        | `application/json` |             |
| `Authorization` | `Bearer 6/Key`     |             |

#### Update Profile

```http
  POST {{API_URL}}/api/user
```

| Parameter  | Type     | Description                 |
| :--------- | :------- | :-------------------------- |
| `name`     | `string` | **Required**. Your Name     |
| `email`    | `string` | **Required**. Your Email    |
| `username` | `string` | **Required**. Your Username |
| `password` | `string` | **Required**. Your Password |

#### Update Profile Header

| Key             | Value              | Description |
| :-------------- | :----------------- | :---------- |
| `Accept`        | `application/json` |             |
| `Authorization` | `Bearer 7/Key`     |             |

More API is Comming Soon..
