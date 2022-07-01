<p align="center"><a href="https://github.com/daffahaidar/gamevor-backend/" target="_blank"><img src="https://user-images.githubusercontent.com/56962807/158961910-a434d6ce-1cf8-4944-b20f-3f3859087ea4.png" width="400"></a></p>

### API Reference

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

#### User Data

```http
  GET {{API_URL}}/api/user
```

| Key             | Value              | Example Key                                |
| :-------------- | :----------------- | :----------------------------------------- |
| `Accept`        | `application/json` |                                            |
| `Authorization` | `Bearer 7`         | `3CnhqxxjI8eE9nTssSQUEvi5sEdtTmTqLkNneavz` |

#### Products Data

```http
  GET {{API_URL}}/api/products
```

| Key           | Example Value  |
| :------------ | :------------- |
| `id`          | 1              |
| `limit`       | 6              |
| `name`        | Mobile Legends |
| `description` | Awesome        |
| `price_from`  | 1              |
| `price_to`    | 10000          |
| `tags`        | popular        |
| `category`    | 1              |

#### Products Category

```http
  GET {{API_URL}}/api/categories?show_product={Key}
```

| Key            | Example Value  |
| :------------- | :------------- |
| `id`           | 1              |
| `limit`        | 6              |
| `name`         | Mobile Legends |
| `show_product` | 1              |

#### Transactions

```http
  GET {{API_URL}}/api/transactions
```

| Key      | Example Value |
| :------- | :------------ |
| `id`     | 1             |
| `limit`  | 6             |
| `status` | PENDING       |

#### Checkout Data

```http
  GET {{API_URL}}/api/checkout
```

```
  {
    "address": "Kota Bandung",
    "items": [
        {
            "id": 1,
            "quantity": 2
        },
        {
            "id": 2,
            "quantity": 2
        },
        {
            "id": 3,
            "quantity": 2
        }
    ],
    "status": "PENDING",
    "total_price": 6000,
    "shipping_price": 1000
}
```
