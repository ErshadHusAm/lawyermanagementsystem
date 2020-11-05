# lawyermanagementsystem
Introduction

Before starting develop this project, I have tried to find some similar system. But I was not satisfied with any of them. Because those were not exactly what I was looking for. I found many informative sites where people are able to see some lawyer’s details. I also found some websites which are dedicated to one lawyers’ firm or association. But I wanted to build an open platform for lawyers. Where any lawyer from any location with any specialty will be able to register themselves. In other hand, public will be able to find their lawyers by filtering them in just few clicks on computer screen.  So, here through my system both side problem will be solved. In this documentation I have discussed many aspects in details below. I have added some diagrams to justify my system & some test cases to show the ability of my system.

1.1	System developed:

The system I made is definitely something unique. Because you can consider this an open platform for all the lawyers. Different lawyers from different locations will be able to join this system by providing some information. This system can also be known as a freelancing platform for the lawyers. Users will be able to search their suitable lawyers & hire them for an individual case. The primary goal of this system is to help finding suitable lawyers. So here a question can arise how we can ensure that the lawyer will suitable? In answer to that I can say, in this system I am using filtering option to find lawyer. This lawyer finding system won’t be a typical one. The system will give the user an option to filter their finding. Initially I am using three different filtering option in my system. Those are, 1. Seniority / Experience 2. Expertise 3. Location. By using these three options filtering I can assume that the user will definitely able to find the suitable lawyer for them. Moreover, he can also visit the lawyer’s profile to know about the lawyer in details. The user will be also able to send the lawyers a booking request for appointment by selecting date. If the lawyer accepts his request the user will be notified. In other hand, the lawyer will also be able to see the user’s details. When they get any booking request. Because only the registered users will be able send booking request. So basically, three user panel in my system. Those are 1. Admin 2. Lawyer 3. General user.

1.2	Justification for the method:

To develop a system, it is mandatory to follow a specific development method. There are many software development methods & techniques like, 
•	Dynamic system development method (DSDM)
•	Joint application method (JAD)
•	Agile development
•	Structured system analysis & design method (SSADM)
In this project, I have chosen the SSADM method. This method is also known as waterfall method. In this method, there are many steps in sequence. So, the developer has to complete one step properly to proceed for the next step. But the planning should be very strong in this development method. This method is highly practical. The developers have to think practically before starting the planning. If the planning is perfect then there is very less chances of error. One of the most important part in this methodology is feasibility study. As I am the only developer in this project & all the requirements are set by my own so I have chosen this methodology. Because the frequent change of requirement won’t happen. So, this methodology will be perfect for this development. (Anon., 2011) (Anon., 2019)
1.3	The solution that emerged
I am introducing an online marketplace for lawyers. Here the lawyers will be able to register themselves by providing necessary information about them. Because I am also keeping the option of filtering the lawyers. Here people will be able to find lawyers without any hassle. It is difficult sometimes when the face any trouble and had to find a lawyer and they become panic. Through my system they will be able to find their suitable lawyer by few clicks on computer screen. The lawyers have to add some details when they register those will be saved in database lawyers table. User’s information will be also stored in user table. When the user sends booking request database will also save that. General users will also have the option to filter the search of lawyers. They will be able to search the lawyers by their location, experience and specialty. This system will show the filtered result to the user.

1.4	Aims and objectives of the system:

