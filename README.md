## About

The purpose of this app was for a technical test where the main objective is to list the numbers 1 to 100, which represent parts of a wind turbine. Every time a number is divisible by 3 it should instead display "Coating Damage", and every time a number is divisible by 5 it should instead display "Lightning Damage", and if it is divisible by both 3 and 5 then it should instead display "Coating Damage and Lightning Damage". Otherwise just list the number. 

Beyond this using an AJAX call and creating a good UI with the data were some of the additional suggestions.

## Live app on Heroku

https://turbine-inspector-app.herokuapp.com/

## Planning

In thinking about this test I first considered how this might be represented if I was building an application for a real wind turbine. Having been around wind turbines up close during their construction I estimated that there aren't actually 100 parts in a wind turbine, and certainly not 100 main component parts. So I couldn't map the values 1 to 1 to anything in the real world, but still wanted to give a real world representation of the turbine. I considered splitting the numbers between the main components and compiling them into a list, but decided that wasn't going to be a worthwhile approach.

I then decided that a simpler structure of creating a Site, which then would contain a number of Turbines, which would each contain a number of Components was a better way to represent the real world relationship. I built classes into a single file to flesh out the relationship and added a quick script to help me think about the interaction. I also set up an AJAX call within another file to think about how that works, and whether it was worth using JQuery or sticking with Javascript.

I began experimenting with THREEjs to add some interactivity and visualisation to the application. This began with me modelling a wind turbine in Blender, before deciding to acquire one for free and include that in the project to save time. 

In regards to the core logic of the test, it stood out to me that in this test the combined outputs were joined with " and ". In similar tests it is combined as it without any joiner. I decided the best way to do this would be to record the damages against a Component as an array of strings, and then join them together with " and " in the final output rather than simply output "Coating Damage and Lightning Damage". While this gives the same output for this test as other approaches, it means that if the application was to be further developed and used in the real world, then it may not be the case that the recorded damages would appear in this order, or that these would be the 2 types of damages, or that there would only be 2. As can be seen from the rest of the logic it can be either or both. 

So when outputting, this code will loop through all of the components and check for damages. If there is no damages then it will output the component's ID instead, and if there is one damage it will output that. If there are multiple damages recorded, it will combine them and output as one string. 

## Development

To piece it all together I used Laravel as it is great for structuring the project and combining the front and back end. It is also helpful for setting up the AJAX call and for testing.

For styling I used the app of the company that provided the test as inspiration, trying to match their font, colour scheme and logo. I designed the logo in Adobe Illustrator outputting as an SVG, which I used again later as a loading spinner for the AJAX call. The spinner was animated with CSS3 animations. The UI menu animations are standard jQuery animations, which wait for the AJAX call to finish when expanding and skipping the AJAX call when retracting. 

To further personalise it I used the Bing Static Map API to retrieve a map image of a relevant location. I did this with a route when the application first loads, which THREEjs then uses as a plane texture. This gives the appearance that the 3D Turbine is placed in that location, and the API Key is stored in environment variables. 

## Further thoughts

For further personalisation I would like to have animated the wind turbine and use a weather API to get the wind speed for the location, which would in turn adjust the speed that the turbine would rotate. I would need to seperate the 3d Model in to at least 2 seperate .obj files to accomplish this, propellers and the rest, and then position the propellers appropriately, specifying an origin around the turbine's rotor. 

I removed the Site object model and controller from the application, as it wasn't necessary to the scope of this project. This project focusses on the Turbine and it's Components. However if I was to continue the project I would like to add the Site object back into the structure. I think it is a sensible way to represent the data and can be useful for 1 turbine or several. It could also be applicable for a location that doesn't have any turbines. Perhaps there would be other relevant structures to consider, in which case the Site object would have to be open to that. That could be an appropriate time to use a Factory pattern. 

I think it would be useful to populate the UI Menu with buttons based on what Sites and Turbines exist, and have an accordian style expansion. When you select a site, you see the relevant turbines, and when you select a turbine you see the appropriate report. 

I would like the report to display seperately from the menu, and for both the menu and the report to be draggable windelements the user can position on tablet and desktop sizes. 

Site, Turbine and Component should all be represented in a database, where they can be stored and associated with a User/Customer account. So I'd like the site to have a login for customers and their employees

The Bing Static Map API could be more modular. Turbines could have coordinates stored against them, and the API would look for the appropriate map to match the location.

Wind turbines sharing a site could all be mapped out on screen at once, allowing the user to fly between them, either via 3D navigation or a 2D selector that would pan the camera from one turbine to the next. Main components could change colour based on what type of damages or how many damages are recorded against them. Perhaps this would simply be about severity of the type of damage. They would then see a list, perhaps with notes or photographs regarding the damage. There could be an option to schedule maintenance at this point. 

## Steps to run locally

1 - `git clone https://github.com/alanisonline/turbine-app`

2 - copy contents of `.env.example` to a new `.env` file if it doesn't already exist

3 - add Bing static map api key to `BING_MAP_API_KEY=` variable in `.env`

4 - `composer install`

5 - `php artisan key:generate`

6 - `php artisan serve`

7 - go to `localhost:8000` in the browser unless command line shows an alternative