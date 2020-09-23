# Currency Converter

## Installation guide

* Clone the repository;
* cp .env.example .env;
* Adjust configuration for your local environment in .env file;
* $composer install

## About application

Application has 3 sections:
1. In the "Currency Rates Calculator" section, you can enter a value, choose from which currency to convert.
2. In the "Request History" section you can see the results of all or the latest conversion requests and at what time they were made.
3. In the "Settings" section you can set the number of recent requests that are displayed in the history. You can also hide or display a list of all currencies available for conversion.

* Bootstrap was installed using Composer;
* API of PrivatBank was used to calculate exchange rates;
* Dotenv module was installed to load environment variables from a .env file into process.env;
* The MySQL database is created when the application is first launched. You only need to specify the settings in the .env file.