Outline of Aims:
1.	Building a web-based solution: I have built a web-based online lawyer management system where lawyers can be registered and found easily with filtering option.
2.	User log in system: I have created three types of user login system. 1. Admin 2. Lawyer 3. General user. Each type of users has to put their email ID and password to log in into the system.
3.	Register users with validation: I have created two types of user registration one is for lawyers and the other is for general users. I have created strong validation from the backend of the system which can’t be bypassed easily. Moreover, I have implemented mailing system for registration. Whenever a user is registered, they will receive an email & the password will be auto generated.
4.	Admin report generate: I have built a function for the admin in their dashboard. They will be able to check various information about their system. For example, how many lawyers are registered into their website, how many experienced lawyers are registered etc. all these data will be shown to them through pie charts.
5.	User friendly interface: I have tried to keep the user interface as much friendly as I can.
6.	Filtering search option: One of the major features of my system is general users will be able find lawyers through searching option.
7.	Booking system general user end: In this system general user can check out lawyer’s profile and send them booking request. Automatically an email will be generated and will be send to lawyer’s email. They will be able to see later whether their booking request is accepted or not.
8.	Booking system lawyers end: Lawyers will be able to check their latest booking requests once they are logged in. they will be also able to accept the booking request if they are agree to meet the client. They will also receive an email as a notification.
Outline of Objectives:
1.	Admin will be able to login to the system with their registered id and password which is stored in database. System admin will be able to see lawyers and general user’s profile and manipulate their account
2.	Once lawyers are registered admin approval will be needed to login into the system. The admin will get the chance to verify whether the lawyer is genuine or not.
3.	Admin will also be able to block users from the system if any inconvenience happens.
4.	To make the system more secure and authentic. Users don’t have to give their password while registering. A secured password will be generated automatically and will be sent to the user into their private email.
5.	The system enables web-based booking system.
6.	Both type of user will be able to update their profile once they are logged in into the system.
7.	Any guest user will be able o see the lawyers and check their profile. But for booking the lawyer they must have to register.
1.5	Short overview of the remaining chapter:
Initial Study: This was the first of analyzing my project. I have visited several related websites to gather knowledge about the system. I have created my own aims and objectives for my system and started development.
Feasibility Study: Feasibility study is usually done by the developers to find out whether my system is appropriate according to technical, economical, legal, operational environment or not.  It is an important part of software development lifecycle. I have also done this study to make my software more feasible. (Anon., 2019) 
Analysis: In this phase I have done many important parts of development. I have done MoSCoW prioritization to identify the priorities of my functions. I have created initial class diagram, Use Case diagram & system architecture to document my work.
Design: In this part I have worked on detail design of my system. I have tried to describe my system performance in this part. I have created detailed class diagram and sequence diagram to represent my system capabilities. 
Implementation: This is the final phase of my development. In this phase I started implementing all my planning for the system. I created database according to class diagram and started coding. One of the most important work in this phase was testing. I have done several testing to test my features. 

Functional requirements:
•	Two types of user registration one is for lawyers and the other is for general user. And three types of login panel one for admin, one for lawyer and other one is for general users.
•	Mailing option is integrated in registration of users. Once any user completes registration, a mail with auto generated password goes to user’s private email account. They have to go to their mail account to login to the system.
•	A Report containing many information about lawyers and users will be generated automatically in admin dashboard.
•	Admin will be able to approve & block lawyers who are registered and block general users if needed.
•	Lawyers and users are able to update their profile information and password whenever they need.
•	Users will be able to see lawyers’ profile but can’t send booking request unless they are logged in into the system.
•	Users will have search option to find suitable lawyers. They will be able to find lawyers according to their location, experience and expertise.
•	Users will be able to check any lawyers profile and send them booking request by selecting date via calendar. 
•	Users will be able to check the booking request status through their dashboard whether it is accepted or pending
•	Lawyers will be able to check if any booking request has come for them or not. And also, can accept or reject the request
Above mentioned requirements are functional requirement. These are also known as technical requirement. I have also identified some non-functional requirement of my system. I am mentioning them below:

Nonfunctional requirements:
•	Security
•	Performance
•	Storage
•	Accessibility
•	Availability
•	Reliability
•	Maintainability
•	Data integrity
•	Validation
•	Configuration
These are the basic nonfunctional requirements of my system. I have tried to implement these requirements to make system efficient and reliable.

