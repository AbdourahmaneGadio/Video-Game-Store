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