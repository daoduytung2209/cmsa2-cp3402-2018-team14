# cmsa2-cp3402-2018-team14
cmsa2-cp3402-2018-team14 created by GitHub Classroom

Generating Theme
Visit https://underscores.me/ 
Generate a new theme with SASS enabled using Underscore’s advanced settings.
Once the theme is generated, it will be automatically downloaded to your system.
Paste theme inside you wordpress installation under wordpress\wp-content\plugins\yourthemehere\
Open directory in phpstorm for editing 
Local Environment
Download WampServer: http://www.wampserver.com/en/ 
Setup a database in Wamp by opening Wamp, right clicking on its icon and visiting “phpMyAdmin”
After installation of WampServer find and install wordpress: https://wordpress.org/download/ 
When your download of the Zip file is complete, extract the WordPress folder out of the Zip file and into the “www” folder of Wamp’s installation location. Usually, Wamp will be installed under “(C:)”.
Once Wordpress is in Wamp’s “www” folder, open Wordpress. To do so, execute Wamp, and in your browser visit http://localhost/wordpress/. This is assuming that the wordpress folder you pasted into Wamp hasn’t had its folder name changed.
When you open Wordpress, set it up with the guide you’re presented with.
Github
If you haven’t already, generate a Github repository for your team to use.
Generate a staging and a master branch using the drop down in the repository of the Github account.
Upload the previously generated theme into the newly created staging branch.
Trello
Create or log in to a account for trello
Click create a board
Give the board a title & a desired theme
Then ensure if trello board is to be public below the title
Click create board
Add members to the board by the name of their trello user by the name of the board
Create lists of production
Create card of tasks & apply a timeframe if necessary




Slack
Create a slack group
Add members to the slack group
Then to include notifications for trello and github
In Slack, click on the top-left site/username link and click Administration > Manage Apps
Click Trello Alerts, then click on Add Configuration
Choose your project group and click Add Trello Integration
Choose your Trello board, customise the options and click Save. You will probably find that ticking everything will be too 'noisy' (too many unhelpful messages in the Slack channel), so try it out and see what works for your team. You can always adjust it.
Find and apply the github app
Then copy the repository link and apply it to the app watcher
Subscribe members to watching with /github subscribe https://github.com/repositoryname
PhpStorm
Download PhpStorm: https://www.jetbrains.com/phpstorm/download/#section=windows 
Run exe file and follow install instructions.

Installing Sass
Download and install Sass/Scss: http://www.ruby-lang.org/en/downloads/ 
Run gem.bat 
Choose installation package [1]
Type the following command prompt or powershell : <code>gem install sass</code>

File Watcher
In PhpStorm: File> Settings/Preferences | Tools > File watcher
Click the add button (Green plus) and choos SCSS
Locate scss.bat in the Program box: C:\Ruby24-x64\bin\scss.bat
Set the Arguments: --no-cache --update $FileName$:$FileNameWithoutExtension$.css
Set the output: $FileNameWithoutExtension$.css:$FileNameWithoutExtension$.css.map

Syncing with Github
Select File>Settings>Version Control>Github and login into your Github account
Once your Github account is setup with PhpStorm, select the “VCS” drop-down, hit Checkout From Version Control>Git and paste the Github repository’s link.
To keep your project up to date go: VCS > Pull.
Apply changes: VCS>Push
Staging and Production
Google Cloud
Create a google account or use a existing account to sign in: https://cloud.google.com/ 
Go to the console and start a new project
Then can add in other members if necessary to be admins also to the project
Under getting started select deploy a prebuilt solution
Under Blog & CMS then find and apply wordpress certified by Bitnami
Launch on Compute engine
Name the machine and select the location then deploy 
With the trial there is only one static IP per location so ensure that the locations are different
Under VPC Network go to external IP address
Change the machine IP to ephemeral to static
Name the IP address and reserve
Modify machines to fit needs
Bitnami images documentation https://docs.bitnami.com/google/apps/wordpress/ add in members as admins to the wordpress installation. Link domain to now created wordpress machine (will need a domain in order to view live). 
      12.WP pusher plugin add to the wordpress
Download from https://wppusher.com/ Add through wp-admin as an uploaded plugin