Choice of programming language:
In order to develop a web-based system, I had to do my language selection. I had to find out how it will be easy and efficient for me. So, I have made my final choice on which part what language I am going to use. I am providing my selected languages below:
o	Html 
o	CSS
o	JavaScript
o	Bootstrap library
o	PHP
o	MySQL
To create the basic structure of my website I used html. With html I created forms, input field, navbar, header, footer, buttons & other necessary fields. Using the CSS, I designed the html layout. I have used margin padding where it was needed, I used JavaScript as the scripting language. All the validation and popup works are done by JavaScript. For Database I have chosen MySQL. It is one of the most popular and easy database query language. I have created all the tables and backend queries using MySQL. With MySQL I have chosen php as the middleware language. The combination of php and MySQL is great. So, I have decided to use this combination for best output. I have done all the critical tasks with php like crud function, login, register, filtering etc.
5.2 System cutover from the development architecture to the implementation architecture
Basically, a system cutover means the transition from an old telecommunication system into a new one. Details of system cutover will depend on your migration plan. Most commonly, the process of retiring the old system and bringing the new one on line is gradual, with the two systems, or at least their parts, coexisting for a while to enable an orderly and controlled transfer of the user fleets. (Anon., 2019) For my system the system cutover was not needed. Because I have planned a brand-new system. I am not building a system over an existing system. So, I didn’t have to plan any cutover. 
5.3 Data migration from the development architecture and/or existing systems to the implementation architecture:

Data migration is an important task. It means transporting the data between two storage or database. Data migration is needed to implement a new system. As my system is totally new. I do not have to migrate data from any other database. but before using the system management team has to enter some needed data to the database. 

Training:

Training is a non negotiable fact to run any new system. In order to run a new system successfully recruitment is needed. So, to run the system successfully recruited people should be trained. Though my system is made very easy to use. But to run the system from admin level we have to train the employees. Employees must be aware of the system very well. They should have the knowledge about how every feature of the system should run. Moreover, they must know how to run from the admin panel and how they can check the database. they must be able to manage the users. Without proper training system can fail. So, training is an important part of implementation.
6. Other Project matters
Here I am going to describe other important matters of project. Like project management, Risk management & configuration management.

Project Management:
Project management is the entire process of developing the system. It starts with requirement analysis and ends to testing and maintenance. The entire project management can be divided into 5 groups of work. They are, initiating, planning, executing, controlling and closing. As I have followed the SSADM methodology I had to do the entire work gradually in a sequence. A strong knowledge in project management leads to the success of any project. Usually project management draws knowledge on some specific areas. Those are,
•	Integration
•	Scope 
•	Time
•	Cost
•	Quality
•	Procurement
•	Human Resource
•	Communication
•	Risk management 
•	Stakeholder management
All these areas of project management are equally important. I have tried to focus on all these matters to make my project successful. (Anon., 2019)
 Problem identified and resolved for system:
As an academy project I tried to keep the project flawless. To do that I faced many difficulties and problems. I have been stuck in many features and couldn’t be able to do those easily. One of them was email integration. There is a function in my system of email verification during registration. I had to spent a lot of time to implement that. It was quite hard for me to implement because at one point my mailing address was not coping up with the system. I have browsed internet about the problem and solved it after doing research. I also faced problem in implementing the search option. My plan was to searching lawyers based on their experience, location and expertise. It was being quite tough for me. I had to take help from internet and successfully solved it. Booking the lawyers was also a tough part for me. Couldn’t do much in this section but successfully able to send the lawyers booking request from user end and lawyers will be able to accept or reject the booking and user will be notified.  

Further improvements:

I have tried to make my system strong enough. But still there are some factors that should be implemented to the system. I am mentioning some of them below:
•	Payment gateway integration: In future payment gateway can be integrated to the system. It will be a great source of generating revenue for the business purpose. 
•	Map Integration: Integrating the map for searching was my initial planning for this system. But couldn’t get enough time to integrate such big feature. But it can be implemented in future. It will give the user best experience.
•	Updated User profile: In future there can be implemented more fields for user input and gather more information about the user will be helpful. A strong database will be created from backend.
•	Admin access: Admin of the system should have more access to the information from their dashboard. In future the admin dashboard should be more dynamic.
•	Security: The system should be made more secure in order to prevent any cyber attack.
•	Pixel perfect responsiveness: Bootstrap has been used in the system to make it responsive but it is not fully responsive till now. Have to do more work to make it pixel perfect layout.


