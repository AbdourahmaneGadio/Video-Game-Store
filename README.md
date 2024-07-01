# Creation of an Online Game Rental Store

## Development of a Web Tool for Game Management

#### Definition of a Game
* **Game Title**
* **Publisher**
* **Release Year**
* **Summary**
* **Target Audience**
* **Visual**

#### Creating New Games
Create a form to input game information. Store the information in a MySQL database.

#### Deleting New Games
Create a button to delete a game. Verify if the game is assigned to a client before deleting it. Delete the game information from the MySQL database.

#### Updating a Game
Create a form to update game information. Store the updates in the MySQL database.

### Creating a Tool to Display the Game List
Create a page to display the game list. Display game information (title, publisher, release year, summary, target audience, visual).

## Game Reservation by Clients

#### For Each Game, Display a "Name" Field for the Client to Enter Their Name
Create a field for the client to input their name. Store the client's name in the MySQL database.

#### When Validated, the Game is Assigned
Verify if the game is available before assigning it. Store the game assignment in the MySQL database.

#### If a Game is Assigned, Display the Client's Name and Prevent Further Rentals
Display the client's name who rented the game. Update the game status to indicate it is assigned.

#### On the Lender's Table, Add the Names of Clients Who Have Rented a Game
Create a table to display clients who have rented a game. Update the table in real-time to reflect game assignments and returns.

#### When a Game is Rented, Add a "Return" Button to Indicate the Game Has Been Returned
Create a "Return" button to allow the client to return the game. Verify if the game is assigned to a client before returning it. Store the game return in the MySQL database.

#### If the "Return" Button is Clicked, the Renter's Name is Cleared and the Game Can Be Rented Again
Update the game status to indicate it is available again. Clear the client's name who rented the game.

## Launching the Website

### Prerequisites

1. **Local Server**: Install a local server such as XAMPP or MAMP.
2. **MySQL Database**: Install a MySQL database and create a new database for the project.
3. **PHPMyAdmin**: Install PHPMyAdmin to manage the MySQL database.

### Steps to Launch the Website

1. **Create a New Database**: Create a new database in MySQL using PHPMyAdmin.
2. **Create Tables**: Create the necessary tables in the database using SQL queries.
3. **Upload Files**: Upload the project files to the local server.
4. **Configure PHP**: Configure the PHP settings to connect to the MySQL database.
5. **Start the Server**: Start the local server.
6. **Access the Website**: Access the website by navigating to the URL `http://localhost/Video-Game-Store`.

### Troubleshooting

1. **Check PHP Settings**: Verify that the PHP settings are correct and the MySQL database is connected.
2. **Check Database Tables**: Verify that the necessary tables are created in the database.
3. **Check File Permissions**: Verify that the file permissions are correct and the files are accessible.

By following these steps, you should be able to launch the website and start using it to manage game rentals.

## To do

User Functionalities:

1. **Browse and Search Games**:
   - Allow users to browse through the available video games by categories, genres, platforms, etc.
   - ~~Provide a search functionality to let users search for specific games by title, developer, release year, etc.~~ 

2. **Game Details and Availability**:
   - Display detailed information about each game, including screenshots, ~~trailers, descriptions,~~ ratings, and reviews.
   - ~~Show the availability status of each game (in-stock, rented out, etc.) and the rental price.~~

3. **Rent and Return Games**:
   - Enable users to rent video games by ~~adding them to a cart~~ and completing the rental process.
   - Allow users to return rented games and track their rental history.

4. **User Accounts and Profiles**:
   - ~~Provide user registration and login functionality.~~
   - Allow users to manage their ~~account information,~~ rental history, and payment methods.
   - Implement features like wish lists, game recommendations, and rental reminders.

5. **Ratings and Reviews**:
   - Let users rate and review the rented games, providing feedback to other users.
   - Display aggregated ratings and reviews for each game.

6. **Rental Policies and Terms**:
   - Clearly communicate the rental policies, such as rental duration, late fees, and damage policies.
   - Provide easy access to the terms of service and privacy policy.

Administrator Functionalities:

1. **Inventory Management**:
   - ~~Allow administrators to add, update, and remove video game listings.~~
   - Manage the availability and stock levels of each game.
   - Track rental history and game return status.

2. **User Management**:
   - Provide an admin dashboard to view and manage user accounts, including their rental history and profiles.
   ~~- Implement user roles and permissions (e.g., regular users, premium users, administrators).~~

3. **Rental Management**:
   - Monitor and manage ongoing rentals, including overdue returns and late fees.
   - Generate reports on rental trends, popular games, and revenue.

4. **Pricing and Promotions**:
   - ~~Set and update rental prices for different games and user tiers.~~
   - Create and manage promotional offers, discounts, and subscription plans.

5. **Customer Support**:
   - Provide a support system for users to submit inquiries, complaints, or feedback.
   - Empower administrators to respond to user issues and resolve problems.

6. **Analytics and Reporting**:
   - Implement analytics to track key performance indicators, such as user engagement, rental trends, and revenue.
   - Generate comprehensive reports to help administrators make informed business decisions.

7. **Security and Compliance**:
   - Ensure secure payment processing and data protection for user information.
   - Maintain compliance with relevant laws and regulations (e.g., data privacy, consumer protection).
