# Events App Backend API

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
- [API Endpoints](#api-endpoints)

## Introduction

Events App Backend API is the server-side component of an events application, designed using the Laravel framework to provide the necessary functionality for event management and attendee interactions. This API serves as the bridge between the app's frontend and the database, enabling users to discover sessions, personalize schedules and more. for easier testing the authentication features have not been implemented.

## Features

- **Session Management:** Read event sessions. supports: READ
- **Attendee Management:** Register attendees, manage profiles, and handle personalized agendas. supports: CREATE, READ, UPDATE
- **Sponsor Information:** Access details about event sponsors . supports: READ
- **Agenda:** Allow attendees to have multiple agendas. supports: CREATE, READ, UPDATE
- **Agenda Slots:** Allow attendees add slots of different activities to their agenda. supports: CREATE, READ, UPDATE

- **Ability to filter and search:** Define params in the url to search and filter data.

## Technologies Used

- **Programming Language:** PHP (Laravel)
- **Web Framework:** Laravel
- **Database:** MySQL
- **Deployment:** N/A

## Getting Started

- Clone the Repo
- Run `php artisan migrate:fresh --seed`
- Run `php artisan serve`

## API Endpoints

- **Attendees:** api/v1/attendees/
- **Sessions:** api/v1/sessions/
- **Sponsors:** api/v1/sponsors/
- **Agendas:** api/v1/agendas/
- **Slots:** api/v1/slots/

## How To Filter and Search

This type of filtering, implemented using the ApiQuery class, allows for versatile and dynamic search and filtering operations in API endpoints. It offers the ability to specify various search criteria and operators within the URL query parameters, making it highly adaptable to different use cases. By enabling parameters like "eq" (equal), "lt" (less than), "gt" (greater than), and "like" (partial match), users can fine-tune their queries to retrieve precisely the data they need. This approach significantly benefits developers and end-users alike, as it simplifies API requests and responses while providing granular control over data retrieval. Developers can create more flexible and user-friendly APIs, and end-users can easily filter and search for specific information, resulting in a more efficient and satisfying user experience.

- **Examples:** 
    - `/api/v1/attendees?firstName[like]=Jo` Get all the attendees where their name has Jo in it
    - `/api/v1/sessions?sessionType[eq]=keynote` Get all sessions where their type is keynote
    - `/api/v1/attendees?agendas=true` Show all attendees with their agendas 
    - `/api/v1/attendees/2?agendas=true&slots=true` Show specific attendee with their agenda and slots in their agenda 


