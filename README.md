# Installer for Diginiq Starter project using CodeIgniter 4

## Installation

1. `composer create-project arif-rh/diginiq-installer ci4-project` 
2. `cd ci4-project`
3. set app.baseURL
4. set database configuration
5. `php spark migrate --all`
6. `php spark db:seed \\Arifrh\\Auth\\Database\\Seeds\\AuthSeeder`
7. if want to generate dummy user, run `php spark db:seed \\Arifrh\\Auth\\Database\\Seeds\\UserSeeder`
8. go to baseURL/register if want to create user from site

## Features

- Using Dynamic Model with Built-in Relationship feature [DynaModel](https://github.com/arif-rh/ci4-dynamic-model)
- Customize layout based on [CI4 Themes](https://github.com/arif-rh/ci4-themes)
- Using Auth Package [CI4 Auth](https://github.com/arif-rh/ci4-auth)
