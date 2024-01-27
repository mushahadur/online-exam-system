<p align="center">
 <img width="100px" src="./public/frontend/img/1.png" align="center" alt="Logo" />
 <h2 align="center">This is my Vista-Print-Project</h2>
 <p align="center"></p>
</p>


## Indexing
- [About Project](#about)
- [Use of Technology](#technology)
- [Installing  Project](#installing)
- [Objective  ](#objective)
- [Key Features](#features)
- [Work Procedure](#work_flow)





<br>
<br>
<br>
<br>
<br>
<hr>

### About Project <a name="about"></a>
VistaPrint has helped small business owners, entrepreneurs and dreamers create custom designs and professional marketing. Our online printing services are intended to help you find custom products you need – business cards, promotional marketing and more – to create a look you love.

<hr>

### Use of Technology <a name="technology"></a>


 | Field        | Technology                  |
 | ------------ | ---------------------- |
 | Frontend | JavaScript, JQuery, HTML5, CSS3, Bootstrap 5.x |
 | Backend | PHP, Laravel, Ajax. |
 | Database | PDO, MySQL.|
 | DevOps | Version Control Tool: GitHub |
 | Communication and Collaboration | Slack, Trello |
 | Graphic Design | Canva, Online Tools |



<br>
<br>
<hr>

### Installing Project <a name="installing"></a>
It is php 8.1.2 version
- git clone
- composer install
- php artisan key:generate
- Setup .env file with Database
- php artisan migrate:fresh --seed
- npm install
- npm run dev
- php artisan serve
- if Login to Admin Panel ->Gmail:superadmin@gmail.com || Password:12345678

<hr>

### Objective Project <a name="objective"></a>
 Create an Vista Print Project application using PHP Laravel that allows users to browse, search, and purchase images. The application should showcase OOP principles, utilize Laravel's features, implement RESTful APIs, and demonstrate the use of middleware for authentication and authorization.

<hr>

### Key Features <a name="features"></a>
1. User Registration and Authentication: 
    - Users can register, login, and manage their profiles. 
    - Implement middleware for user authentication and authorization to ensure secure access to certain features.
<br>
<p align="center">
<h3>This is User Table</h3>


| SI No   | Name    |    Email              | Role      | Status      | Action       |
| ------- | --------| --------------------- | --------------| ------ | -------------|
| 01 | Super Admin  | superadmin@gmail.com  | superadmin| Active     | ............ |
| 02 |  Admin  | admin@gmail.com  | admin| Deactive   |Edit   Delete  |
| 03 | Pulock  | Pulock@gmail.com  | oparetor| Active  |Edit   Delete   |
| 04 | Mushahedur  | Mushahedur@gmail.com  | Manager| Status     |Edit   Delete   |


</p>

2. Create Category: 
    - Category can show navbar . 
    - Category Create , Read, Update , delete. and also status manage by admin.

<br>

User can create a category and also manages category tabel.

<p align="center">
<h3>This is Category Table</h3>


| SI No   | Category Name    | Status                 | Action       |
| ------- | -----------------| --------------------- | --------------| 
| 01 | Bussiness Card  |  is_Active     | Edit   Delete |
| 02 |  Pen    | is_Active     |Edit   Delete  |
| 03 | Cup   | is_Active     |Edit   Delete   |
| 04 | Phone Cover  |  is_Active |Edit   Delete   |


</p>


3. Several Types of Image: 
    - Create a database of Vista-Print with attributes such as title, subtitle, category, and Several images. 
    - Implement a RESTful API 
    - information (GET request) and allow administrators to add, update, or delete  (POST, PUT, DELETE requests).

<p align="center">
<h3 >This is Post Table</h3>


| SI No   | Title    |    Sub Title | Tag |    Slider Images   | Thumbnail | Status | Action       |
| ------- | --------| ---------- | -------| ------------------ | ----------|------- | -------------|
| 01 | Post Title 1  | Post Sub Title 1  | Post Tag 1 | S_image 1  | Thumbnail 1 | Active  | Edit   Delete |
| 02 | Post Title 2  | Post Sub Title 2  | Post Tag 2 | S_image 2  | Thumbnail 2 | Deactive  | Edit   Delete |
| 03 | Post Title 3  | Post Sub Title 3  | Post Tag 3 | S_image 3  | Thumbnail 3 | Active  | Edit   Delete |


</p>


 4. User Roles: 
    - Define user roles such as "User" and "Administrator." 
    - Admins have additional privileges like managing Image and user accounts.


### Work Procedure <a name="work_flow"></a>

- Login as a super admin 
    - Gmail: superadmin@gmail.com
    - Password: 12345678
- Sign Up for other user 
    - Gmail: must be unique
    - Password: must be Eight Cherecters
