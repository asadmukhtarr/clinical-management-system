# Clinical Management System ..
# Pages For Software ..
    - Section 1: Before Login
        - Login
    - Section 2: After Login ..
        - Dashboard
        - Patient ( Create , All patient, patient Profile )
        - Doctors (Create, All Doctors)
        - Specialites
        - Appointment ( New Appiontment, All Appointment, Payment Gateway)
        - User Management ( Create User , All Users)
        - Settings
        - Logout ..
# Course Topic Scheduale ..
    - PHP Base ( Login System , CRUD System)... (Login , Forget Password, Register , Home) ..
    - Mysql ( DBMS )..
    - Laravel ( Clinical Management System) ..
    - React ( Website ) ...
# Guidelines
    - Types of servers:
	- Live Server : 
          We can access on live server, Any where in the world.
	  Namecheap , Bluehost , Godddy  ...
	  - Name of your website: domain ..
          - Storage of your website: Hosting ...
	- Local Server : We can access it only in computer for practice.
    - Steps For Install Php
        - Step # 1: Xampp ( Suggestion) / Wampp .. Download ...
        - Step # 2: Create Your First Project: .. 
            C:xampp/htdocs/{Your Project} ..
    - Require  ( Need ) .. Mostly For Backend Functoinality ...
    - Include (Shamil Krna ) ..  / inlucde_once(); ...
    - We Can Create Variable In PHP With alphabet only ..
    - We cant create variables wiht space , numbers ...
    - In php: = means for store value , == for comparison of value , === for comparison value + type ..
    - In php: For Redirect We can use: Header();
    - . concatination operator which is used to merge two variables , sentences ..
    - In php: we can use echo or print for print on screen but echo is recommender ..
    - Session ak aisa variable jis mai hm value store krva skty hein or project mai kahin b or kabi b use kr skty hein ..
    - session brwoser + compuer ...
    - cookies browser ...
    - Laravel Installations:
        - Step # 1: Download and install xampp/wampp...
        - Step # 2: Download Composer And Install
        - Step # 2.1: Open CMD In C:Xampp/htdocs/
        - Step # 3: Open CMD And RUN : composer global require laravel/installer
        - Step # 4: Now Create Your First Project: Laravel new <Project-Name /> ..
        - Step # 5: php artisan serve ( For RUn Project ) ..
    - Laravel Guidlines:
        - M : Model : Database Related Work ..     : App\Models ..
        - V : View  : Frontend Related Work        : resources\views ..
        - C : Controller : Backend Related Work .. : App\Http\Controllers ..
    - Laravel Authentication System With Vue ..
        - Step # 1: composer require laravel/ui
        - Step # 2: php artisan ui vue --auth 
        - Step # 3: php artisan migrate (optional) ..
        - Step # 4: npm install ( Download NodeJS And Install for Run Npm) , If node_moules folder will not appear in your project then run npm install --force 
        - Step # 5: npm run dev 
    - Routes , Views ...
        - Views: Frontend Apko Show Ho raha hai ... : resoruces/views .. extension .. filename.blade.php
        - Routes(urls, Links) : Direct Through View , Through Controller ..
        - For Controller: php artisan make:controller pagesController 
    - ReactJS
       - Installation:
       - requirements: Latest NodeJs Installed
       - command For Install Project: npx create-react-app project-name
       - RUn Project: npm start 
    - React Project:
        - Home : Doctors , Landing Page .. , Track ...
        - Doctors :
        - Schduale Appointments
        - Book New Appointment
        - About
        - Contact
# Tips And Tricks
    - We can write any code related to web in php .. ( Html , JS , PHP , CSS) ...
    - NPM ( Node Package Manager )
# Helping Links
    - https://www.youtube.com/watch?v=SMhcOUwRCt8&list=PLPvf-1cCig-HVjByU6jLou-IRlGpsGA61
# Commands:
    - For Create Controller: Php artisan make:controller nameController
    - For Migrate : php artisan migrate
    - For Create Model: php artisan make:model 
    - For Create Connected Model + Migration : php artisan make:model -m
# Javascript 
    - Events : Actions :- Click  , Doubel Click , Break , right click , left click , mouse over
    - Variables : Integer , String , Float, Chrac , Bool: when value will be in double courts it will be string ,   single court it will be integer ...
    - Main Types of functions : declare function , expression function , async function 
    - arrays and objects ...
    - Array : An array in JavaScript is a data structure used to store multiple values in a single variable. It's   like a list of items, where each item has an index starting from
# React Application
    - Pages:
        - Home
        - About
        - Contact
        - Book
        - Track
        - Doctors
    - Create Routes In React ...
        - Step # 1 : npm instal react-router-dom 
        - Step # 2 : BrwoserRouter In Index.js
        - Step # 3 : Import Routes And Route in App.js and create routes ...
        - Step # 4 : Add Links In Header ..
# API Links
    - For Doctors Against Specialities : http://localhost:8000/api/special/doctor/11
    - For All Doctors : http://localhost:8000/api/doctors
    - For Appointments : http://localhost:8000/api/appointments
    - For Specialities : http://localhost:8000/api/specialities/
# NodeJs 
    - Download And install NodeJS : https://nodejs.org/en/download
    - Install nodemon  .... for install nodemon
    - npm install express .... for install express ..
    - npm install ejs ........ for install html template engine ..
    - Steps for install ejs engine :
        - step # 1: npm install ejs
        - add const path = require('path'); below th express
        - set and bind ejs with expressjs:
            - app.set('view engine','ejs');
            - app.set('views',path.join(__dirname,'views'));
        - create a forlder of views (and add your first file index.ejs)
        - and render this file through route ..
